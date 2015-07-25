@extends('layouts.main')

@section('title')
    teste
@stop

@section('body')

    <script src="{{URL::asset("js/jquery.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <body>

    <div class="container-fluid">

        <h3 class="text-center">Preencha o seu Curriculum</h3>
        <ul class="nav nav-pills nav-justified topnav">
            <li class="active"><a data-toggle="pill" href="#home">Dados Pessoais</a></li>
            <li><a data-toggle="pill" href="#menu1">Habilitacoes Literarias</a></li>
            <li><a data-toggle="pill" href="#menu2">Qualificacoes</a></li>
            <li><a data-toggle="pill" href="#menu3">Habilitacoes Intelectuais</a></li>
            <li><a data-toggle="pill" href="#menu4">Disponibilidade</a></li>
            <li><a data-toggle="pill" href="#menu5">Referencia</a></li>
        </ul>
        <div class="row"><p>

            <p></p></div>
        <div class="container-fluid">
            <div class="jumbotron">
<div class="row">
    <div class="col-md-10">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-tabs nav-stacked ">
                                    <li class="active"><a data-toggle="tab" href="#dados1">Dados Pessoais</a></li>
                                    <li><a data-toggle="tab" href="#endereco">Endereco</a></li>
                                    <li><a data-toggle="tab" href="#contacto">Contacto</a></li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="dados1" class="tab-pane fade in active">
                                            <h3>HOME</h3>

                                            <p>Some content.</p>
                                        </div>
                                        <div id="endereco" class="tab-pane fade">
                                            <h3>Menu 1</h3>

                                            <p>Some content in menu 1.</p>
                                        </div>
                                        <div id="contacto" class="tab-pane fade">
                                            <h3>Menu 2</h3>

                                            <p>Some content in menu 2.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a data-toggle="tab" href="#ensinoG">Ensino Geral</a></li>
                                    <li><a data-toggle="tab" href="#ensinoT">Ensino tecnico</a></li>
                                    <li><a data-toggle="tab" href="#ensinoS">Ensino Superior</a></li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="ensinoG" class="tab-pane fade in active">
                                            <h3>HOME</h3>

                                            <p>Some content.</p>
                                        </div>
                                        <div id="ensinoT" class="tab-pane fade">
                                            <h3>Menu 1</h3>

                                            <p>Some content in menu 1.</p>
                                        </div>
                                        <div id="ensinoS" class="tab-pane fade">
                                            <h3>Menu 2</h3>

                                            <p>Some content in menu 2.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a data-toggle="tab" href="#exp">Experiencia Profissional</a></li>
                                    <li><a data-toggle="tab" href="#idioma">Idioma</a></li>
                                    <li><a data-toggle="tab" href="#ouQ">Outras Qualificacoes</a></li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div class="panel panel-body">
                                    <div class="tab-content">
                                        <div id="exp" class="tab-pane fade in active">
                                            <h3>HOME</h3>

                                            <p>Some content.</p>
                                        </div>
                                        <div id="idioma" class="tab-pane fade">
                                            <h3>Menu 1</h3>

                                            <p>Some content in menu 1.</p>
                                        </div>
                                        <div id="ouQ" class="tab-pane fade">
                                            <h3>Menu 2</h3>

                                            <p>Some content in menu 2.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                 menu 3
                    </div>
                    <div id="menu4" class="tab-pane fade">
menu 4
                    </div>
                    <div id="menu5" class="tab-pane fade">
menu 5
                    </div>
                </div>
                </div>
                <div class="col-md-2">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            40% Complete (success)
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop
