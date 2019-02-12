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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// CREAR
Route::post('/admin/documents', 'DocumentController@store'); 

// READ
Route::get('/admin/documents', 'DocumentController@index'); 

// UPDATE
Route::post('/admin/documents/update','DocumentController@update');
 
// DELETE
Route::post('/admin/documents/delete','DocumentController@delete');
