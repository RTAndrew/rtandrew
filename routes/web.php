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
	Route::get('/test', 'PagesController@test')->name('test');
	
	


	// Texto
		Route::get('/texto', 'PagesController@texto')->name('texto');
		Route::get('/texto/{slug}', 'TextoController@textoSlug')->name('textos.texto');
		Route::get('/texto/notas/{slug}', 'TextoController@notaSlug')->name('textos.notas');
		Route::get('/texto/projectos/{slug}', 'TextoController@projectoSlug')->name('textos.projectos');
		Route::get('/texto/midia/{slug}', 'TextoController@projectoSlug')->name('textos.midia');
















	// Fotografia
		Route::get('/fotografia', 'PagesController@fotografia')->name('fotografia');
		//Foto 
			Route::get('/fotografia/{slug}', 'FotografiaController@fotografia')->name('foto');
		//Album 
			Route::get('/fotografia/album/{slug}', 'FotografiaController@album')->name('album');

