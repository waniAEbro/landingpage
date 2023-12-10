<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Mail\MyTestMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpages.blogs', [
            "blogs" => Blog::orderBy('created_at', "desc")->limit(10)->get()
        ]);
    }

    public function dashboard()
    {
        return view('blogs.index', [
            "blogs" => Blog::select("image", "title", "description", "slug")->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $path = $request->file("image")->store("blogs", "public");
        Blog::create([
            "title" => $request->title,
            "description" => $request->description,
            "image" => "/storage/" . $path,
        ]);

        return redirect("/dashboard/blogs");
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('landingpages.showBlog', [
            "blog" => $blog
        ]);
    }

    public function dashboardShow(Blog $blog)
    {
        return view('blogs.show', [
            "blog" => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', [
            "blog" => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        if ($request->hasFile("image")) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            $path = str_replace("/storage", "public", $blog->image);
            Storage::delete($path);
            $path = $request->file("image")->store("blogs", "public");
            $blog->update([
                "image" => "/storage/" . $path
            ]);
        }
        $blog->update([
            "title" => $request->title,
            "description" => $request->description,
        ]);

        return redirect("/dashboard/blogs");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $path = str_replace("/storage", "public", $blog->image);
        Storage::delete($path);
        $blog->delete();

        return redirect("/dashboard/blogs");
    }
}
