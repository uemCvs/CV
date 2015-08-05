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

                <?php
                $home="";
                $menu1 ="";
                $menu2 ="";
                $menu3 ="";
                $menu4 ="";
                $menu5="";

                    if(isset($nav)){
                switch($nav){
                    case "home": $home="class='active'" ; break;
                    case "menu1":$menu1 ="class='active'";break;
                    case "menu2":$menu2 ="class='active'";break;
                    case "menu3":$menu3 ="class='active'";break;
                    case "menu4":$menu4 ="class='active'";break;
                    case "menu5":$menu5 ="class='active'";break;
                    default: $home="class='active'";break;
                }
                    }

                ?>

                <li <?=$home?>><a data-toggle="tab" href="#home">Dados Pessoais</a></li>
                <li <?=$menu1?>><a data-toggle="tab" href="#menu1">Habilitacoes Literarias</a></li>
                <li <?=$menu2?>><a data-toggle="tab" href="#menu2">Qualificacoes</a></li>
                <li <?=$menu3?>><a data-toggle="tab" href="#menu3">Habilitacoes Intelectuais</a></li>
                <li <?=$menu4?>><a data-toggle="tab" href="#menu4">Disponibilidade</a></li>
                <li <?=$menu5?>><a data-toggle="tab" href="#menu5">Referencia</a></li>
            </ul>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-tabs nav-stacked nav-esquerdo ">
                                            <?php
                                            $dados="";
                                            $endereco ="";
                                            $contacto ="";


                                            if(isset($nav)){
                                                switch($nav){
                                                    case "dados": $dados="class='active'" ; break;
                                                    case "endereco":$endereco ="class='active'";break;
                                                    case "contacto":$contacto ="class='active'";break;
                                                    default: $dados="class='active'";break;
                                                }
                                            }

                                            ?>

                                            <li <?=$dados?>><a data-toggle="tab" href="#dados1">Dados
                                                    Pessoais</a></li>
                                            <li <?=$endereco?>><a data-toggle="tab" href="#endereco">Endereco</a></li>
                                            <li <?=$contacto?>><a data-toggle="tab" href="#contacto">Contacto</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="panel panel-body">
                                            <div class="tab-content">
                                                <div id="dados1" class="tab-pane fade in active">
                                                    <?php if(isset($dadosPessoais) || isset($vista)) { ?>
                                                    @if($vista=='estudanteGravar')
                                                        @include('estudanteGravar')
                                                    @elseif($vista=='estudante')
                                                        @include($vista,["est"=>$est])
                                                    @endif
                                                    <?php } else {?>
                                                        @include('estudanteGravar')
                                                    <?php } ?>
                                                </div>
                                                <div id="endereco" class="tab-pane fade">
                                                    <?php if(isset($enderecos)) { ?>
                                                    @if($vista=='enderecoGravar')
                                                        @include('enderecoGravar')
                                                    @elseif($vista=='endereco')
                                                        @include($vista,["end"=>$end])
                                                    @endif

                                                    <?php } else { ?>
                                                    @include('enderecoGravar')
                                                    <?php } ?>
                                                </div>
                                                <div id="contacto" class="tab-pane fade">

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
                                            <?php
                                            $ensinoG="";
                                            $ensinoT ="";
                                            $ensinoS ="";


                                            if(isset($nav)){
                                                switch($nav){
                                                    case "ensinoG": $ensinoG="class='active'" ; break;
                                                    case "ensinoT":$ensinoT ="class='active'";break;
                                                    case "ensinoS ":$ensinoS ="class='active'";break;
                                                    default: $ensinoG="class='active'";break;
                                                }
                                            }

                                            ?>
                                            <li <?=$ensinoG?>><a data-toggle="tab" href="#ensinoG">Ensino Geral</a>
                                            </li>
                                            <li <?=$ensinoT?>><a data-toggle="tab" href="#ensinoT">Ensino tecnico</a></li>
                                            <li <?=$ensinoS?>><a data-toggle="tab" href="#ensinoS">Ensino Superior</a></li>
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
                                <div class="col-md-9">


                                    <?php if(isset($habilitacaoI)) { ?>
                                    @if($vista=='habIntelectual')
                                        @include('habIntelectual')
                                    @elseif($vista=='habilitacaoIntelectualEdit')
                                        @include($vista,["hab"=>$hab])
                                    @endif

                                    <?php } else { ?>
                                    @include('habIntelectual')
                                    <?php } ?>
                                </div>
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
