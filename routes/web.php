<?php

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
});
*/

Route::get('/', 'pageController@home');
Route::get('home', 'pageController@home');
Route::get('about', 'pageController@aboutUs');
Route::get('causes', 'pageController@ourCauses');
Route::get('blog', 'pageController@blog');
Route::get('contact', 'pageController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
