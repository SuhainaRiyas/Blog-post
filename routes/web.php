<?php

use Illuminate\Support\Facades\Route;

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
	return redirect('/login');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::patch('user/{id}',[App\Http\Controllers\UserController::class,'update']);

Route::patch('user/password/{id}',[App\Http\Controllers\UserController::class,'passwordchange']);

Route::post('post',[App\Http\Controllers\PostController::class,'store'])->name('post');

Route::post('comments',[App\Http\Controllers\PostController::class,'comments'])->name('comments');

Route::post('likes',[App\Http\Controllers\PostController::class,'likes'])->name('likes');








