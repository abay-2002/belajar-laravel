<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Akbar Angkasa",
        "email" => "akbar121202@gmail.com",
        "img" => "akbar-angkasa.jpg"
    ]);
});

Route::get('/blog', [PostsController::class, 'index']);
Route::get('posts/{slug}', [PostsController::class, 'show']);