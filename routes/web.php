<?php
// al ingresar a la página
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/document', 'HomeController@index')->name('document');

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
	// CREAR documento
	Route::post('/documents', 'DocumentController@store');
	// READ documento
	Route::get('/documents', 'DocumentController@index');
	// UPDATE documento
	Route::post('/documents/{id}','DocumentController@update');
	// DELETE documento
	Route::get('/documents/{id}','DocumentController@delete');


});



