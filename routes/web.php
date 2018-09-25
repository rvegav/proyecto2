<?php

//Rutas
Route::get('home', ['as' => 'home', 'uses'=>'PagesController@home']);
Route::get('usersRole', ['as'=> 'userRole', 'uses' => 'PagesController@loadAdministrationView']);

//Login y Logout
Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

//REST Users
Route::resource('users', 'UsersController');

//REST Roles
Route::resource('roles', 'RolesController');


//obras mientras
Route::get('documentos', function(){
	return view('documentos.create');
});

//REST Empleados
Route::resource('empleados', 'EmpleadosController');


// Route::get('/herramientas/create', ['as' => 'herramientas.create', 'uses' => 'HerramientasController@create']);

// Route::post('/herramientas', ['as' => 'herramientas.store', 'uses' => 'HerramientasController@store']);
