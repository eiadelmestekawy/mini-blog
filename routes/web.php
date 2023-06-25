<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::middleware(['auth'])->group(function()
{
Route::get('/posts' , [postcontroller::class , 'index'])->name('posts.index');

Route::get('/posts/create' , [postcontroller::class , 'create'])->name('posts.create');

Route::post('/posts' , [postcontroller::class , 'store'])->name('posts.store');

Route::get('/posts/{post}' , [postcontroller::class , 'show'])->name('posts.show');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
