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


//usuarios
Route::resource('/app/usuario','UsuarioControllers');
Route::get('/lista_usuarios','UsuarioControllers@lista');
Route::get('/app/usuarios', function(){
	return view('usuarios.GestionUsuarios');
});

Route::resource('home','HomerController');
Route::post('logeo',array('as'=>'login', 'uses'=>'loginController@store'));
Route::get('logout','LoginController@logout');

//fin usuarios

// tipoFinanciamientos
Route::resource('/app/tipoFinanciamiento','TipoFinanciamientosController');
Route::get('/lista_tipoFinanciamiento','TipoFinanciamientosController@lista');
//fin tipoFinanciamientos

// tipos estados metas
Route::resource('/app/tipoEstadoMeta','TipoEstadoMetaController');
Route::get('/lista_tipoEstadoMeta','TipoEstadoMetaController@lista');
//fin tipos estados metas

//Indicadores
Route::resource('/app/indicadores','IndicadoresController');
Route::get('/lista_indicadores','IndicadoresController@lista');
//fin indicadores

//politicas Institucionales
Route::resource('/app/politicaInstitucional','PoliticasInstitucionalesController');
Route::get('/lista_politicaInstitucional','PoliticasInstitucionalesController@lista');
//fin politicas Institucionales

//responsable estrategicos
Route::resource('/app/responsableEstrategico','ResponsableEstrategicoController');
Route::get('/lista_reponsableEstrategico','ResponsableEstrategicoController@lista');
//fin responsable estrategicos

//programas
Route::resource('/app/programa','ProgramasController');
Route::get('/lista_programa','ProgramasController@lista');
//fin programas

//categoria Evidencias
Route::resource('/app/categoriaEvidencia','CategoriasEvidenciasController');
Route::get('/lista_categoriaEvidencia','CategoriasEvidenciasController@lista');
//fin categoria Evidencia

//actividades metas
Route::resource('/app/actividadMeta','actividadesMetasController');
Route::get('/lista_actividadMeta ','actividadesMetasController@lista');
//fin actividades metas

//tiempos de planificaciones
Route::resource('/app/tiempoPlanificacion','tiemposPlanificacionesController');
Route::get('/lista_tiempoPlanificacion','tiemposPlanificacionesController@lista');
//fin tiempos de planificaciones

//tipo metas
Route::resource('/app/tipoMeta','tipoMetaController');
Route::get('/lista_tipoMeta','tipoMetaController@lista');
//fin tipo metas

//medios de verificacion
Route::resource('/app/medioVerificacion','medioVerificacionController');
Route::get('/lista_medioVerificacion','medioVerificacionController@lista');
//fin medios de verificacion






