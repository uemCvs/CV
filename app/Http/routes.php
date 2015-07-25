<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::resource('estudantes', 'EstudanteController');

//Idioma
Route::get ('/idioma','idiomaController@index');
Route::post ('/idioma','idiomaController@store');


//Referencia
Route::get ('/referencia','referenciaController@index');
Route::post ('/referencia','referenciaController@store');


//HabilitacaoIntelectual
Route::get ('/habilitacaoIntelectual','habIntelectualController@index');
Route::post ('/habilitacaoIntelectual','habIntelectualController@store');

//Disponibilidade
Route::get ('/disponibilidade','disponibilidadeController@index');
Route::post ('/disponibilidade','disponibilidadeController@store');



//Habilitacoes

Route::group(['middleware' => 'auth'], function() {
	//Route::resource('habilitacoes', 'HabilitacaoController');
	Route::get('/habilitacoes', 'HabilitacaoController@index');
	Route::post('/habilitacoes','HabilitacaoController@store');
	Route::get('/habilitacoes/{id}/editar',['as' =>'editar_habilitacao', 'uses' => 'HabilitacaoController@edit']);
	Route::get('/habilitacoes/create', 'HabilitacaoController@create');
	Route::get('/habilitacoes/{id}/',['as' =>'visualizarHabilitacao', 'uses' => 'HabilitacaoController@show'])->where(['id' => '[0-9]+']);
	Route::put('/habilitacoes/{id}',['as' =>'put_h', 'uses' => 'HabilitacaoController@update']);


	//Experiencia

	Route::get('/experiencias', 'ExperienciaController@index');
	Route::get('/experiencias/create', 'ExperienciaController@create');
	Route::get('/experiencias',['as' =>'editar_experiencia', 'uses' => 'ExperienciaController@edit']);
	Route::put('/experiencias/{id}',['as' =>'put_exp', 'uses' => 'ExperienciaController@update']);
	Route::get('/experiencias/{id}/',['as' =>'visualizarExperiencia', 'uses' => 'ExperienciaController@show'])->where(['id' => '[0-9]+']);

	//Qualificacao
	Route::get ('/qualificacao','qualificacaoController@index');
	Route::post ('/qualificacao','qualificacaoController@store');


});

//edicao de formulario (outras qualificacoes, referencia, idioma, habilitacaoIntelectual, disponibilidade)

Route::get('/qualificacao/{id}/editar','qualificacaoController@edit');
Route::put('/qualificacao/{id}',['as' =>'put_qual', 'uses' => 'qualificacaoController@update']);

Route::get('/habilitacaoIntelectual/{id}/editar','habIntelectualController@edit');
Route::put('/habilitacaoIntelectual/{id}',['as' =>'put_hab', 'uses' => 'habIntelectualController@update']);

Route::get('/referencia/{id}/editar','referenciaController@edit');
Route::put('/referencia/{id}',['as' =>'put_refer', 'uses' => 'referenciaController@update']);


Route::get('/idioma/{id}/editar','idiomaController@edit');
Route::put('/idioma/{id}',['as' =>'put_idioma', 'uses' => 'idiomaController@update']);

Route::get('/disponibilidade/{id}/editar','disponibilidadeController@edit');
Route::put('/disponibilidade/{id}',['as' =>'put_disp', 'uses' => 'disponibilidadeController@update']);

Route::get('testeYola',function(){
    return view("testeYola");
});

Route::get('inicio',function(){
    return view("inicio");
});
