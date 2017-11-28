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

Route::get('/', function () {
    //return view('welcome');
    //return view('index');
    return redirect()->route('login');
});


Auth::routes();

Route::post('/register', 'Auth\RegisterCustomizedController@register')->name('register.post');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/storage/app/public/avatares/{avatar}', 'HomeController@avatar')->name('home.avatar');
Route::get('/find/user/{id}', 'HomeController@findUser')->name('home.find_user');
