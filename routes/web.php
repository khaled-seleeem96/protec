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

Route::get('/','guestController@index')->name('index');
Route::post('/guest','guestController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/loginClient','adminController@postLogin')->name('loginClient');
//admin controller guest
Route::get('/admin/guest','adminController@msg')->name('guest');
Route::get('/deleteGuest/{id}','adminController@deleteGuest')->name('deleteGuest');
//admin controller client
Route::get('/admin/client','adminController@client')->name('client');
Route::get('/deleteClient/{id}','adminController@deleteClient')->name('deleteClient');
Route::post('/admin/addClient','adminController@addClient')->name('addClient');
Route::get('/msgClient','adminController@msgClient')->name('msgClient');
Route::get('/updateStatus/{id}','adminController@updateStatus');
Route::post('/message_client','adminController@message_client')->name('message_client');

