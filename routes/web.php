<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('/post/{id}', [PostController::class, 'detail'])->name('detail');
Route::get('/add', [PostController::class, 'create']);
Route::post('postStore', [PostController::class, 'store'])->name('postStore');
Route::post('/commentStore', [CommentController::class, 'store'])->name('comment.store');