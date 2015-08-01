@extends('layouts.main')
@section('title')
    Curriculum
    @stop



@section('body')

    <script src="{{URL::asset("js/jquery.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.min.js")}}"></script>


    <div class="container-fluid">
        <div class="panel-body">
            {{--<h3 class="text-center">Preencha o seu Curriculum</h3>--}}
            <ul class="nav nav-tabs nav-justified top">
                <li class="active"><a data-toggle="pill" href="#home">Dados Pessoais</a></li>
                <li><a data-toggle="tab" href="#menu1">Habilitacoes Literarias</a></li>
                <li><a data-toggle="tab" href="#menu2">Qualificacoes</a></li>
                <li><a data-toggle="tab" href="#menu3">Habilitacoes Intelectuais</a></li>
                <li><a data-toggle="tab" href="#menu4">Disponibilidade</a></li>
                <li><a data-toggle="tab" href="#menu5">Referencia</a></li>
            </ul>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-tabs nav-stacked nav-esquerdo ">
                                            <li class="active"><a data-toggle="tab" href="#dados1">Dados
                                                    Pessoais</a></li>
                                            <li><a data-toggle="tab" href="#endereco">Endereco</a></li>
                                            <li><a data-toggle="tab" href="#contacto">Contacto</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="panel panel-body">
                                            <div class="tab-content">
                                                <div id="dados1" class="tab-pane fade in active">
                                                    @include('estudanteGravar')
                                                </div>
                                                <div id="endereco" class="tab-pane fade">
                                                    @include('enderecoGravar')
                                                </div>
                                                <div id="contacto" class="tab-pane fade">
                                                   {{-- @include('estudanteGravar')--}}
                                                    <h6>sem blade</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div id="menu1" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-tabs nav-stacked nav-esquerdo">
                                            <li class="active"><a data-toggle="tab" href="#ensinoG">Ensino Geral</a>
                                            </li>
                                            <li><a data-toggle="tab" href="#ensinoT">Ensino tecnico</a></li>
                                            <li><a data-toggle="tab" href="#ensinoS">Ensino Superior</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="panel panel-body">
                                            <div class="tab-content">
                                                <div id="ensinoG" class="tab-pane fade in active">
                                                    @include('EnsinoGeral')
                                                </div>
                                                <div id="ensinoT" class="tab-pane fade">
                                                    @include('EnsinoTecnico')
                                                </div>
                                                <div id="ensinoS" class="tab-pane fade">
                                                    @include('EnsinoSuperior')
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-tabs nav-stacked nav-esquerdo">
                                            <li class="active"><a data-toggle="tab" href="#exp">Experiencia
                                                    Profissional</a></li>
                                            <li><a data-toggle="tab" href="#idioma">Idioma</a></li>
                                            <li><a data-toggle="tab" href="#ouQ">Outras Qualificacoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="panel panel-body">
                                            <div class="tab-content">
                                                <div id="exp" class="tab-pane fade in active">
                                                    @include('experienciaGravar')
                                                </div>
                                                <div id="idioma" class="tab-pane fade" >
                                                    @include('idioma')


                                                </div>
                                                <div id="ouQ" class="tab-pane fade">
                                                    @include('qualificacao')
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">@include('habIntelectual')</div>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">@include('disponibilidade')</div>
                            </div>
                            <div id="menu5" class="tab-pane fade">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">@include('referencia')</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
<div class="row">
                        <div class="progress-bar" id="example-percent-container" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                        </div>
</div>
                        <div class="row"><p></p><p></p></div>
                        <div class="row">
                        <p>
                        <button type="submit" class="btn btn-success btn-sm" id="geradorPDF">Gerar PDF</button>
                        </p>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var circle = new ProgressBar.Circle('#example-percent-container', {
            color: '#18bc9c',
            strokeWidth: 3,
            trailWidth: 1,
            duration: 3000,
            text: {
                value: '0'
            },
            step: function (state, bar) {
                bar.setText((bar.value() * 100).toFixed(0));
            }
        });

        circle.animate(1, function () {
            circle.animate(0);
        });
    </script>

@stop
