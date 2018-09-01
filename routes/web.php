<?php


Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('login', 'Auth\LoginController@showLoginForm');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/herramientas/create', ['as' => 'herramientas.create', 'uses' => 'HerramientasController@create']);

Route::post('/herramientas', ['as' => 'herramientas.store', 'uses' => 'HerramientasController@store']);

Route::get('documentos', ['as' => 'documentos.create', 'uses' => 'DocumentosController@create']);

Route::get('usuarios', function(){
	return view('usuarios.create');
});

