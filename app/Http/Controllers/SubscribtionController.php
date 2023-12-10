<?php

namespace App\Http\Controllers;

use App\Mail\BlogMail;
use App\Mail\NewsletterMail;
use App\Models\Subscribtion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreSubscribtionRequest;
use App\Http\Requests\UpdateSubscribtionRequest;

class SubscribtionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("subscribtions.index", [
            "subscribtions" => Subscribtion::select("email", "slug")->paginate(5)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscribtionRequest $request)
    {
        Subscribtion::create([
            "email" => $request->email,
        ]);

        return response()->json([
            "message" => "Subscribtion created successfully"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribtion $subscribtion)
    {
        $subscribtion->delete();
        return redirect("/dashboard/subscribtions");
    }

    public function sendNewsletter()
    {
        return view("subscribtions.sendNewsletter");
    }

    public function sendNewsletterStore(Request $request)
    {
        $request->validate([
            'attachment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $image = $request->file("attachment")->store("newsletters", "public");
        $subscribtions = Subscribtion::select("email")->get();
        foreach ($subscribtions as $subscribtion) {
            Mail::to($subscribtion->email)->send(new NewsletterMail($request->subject, $request->content, $image));
        }
        return redirect("/dashboard/subscribtions");
    }
}
