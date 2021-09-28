<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controllers\PostsController::class, 'index'])
    ->name('homepage');

    
Route::get('/posts', [Controllers\PostsController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/{post}/{slug}', [Controllers\PostsController::class, 'show'])
    ->name('posts.show');

    Route::get('/contact', function () {
        return view('template.partials._contact');
    })
    ->name('contact');

