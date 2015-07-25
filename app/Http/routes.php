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


//Estudante
Route::post('/estudantes','EstudanteController@store');
Route::get('/estudantes', 'EstudanteController@index');
Route::get('/estudantes/create', 'EstudanteController@create');
Route::put('/estudantes/{id}',['as' =>'put_est', 'uses' => 'EstudanteController@update']);
Route::get('/estudantes/{id}/editar',['as' =>'editar_estudante', 'uses' => 'EstudanteController@edit']);
Route::get('/estudantes/{id}/',['as' =>'visualizarEstudante', 'uses' => 'EstudanteController@show'])->where(['id' => '[0-9]+']);


//Experiencia

Route::get('/experiencias', 'ExperienciaController@index');
Route::get('/experiencias/create', 'ExperienciaController@create');
Route::get('/experiencias',['as' =>'editar_experiencia', 'uses' => 'ExperienciaController@edit']);
Route::put('/experiencias/{id}',['as' =>'put_exp', 'uses' => 'ExperienciaController@update']);
Route::get('/experiencias/{id}/',['as' =>'visualizarExperiencia', 'uses' => 'ExperienciaController@show'])->where(['id' => '[0-9]+']);

//Qualificacao
Route::get ('/qualificacao','qualificacaoController@index');
Route::post ('/qualificacao','qualificacaoController@store');


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


});
