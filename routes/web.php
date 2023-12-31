<?php

use App\Http\Controllers\PostController;
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
    return view('home');
})->name('home');

Route::view('/about', 'about');

Route::view('/blog', 'blog');

Route::view('/contact', 'contact');

Route::view('/post-details', 'post-details');

Route::get('/create-post',[PostController::class, 'create'])->name('create-post');

Route::post('/store',[PostController::class, 'store'])->name('store-post');
