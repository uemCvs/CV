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


Route::get ('/qualificacao','qualificacaoController@index');
Route::post ('/qualificacao','qualificacaoController@store');

Route::get ('/idioma','idiomaController@index');
Route::post ('/idioma','idiomaController@store');

Route::get ('/referencia','referenciaController@index');
Route::post ('/referencia','referenciaController@store');

Route::get ('/habilitacaoIntelectual','habIntelectualController@index');
Route::post ('/habilitacaoIntelectual','habIntelectualController@store');

Route::get ('/disponibilidade','disponibilidadeController@index');
Route::post ('/disponibilidade','disponibilidadeController@store');

Route::get('/habilitacoes/{id}/editar',['as' =>'editar_habilitacao', 'uses' => 'HabilitacaoController@edit']);
Route::get('/habilitacoes/{id}/','HabilitacaoController@show');
Route::put('/habilitacoes/{id}',['as' =>'put_h', 'uses' => 'HabilitacaoController@update']);

Route::get('/estudantes/{id}','EstudanteController@edit');
Route::put('/estudantes/{id}',['as' =>'put_est', 'uses' => 'EstudanteController@update']);

Route::get('/experiencias/{id}','ExperienciaController@edit');
Route::put('/experiencias/{id}',['as' =>'put_exp', 'uses' => 'ExperienciaController@update']);

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
