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

Route::get('/','AcceuilController@index')->name('welcome');

Route::get('/abonnes','AbonnesController@index')->name('abonnes');
Route::get('/abonnes/{id}','AbonnesController@destroy')->name('destroyAbonne');
Route::post('/newLetter','AbonnesController@store')->name('newLetter');

Route::get('/messages','MessagesController@index')->name('messages');
Route::get('/messages/{id}','MessagesController@destroy')->name('destroyMessage');
Route::post('/','MessagesController@store');

Route::get('/produits','ProduitsController@index')->name('produits');
Route::get('/newproduct','ProduitsController@store');
Route::get('/produits/{id}','ProduitsController@destroy')->name('destroyProduit');

Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/newservice','ServicesController@store');
Route::get('/services/{id}','ServicesController@destroy')->name('destroyService');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store')->name('home');
