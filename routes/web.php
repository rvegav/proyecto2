<?php

//Rutas
Route::get('home', 'PagesController@home');

//Login y Logout
Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

//REST Users
Route::resource('users', 'UsersController');

//REST Roles
Route::resource('roles', 'RolesController');





// Route::get('/herramientas/create', ['as' => 'herramientas.create', 'uses' => 'HerramientasController@create']);

// Route::post('/herramientas', ['as' => 'herramientas.store', 'uses' => 'HerramientasController@store']);
