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
            <li ><a data-toggle="pill" href="#menu1">Habilitacoes Literarias</a></li>
            <li><a data-toggle="pill" href="#menu2">Qualificacoes</a></li>
            <li><a data-toggle="pill" href="#menu3">Habilitacoes Intelectuais</a></li>
            <li><a data-toggle="pill" href="#menu3">Disponibilidade</a></li>
            <li><a data-toggle="pill" href="#menu3">Referencia</a></li>
        </ul>
        <div class="row">
        <div class="tab-content">


            <div id="home" class="tab-pane fade in active">
                <div class="container-fluid">
                    <div class="col-md-3">
                    <ul class="nav nav-tabs nav-stacked">
                        <li class="active"><a data-toggle="tab" href="#dados1">Dados Pessoais</a></li>
                        <li><a data-toggle="tab" href="#endereco">Endereco</a></li>
                        <li><a data-toggle="tab" href="#contacto">Contactos</a></li>

                    </ul>
                        </div>
                    <div>

                    <div class="tab-content">
                        <div id="dados1" class="tab-pane fade in active">
                            <h3></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="endereco" class="tab-pane fade">
                            <h3>Menu 1</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="contacto" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div id="menu1" class="tab-pane fade">

            </div>
            <div id="menu2" class="tab-pane fade">

            </div>
            <div id="menu3" class="tab-pane fade">

            </div>
        </div>
    </div>

    </body>



       @stop