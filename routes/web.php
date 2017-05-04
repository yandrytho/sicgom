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

//INICIO DE SESION
Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
	if (Auth::guest()){
			 return view('login');
    	}else{
    		 return Redirect::to('app');
    	}
    });

    Route::post('logeo',array('as'=>'login', 'uses'=>'loginController@store'));
	Route::get('logout','LoginController@logout');

	Route::get('app', function(){
		return view('layouts.app');
	});

});

//FIN INICIO DE SESION


//listar usuarios
Route::get('/lista_usuarios','UsuarioControllers@lista');
//fin listar usuarios

//GESTION USUARIOS
Route::resource('/app/usuario','UsuarioControllers');

Route::get('/app/usuarios', function(){
	return view('usuarios.GestionUsuarios');
});

// tipos financiamientos
Route::resource('/app/tipoFinanciamiento','TipoFinanciamientosController');

/*Route::get('/app/tipoFinanciamientos', function(){
	return view('usuarios.GestionUsuarios');
});*/

//listar tipoFinanciamientos
Route::get('/lista_tipoFinanciamiento','TipoFinanciamientosController@lista');
//fin listar tipoFinanciamientos



Route::resource('home','HomerController');
Route::post('logeo',array('as'=>'login', 'uses'=>'loginController@store'));
	Route::get('logout','LoginController@logout');

