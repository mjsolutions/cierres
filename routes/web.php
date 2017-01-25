<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
| Rutas para administrador
*/
// Route::group(['prefix'=>'admin', 'middleware' => ['auth', 'admin']], function(){

// 	Route::get('/', function(){
// 		return view('admin.index');
// 	});

// 	Route::get('inicio', function(){
// 		return view('admin.index');
// 	})->name('admin.inicio');
// });

/*
| Rutas para administrador
*/
Route::group(['prefix'=>'admin'], function(){

	Route::get('/', function(){
		return view('admin.index');
	});

	Route::get('inicio', function(){
		return view('admin.index');
	})->name('admin.inicio');


	/*
	| Rutas para usuarios
	*/
	Route::post('usuarios/change_password', [
		'uses' => 'UsuariosController@change_password',
		'as' => 'admin.usuarios.change_password'
		]);

	Route::get('usuarios/busqueda', [
		'uses' => 'UsuariosController@busqueda',
		'as' => 'admin.usuarios.busqueda'
		]);

	Route::resource('usuarios','UsuariosController');

	Route::get('usuarios/{id}/destroy', [
		'uses' => 'UsuariosController@destroy',
		'as' => 'admin.usuarios.destroy'
		]); // se debe declarar despues del resource
});
/*
| Rutas para login
*/
Route::get('/login', [
	'uses' 	=>	'Auth\AuthController@getLogin',
	'as'	=>	'login'
	]);

Route::post('/login', [
	'uses' 	=>	'Auth\AuthController@postLogin',
	'as'	=>	'login'
	]);

Route::get('/logout', [
	'uses' 	=>	'Auth\AuthController@getLogout',
	'as'	=>	'logout'
	]);