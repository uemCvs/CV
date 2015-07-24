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

Route::get('/habilitacoes/{id}','HabilitacaoController@edit');
Route::put('/habilitacoes/{id}',['as' =>'put_h', 'uses' => 'HabilitacaoController@update']);

Route::get('/estudantes/{id}','EstudanteController@edit');
Route::put('/estudantes/{id}',['as' =>'put_est', 'uses' => 'EstudanteController@update']);

Route::get('/experiencias/{id}','ExperienciaController@edit');
Route::put('/experiencias/{id}',['as' =>'put_exp', 'uses' => 'ExperienciaController@update']);