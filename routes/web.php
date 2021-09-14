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
/*
Route::get('/', function () {
    return view('welcome');
}); */

/*
Route::get('/','App\Http\Controllers\PagesController@index');
//test route 1
Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});
//test route 2
Route::get('/about', function () {
    return view('pages.about');
});
//test route 3
Route::get('/users/{id}', function ($id) {
    return 'this is user ' . $id;
});
*/
Route::get('/','App\Http\Controllers\PagesController@index');
Route::get('/about','App\Http\Controllers\PagesController@about');
Route::get('/services','App\Http\Controllers\PagesController@services');
Route::get('/admin', 'App\Http\Controllers\AdminController@index');




Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::resource('admin', 'App\Http\Controllers\AdminPostsController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
