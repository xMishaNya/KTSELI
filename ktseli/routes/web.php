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
    return view('main');
});

Route::get('about', function () {
    return view('about');
});

Route::get('news', function () {
    return view('news');
});

Route::get('faq_open', function () {
    return view('faq_open');
});

Route::get('faq_closed', function () {
    return view('faq_closed');
});

Route::get('blogs', function () {
    return view('blogs');
});

Route::get('pattern', function () {
    return view('pattern');
});
