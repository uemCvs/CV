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

Route::get('/home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//  Route::resource('estudantes', 'EstudanteController');




Route::group(['middleware' => 'auth'], function() {
    //Route::resource('habilitacoes', 'HabilitacaoController');
    Route::get('/habilitacoes', 'HabilitacaoController@index');
    Route::post('/habilitacoes',['as'=>'gravarHabilitacao','uses'=>'HabilitacaoController@store']);
    Route::get('/habilitacoes/{id}/editar',['as' =>'editar_habilitacao', 'uses' => 'HabilitacaoController@edit']);
    Route::get('/habilitacoes/create', 'HabilitacaoController@create');
    Route::get('/habilitacoes/{id}/',['as' =>'visualizarHab', 'uses' => 'HabilitacaoController@show'])->where(['id' => '[0-9]+']);
    Route::put('/habilitacoes/{id}',['as' =>'put_h', 'uses' => 'HabilitacaoController@update']);


    //Experiencia

    Route::get('/experiencias', 'ExperienciaController@index');
    Route::get('/experiencias/create', 'ExperienciaController@create');
    Route::post('/experiencias', 'ExperienciaController@store');
    Route::get('/experiencias/{id}/editar',['as' =>'editar_experiencia', 'uses' => 'ExperienciaController@edit']);
    Route::put('/experiencias/{id}',['as' =>'put_exp', 'uses' => 'ExperienciaController@update']);
    Route::get('/experiencias/{id}/',['as' =>'visualizarExperiencia', 'uses' => 'ExperienciaController@show'])->where(['id' => '[0-9]+']);

    //Endereco

    Route::get('/enderecos', 'EnderecoController@index');
    Route::get('/enderecos/create', 'EnderecoController@create');
    Route::post('/enderecos', 'EnderecoController@store');
    Route::get('/enderecos/{id}/editar',['as' =>'editar_endereco', 'uses' => 'EnderecoController@edit']);
    Route::put('/enderecos/{id}',['as' =>'put_end', 'uses' => 'EnderecoController@update']);
    Route::get('/enderecos/{id}/',['as' =>'visualizarEndereco', 'uses' => 'EnderecoController@show'])->where(['id' => '[0-9]+']);


    //Estudante

    Route::post('/estudantes','EstudanteController@store');
    Route::get('/estudantes', 'EstudanteController@index');
    Route::get('/estudantes/create', 'EstudanteController@create');
    Route::put('/gestorCurriculumView/{id}',['as' =>'put_est', 'uses' => 'EstudanteController@update']);
    Route::get('/estudantes/{id}/editar',['as' =>'editar_estudante', 'uses' => 'EstudanteController@edit']);
    Route::get('/estudantes/{id}/',['as' =>'visualizarEstudante', 'uses' => 'EstudanteController@show'])->where(['id' => '[0-9]+']);

    //outras qualificacoes
    Route::get ('/qualificacao',['as' =>'gravar_qualificacao', 'uses' => 'qualificacaoController@index']);
    Route::post ('/qualificacao','qualificacaoController@store');
    Route::get('/qualificacao/{id}/editar',['as' =>'editar_qualificacao', 'uses' => 'qualificacaoController@edit']);
    Route::get('/qualificacao/{id}/',['as' =>'visualizarQualificacao', 'uses' => 'qualificacaoController@show'])->where(['id'=>'[0-9]+']);
    Route::put('/qualificacao/{id}',['as' =>'put_qual', 'uses' => 'qualificacaoController@update']);

    // idioma
    Route::get ('/idioma',['as' =>'gravar_idioma', 'uses' => 'idiomaController@index']);
    Route::post ('/idioma','idiomaController@store');
    Route::get('/idioma/{id}/editar',['as' =>'editar_idioma', 'uses' => 'idiomaController@edit']);
    Route::get('/idioma/{id}',['as' =>'visualizarIdioma', 'uses' => 'idiomaController@show'])->where(['id'=>'[0-9]+']);
    Route::put('/idioma/{id}',['as' =>'put_idioma', 'uses' => 'idiomaController@update']);

    //disponibilidade
    Route::get ('/disponibilidade',['as' =>'gravar_disponibilidade', 'uses' => 'disponibilidadeController@index']);
    Route::post ('/disponibilidade','disponibilidadeController@store');
    Route::get('/disponibilidade/{id}/editar',['as' =>'editar_disponibilidade', 'uses' => 'disponibilidadeController@edit']);
    Route::get('/disponibilidade/{id}/',['as' =>'visualizarDisponibilidade', 'uses' => 'disponibilidadeController@show'])->where(['id'=>'[0-9]+']);
    Route::put('/disponibilidade/{id}',['as' =>'put_disp', 'uses' => 'disponibilidadeController@update']);


    //habilitacaoIntelectual
    Route::get ('/habilitacaoIntelectual',['as' =>'gravar_habilitacao', 'uses' => 'habIntelectualController@index']);
    Route::post ('/habilitacaoIntelectual','habIntelectualController@store');
    Route::get('/habilitacaoIntelectual/{id}/editar',['as' =>'editar_habilitacao', 'uses' => 'habIntelectualController@edit']);
    Route::get('/habilitacaoIntelectual/{id}/',['as'=>'visualizarHabilitacao', 'uses' => 'habIntelectualController@show'])->where(['id'=>'[0-9]+']);
    Route::put('/habilitacaoIntelectual/{id}',['as' =>'put_hab', 'uses' => 'habIntelectualController@update']);

    //referencia
    Route::get ('/referencia',['as' =>'gravar_referencia', 'uses' => 'referenciaController@index']);
    Route::post ('/referencia','referenciaController@store');
    Route::get('/referencia/{id}/editar',['as' =>'editar_referencia', 'uses' => 'referenciaController@edit']);
    Route::get('/referencia/{id}/',['as' =>'visualizarReferencia', 'uses' => 'referenciaController@show'])->where(['id'=>'[0-9]+']);
    Route::put('/referencia/{id}',['as' =>'put_refer', 'uses' => 'referenciaController@update']);

    //Vaga
    Route::get ('/gestorEmpregador',['as' =>'gravarVaga', 'uses' => 'vagaController@showVagas']);
    Route::post ('/gestorEmpregador','vagaController@store');
    Route::get('/vaga/{id}/editar',['as' =>'editar_vaga', 'uses' => 'vagaController@edit']);
    Route::get('/vaga/{id}/',['as' =>'visualizarVaga', 'uses' => 'vagaController@show'])->where(['id'=>'[0-9]+']);
    Route::get('/vaga/{id}/',['as' =>'visualizarVaga', 'uses' => 'vagaController@show'])->where(['id'=>'[0-9]+']);
    Route::put('/gestorEmpregador/{id}',['as' =>'put_vaga', 'uses' => 'vagaController@update']);
    Route::get('/get-curso/{id}','CursoController@getCursos');
    //contacto

    Route::post('/contactos','ContactoController@store');
    Route::get('/contactos', 'ContactoController@index');
    Route::get('/contactos/create', 'ContactoController@create');
    Route::get('/contactos/{id}/editar',['as' =>'editar_contacto', 'uses' => 'ContactoController@edit']);
    Route::put('/contactos/{id}',['as' =>'put_cont', 'uses' => 'ContactoController@update']);
    Route::get('/contactos/{id}/',['as' =>'visualizarContacto', 'uses' => 'ContactoController@show'])->where(['id'=>'[0-9]+']);


    /* Route::get('gestorCurriculum',['as'=>'curriculo', function(){

     return view("gestorCurriculum"); }]);*/
    Route::get('gestorCurriculum',function(){
        return view("gestorCurriculum");
    });
    Route::get('gestorNucleo',function(){
        return view("gestorNucleo");
    });


    Route::get('print','PrintController@index');




    Route::get('main',function(){
        return view("layouts/main");
    });

    Route::get('gestorEmpregador','vagaController@showVagas');

});
/*Route::get('inicio',function(){
    return view("inicio");
});*/



Route::get('nivel','NivelController@showNivel');
Route::post('gravar-nivel','NivelController@createNivel');

Route::get('curso','CursoController@showCurso');
Route::post('gravar-curso','CursoController@createCurso');

