<?php

//Rutas
Route::get('home', 'PagesController@home');
Route::get('usersRole', ['as'=> 'userRole', 'uses' => 'PagesController@loadAdministrationView']);

//Login y Logout
Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

//REST Users
Route::resource('users', 'UsersController');

//REST Roles
Route::resource('roles', 'RolesController');


//obras mientras
Route::get('obras', function(){
	return view('works.obras');
});


//Sebas Route's empleados
Route::get('empleados', ['as' => 'empleados.index', 'uses' => 'EmpleadosController@index']);
Route::get('empleados/create', ['as' => 'empleados.create', 'uses' => 'EmpleadosController@create']);
Route::post('empleados', ['as' => 'empleados.store', 'uses' => 'EmpleadosController@store']);
Route::get('empleados/{id}', ['as' => 'empleados.show', 'uses' => 'EmpleadosController@show']);
Route::get('empleados/{id}/edit', ['as' => 'empleados.edit', 'uses' => 'EmpleadosController@edit']);
Route::put('empleados/{id}', ['as' => 'empleados.update', 'uses' => 'EmpleadosController@update']);
Route::delete('empleados/{id}', ['as' => 'empleados.destroy', 'uses' => 'EmpleadosController@destroy']);


// Route::get('/herramientas/create', ['as' => 'herramientas.create', 'uses' => 'HerramientasController@create']);

// Route::post('/herramientas', ['as' => 'herramientas.store', 'uses' => 'HerramientasController@store']);
