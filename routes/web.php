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

Route::get('/abonnes', function () {
    return view('others.abonnes');
})->name('abonnes');

Route::get('/messages', function () {
    return view('others.messages');
})->name('messages');

Route::get('/produits', function () {
    return view('others.produits');
})->name('produits');

Route::get('/services', function () {
    return view('others.services');
})->name('services');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
