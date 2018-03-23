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
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});


Route::get('/registration', function () {
    return view('registration');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/reset', function () {
    return view('reset');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', 'HomeController@logout');

Route::get('/questionaire', 'HomeController@searchQuestion');

Route::get('/startgame', 'HomeController@startgame');

Route::post('/submit-answer', 'HomeController@submitAnswer');
