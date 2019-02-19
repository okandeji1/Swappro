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
    return view('welcome');
});

Route::get('/login', function () {
    return view('site/login');
});

Route::get('/register', function () {
    return view('site/register');
});

Route::get('/dashboard', function () {
    return view('site/dashboard');
});

Route::get('/profile', function () {
    return view('user/pages/profile');
});

Route::get('/property', 'PropertyTypeController@index');

Route::get('/category', function () {
    return view('user/pages/category');
});
