<?php

use Illuminate\Support\Facades\Route;



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


// Регистрация
Route::name('user.')->group(function(){

  Route::get('/login', function(){
    if (Auth::check()){
      return redirect('/');
    }
    return view('login');
  })->name('login');

  Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

  Route::get('/logout', function(){
    Auth::logout();
    return redirect("/");
  })->name('logout');

  Route::get('/registration', function(){
    if (Auth::check()){
      return redirect('/');
    }
    return view('registration');
  })->name('registration');

  Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
});

//Админка
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Проверка на логин в хедере
