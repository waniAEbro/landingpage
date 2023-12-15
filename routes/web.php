<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubscribtionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "store"]);

Route::get('/', function () {
    return view('landingpages.index');
});
Route::get("/sekolahin", function () {
    return view('landingpages.sekolahin');
});
Route::get("/about", function () {
    return view('landingpages.about');
});

Route::get("/blogs", [BlogController::class, "index"]);
Route::get("/blogs/{blog:slug}", [BlogController::class, "show"]);

Route::middleware("auth")->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard.index");
    });
    Route::get("/dashboard/blogs", [BlogController::class, "dashboard"]);
    Route::get("/dashboard/blogs/create", [BlogController::class, "create"]);
    Route::post("/dashboard/blogs", [BlogController::class, "store"]);
    Route::get("/dashboard/blogs/{blog:slug}", [BlogController::class, "dashboardShow"]);
    Route::get("/dashboard/blogs/{blog:slug}/edit", [BlogController::class, "edit"]);
    Route::put("/dashboard/blogs/{blog:slug}", [BlogController::class, "update"]);
    Route::delete("/dashboard/blogs/{blog:slug}", [BlogController::class, "destroy"]);
    Route::get("/dashboard/subscribtions", [SubscribtionController::class, "index"]);
    Route::get("/dashboard/subscribtions/send-newsletter", [SubscribtionController::class, "sendNewsletter"]);
    Route::post("/dashboard/subscribtions/send-newsletter", [SubscribtionController::class, "sendNewsletterStore"]);
    Route::delete("/dashboard/subscribtions/{subscribtion:slug}", [SubscribtionController::class, "destroy"]);
});
