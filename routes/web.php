<?php

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/learn', function () {
    return view('learn');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/detail1', function () {
    return view('detail1');
});

Route::get('/detail2', function () {
    return view('detail2');
});

Route::get('/detail3', function () {
    return view('detail3');
});

Route::get('/komunitas', function () {
    return view('komunitas');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/logout', function () {
    return view('logout');
});