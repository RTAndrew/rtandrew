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


// Routes para paginas
	Route::get('/', 'PagesController@index')->name('landing-page');
	
	// Texto
		Route::get('/texto', 'PagesController@texto')->name('texto');
		Route::get('/texto/texto', 'TextoController@texto')->name('texto.texto');
	
	// Fotografia
		Route::get('/fotografia', 'PagesController@fotografia')->name('fotografia');
		//Foto 
			Route::get('/fotografia/foto', 'FotografiaController@fotografia')->name('foto');
		//Album 
			Route::get('/fotografia/album', 'FotografiaController@album')->name('album');

