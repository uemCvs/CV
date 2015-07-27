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

Route::get('/estudantes', 'EstudanteController@index');
Route::post('/estudantes','EstudanteController@store');

Route::get('/experiencias', 'ExperienciaController@index');
Route::post('/experiencias','ExperienciaController@store');


Route::get('/habilitacoes', 'HabilitacaoController@index');
Route::post('/habilitacoes','HabilitacaoController@store');







Route::get('/habilitacoes/{id}/editar',['as' =>'editar_habilitacao', 'uses' => 'HabilitacaoController@edit']);
Route::get('/habilitacoes/{id}/','HabilitacaoController@show');
Route::put('/habilitacoes/{id}',['as' =>'put_h', 'uses' => 'HabilitacaoController@update']);

Route::get('/estudantes/{id}','EstudanteController@edit');
Route::put('/estudantes/{id}',['as' =>'put_est', 'uses' => 'EstudanteController@update']);

Route::get('/experiencias/{id}','ExperienciaController@edit');
Route::put('/experiencias/{id}',['as' =>'put_exp', 'uses' => 'ExperienciaController@update']);



//outras qualificacoes
Route::get ('/qualificacao','qualificacaoController@index');
Route::post ('/qualificacao','qualificacaoController@store');
Route::get('/qualificacao/{id}/editar',['as' =>'editar_qualificacao', 'uses' => 'qualificacaoController@edit']);
Route::get('/qualificacao/{id}/',['as' =>'visualizarQualificacao', 'uses' => 'qualificacaoController@show'])->where(['id'=>'[0-9]+']);
Route::put('/qualificacao/{id}',['as' =>'put_qual', 'uses' => 'qualificacaoController@update']);

//habilitacaoIntelectual
Route::get ('/habilitacaoIntelectual','habIntelectualController@index');
Route::post ('/habilitacaoIntelectual','habIntelectualController@store');
Route::get('/habilitacaoIntelectual/{id}/editar',['as' =>'editar_habilitacao', 'uses' => 'habIntelectualController@edit']);
Route::get('/habilitacaoIntelectual/{id}/',['as'=>'visualizarHabilitacao', 'uses' => 'habIntelectualController@show'])->where(['id'=>'[0-9]+']);
Route::put('/habilitacaoIntelectual/{id}',['as' =>'put_hab', 'uses' => 'habIntelectualController@update']);

//referencia
Route::get ('/referencia','referenciaController@index');
Route::post ('/referencia','referenciaController@store');
Route::get('/referencia/{id}/editar',['as' =>'editar_referencia', 'uses' => 'referenciaController@edit']);
Route::get('/referencia/{id}/',['as' =>'visualizarReferencia', 'uses' => 'referenciaController@show'])->where(['id'=>'[0-9]+']);
Route::put('/referencia/{id}',['as' =>'put_refer', 'uses' => 'referenciaController@update']);

// idioma
Route::get ('/idioma','idiomaController@index');
Route::post ('/idioma','idiomaController@store');
Route::get('/idioma/{id}/editar',['as' =>'editar_idioma', 'uses' => 'idiomaController@edit']);
Route::get('/idioma/{id}',['as' =>'visualizarIdioma', 'uses' => 'idiomaController@show'])->where(['id'=>'[0-9]+']);
Route::put('/idioma/{id}',['as' =>'put_idioma', 'uses' => 'idiomaController@update']);

//disponibilidade
Route::get ('/disponibilidade','disponibilidadeController@index');
Route::post ('/disponibilidade','disponibilidadeController@store');
Route::get('/disponibilidade/{id}/editar',['as' =>'editar_disponibilidade', 'uses' => 'disponibilidadeController@edit']);
Route::get('/disponibilidade/{id}/',['as' =>'visualizarDisponibilidade', 'uses' => 'disponibilidadeController@show'])->where(['id'=>'[0-9]+']);
Route::put('/disponibilidade/{id}',['as' =>'put_disp', 'uses' => 'disponibilidadeController@update']);
