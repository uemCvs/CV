@extends('layouts.main')
@section('title')
    Curriculum
@stop


@section('body')

    <script src="{{URL::asset("js/jquery.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.min.js")}}"></script>

    <script>

        var home, menu1, menu2, menu3, menu4, menu5, dados, endereco, contacto, ensinoG, ensinoT, ensinoS, experiencia, idioma, quali, nav;
        nav = "none";
        @if(isset($nav))
        nav = '<?=$nav?>';
        @endif
    </script>




    <div class="container-fluid">
        <div class="panel-body">
            {{--<h3 class="text-center">Preencha o seu Curriculum</h3>--}}
            <ul class="nav nav-tabs nav-justified top">


                <li><a id="home" data-toggle="tab" href="#divhome">Dados Pessoais</a></li>
                <li><a id="menu1" data-toggle="tab" href="#divmenu1">Habilitacoes Literarias</a></li>
                <li><a id="menu2" data-toggle="tab" href="#divmenu2">Qualificacoes</a></li>
                <li><a id="menu3" data-toggle="tab" href="#divmenu3">Habilitacoes Intelectuais</a></li>
                <li><a id="menu4" data-toggle="tab" href="#divmenu4">Disponibilidade</a></li>
                <li><a id="menu5" data-toggle="tab" href="#divmenu5">Referencia</a></li>
            </ul>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div id="divhome" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-tabs nav-stacked nav-esquerdo ">


                                            <li><a id="dados" data-toggle="tab" href="#dados1">Dados
                                                    Pessoais</a></li>
                                            <li><a id="endereco" data-toggle="tab" href="#divEndereco">Endereco</a></li>
                                            <li><a id="contacto" data-toggle="tab" href="#divContacto">Contacto</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="panel panel-body">
                                            <div class="tab-content">
                                                <div id="dados1" class="tab-pane fade in active">
                                                    @if(isset($dadosPessoais) || isset($vista))
                                                    @if($vista=='estudanteGravar')
                                                        @include('estudanteGravar')
                                                    @elseif($vista=='estudante')
                                                        @include($vista,["est"=>$est])
                                                    @endif
                                                    @else
                                                    @include('estudanteGravar')
                                                    @endif
                                                </div>
                                                <div id="divEndereco" class="tab-pane fade">
                                                    <?php if(isset($enderecos) ) { ?>
                                                    @if($vista=='enderecoGravar')
                                                        @include('enderecoGravar')
                                                    @elseif($vista=='endereco')
                                                        @include($vista,["end"=>$end])
                                                    @endif

                                                    <?php } else { ?>
                                                    @include('enderecoGravar')
                                                    <?php } ?>
                                                </div>
                                                <div id="divContacto" class="tab-pane fade">
                                                    <?php if(isset($contactos) ) { ?>
                                                    @if($vista=='contactoGravar')
                                                        @include('contactoGravar')
                                                    @elseif($vista=='contacto')
                                                        @include($vista,["telefone"=>$telefone,"email"=>$email])
                                                    @endif
                                                    <?php } else {?>
                                                    @include('contactoGravar')
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div id="divmenu1" class="tab-pane fade">
                                <div class="row">

                                    <div class="col-md-9">
                                        <div class="panel panel-body">
                                            <div class="tab-content">
                                                <div id="divEnsinoG" class="tab-pane fade in active">
                                                    <?php if(isset($ensinos)) { ?>
                                                    @if($vista=='habilitacaoGravar')
                                                    @include('habilitacaoGravar')
                                                    @elseif($vista=='habilitacao')
                                                    @include($vista,["h"=>$h])
                                                    @endif
                                                    <?php } else {?>
                                                    @include('habilitacaoGravar')
                                                    <?php } ?>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="divmenu2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="nav nav-tabs nav-stacked nav-esquerdo">

                                            <li><a id="experiencia" data-toggle="tab" href="#exp">Experiencia
                                                    Profissional</a></li>
                                            <li><a id="idioma" data-toggle="tab" href="#divIdioma">Idioma</a></li>
                                            <li><a id="quali" data-toggle="tab" href="#ouQ">Outras Qualificacoes</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="panel panel-body">
                                            <div class="tab-content">
                                                <div id="exp" class="tab-pane fade in active">

                                                    <?php if(isset($experiencias)) { ?>
                                                    @if($vista=='experienciaGravar')
                                                        @include('experienciaGravar')
                                                    @elseif($vista=='experiencia')
                                                        @include($vista,["exp"=>$exp])
                                                    @endif

                                                    <?php } else { ?>
                                                    @include('experienciaGravar')
                                                    <?php } ?>
                                                </div>
                                                <div id="divIdioma" class="tab-pane fade">

                                                    <?php if(isset($idiomas)) { ?>
                                                    @if($vista=='idioma')
                                                        @include('idioma')
                                                    @elseif($vista=='idiomaEdit')
                                                        @include($vista,["idioma"=>$idioma])
                                                    @endif

                                                    <?php } else { ?>
                                                    @include('idioma')
                                                    <?php } ?>


                                                </div>
                                                <div id="ouQ" class="tab-pane fade">

                                                    <?php if(isset($qualificacoes)) { ?>
                                                    @if($vista=='qualificacao')
                                                        @include('qualificacao')
                                                    @elseif($vista=='qualificacaoEdit')
                                                        @include($vista,["qual"=>$qual])
                                                    @endif

                                                    <?php } else { ?>
                                                    @include('qualificacao')
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="divmenu3" class="tab-pane fade">
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
                            <div id="divmenu4" class="tab-pane fade">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">

                                    <?php if(isset($disponibilidades)) { ?>
                                    @if($vista=='disponibilidade')
                                        @include('disponibilidade')
                                    @elseif($vista=='disponibilidadeEdit')
                                        @include($vista,["disp"=>$disp])
                                    @endif

                                    <?php } else { ?>
                                    @include('disponibilidade')
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="divmenu5" class="tab-pane fade">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">

                                    <?php if(isset($referencias)) { ?>
                                    @if($vista=='referencia')
                                        @include('referencia')
                                    @elseif($vista=='referenciaEdit')
                                        @include($vista,["refer"=>$refer])
                                    @endif

                                    <?php } else { ?>
                                    @include('referencia')
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="progress-bar" id="example-percent-container" role="progressbar"
                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            </div>
                        </div>
                        <div class="row"><p></p>

                            <p></p></div>
                        <div class="row">
                            <p>
                                <a href="{{url('Meu_Perfil/'.Auth::user()->estudante->id)}}">
                                    <button type="submit" class="btn btn-success btn-sm" id="geradorPDF">Visualizar Curriculum</button>
                                </a>
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

        function clica(nome) {
            alert('clica '+nome);
            var tag,parent;
            tag = document.getElementById(nome);
            tag.click();
        }

        circle.animate(1, function () {
            circle.animate(0);
        });


        $(document).ready(function () {
            if (nav!='none') {
                alert('oloa');
                switch (nav) {
                    case "home":
                        clica('home');
                        break;
                    case "menu1":
                        clica('menu1');
                        break;
                    case "menu2":
                        clica('menu2');

                        break;
                    case "menu3":
                        clica('menu3');
                        break;
                    case "menu4":
                        clica('menu4');
                        break;
                    case "menu5":
                        clica('menu5');
                        break;

                    case "dados":
                        clica('home');
                        clica('dados');
                        break;
                    case "endereco":
                        clica('home');
                        clica('endereco');
                        break;
                    case "contacto":
                        clica('home');
                        clica('contacto');
                        break;

                    case "ensinoG":
                        clica('menu1');
                        clica('ensinoG');
                        break;
                    case "ensinoT":
                        clica('menu1');
                        clica('ensinoT');
                        break;
                    case "ensinoS ":
                        clica('menu1');
                        clica('ensinoS');
                        break;
                    case "experiencia":
                        clica('menu2');
                        clica('experiencia');
                        break;
                    case "idioma":
                        clica('menu2');
                        clica('idioma');
                        break;
                    case "quali":
                        clica('menu2');
                        clica('quali');
                        break;

                    default:
                        clica('home');
                        clica('dados')
                        break;
                }
            } else {
                //alert('false');
                clica('home');
                clica('dados');
            }
        });
    </script>

@stop








