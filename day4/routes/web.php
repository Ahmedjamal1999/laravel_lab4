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
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');

});

Route::get('/allpost',"App\Http\Controllers\PostController@allPost");
Route::get('/createForm',"App\Http\Controllers\PostController@createForm");
Route::post('/addPost',"App\Http\Controllers\PostController@addPost");
Route::get('/editPost/{id}',"App\Http\Controllers\PostController@editPost");
Route::post('/update/{id}',"App\Http\Controllers\PostController@updatePost");
Route::get('/delete/{id}',"App\Http\Controllers\PostController@deletePost");
Route::get('/showPost/{id}',"App\Http\Controllers\PostController@showPost");




Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
