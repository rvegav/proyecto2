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

//REST Empleados
Route::resource('empleados', 'EmpleadosController');

<<<<<<< HEAD
//REST Documents
Route::resource('documents', 'DocumentsController');

//REST Obras
Route::resource('obras', 'ObrasController');

=======
Route::resource('rubros', 'RubrosController');

Route::resource('materiales', 'MaterialesController');
>>>>>>> 760a4183f36e36dbb8ba2167f8e1af0657fc5f8c




// Route::get('/herramientas/create', ['as' => 'herramientas.create', 'uses' => 'HerramientasController@create']);

// Route::post('/herramientas', ['as' => 'herramientas.store', 'uses' => 'HerramientasController@store']);
