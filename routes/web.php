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

//https://colorlib.com//polygon/admindek/default/form-masking.html

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/blank', function () {
    return view('pages.blank');
});

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-event', 'EventController@index')->name('new-event');

Auth::routes();


