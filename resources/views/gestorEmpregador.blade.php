@extends('layouts.main')
@section('title')
    Empregador
@stop



@section('body')

    <script src="{{URL::asset("js/jquery.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.min.js")}}"></script>

    <script>


    </script>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-7">
                <div class="container">
                    <div class="panel-body">
                        <div class="row">
                            <a href="{{URL::to('capitulo_list')}}">Registar vaga</a>
                            {{-- @foreach($vagas as $vaga){--}}
                            <div class="row">
                            <div class="col-md-3 portfolio-item">


                                <h3>
                                    <a href="#">Redes de Computadores{{--{{$vaga->nome}}--}}</a>
                                </h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio,
                                    gravida
                                    pellentesque urna varius vitae.{{--$vaga->descricao--}}</p>
                                <button type="button" class="btn btn-success btn-block"><a href="#">Ver vaga</a>
                                </button>

                            </div>
                            <div class="col-md-3 portfolio-item">


                                <h3>
                                    <a href="#">Redes de Computadores</a>
                                </h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio,
                                    gravida
                                    pellentesque urna varius vitae.</p>
                                <button type="button" class="btn btn-success btn-block"><a href="#">Ver vaga</a>
                                </button>

                            </div>

                        </div>
                            </div>
                        <div class="row">
                            <div class="col-md-3 portfolio-item">


                                <h3>
                                    <a href="#">Redes de Computadores{{--{{$vaga->nome}}--}}</a>
                                </h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio,
                                    gravida
                                    pellentesque urna varius vitae.{{--$vaga->descricao--}}</p>
                                <button type="button" class="btn btn-success btn-block"><a href="#">Ver vaga</a>
                                </button>

                            </div>
                            <div class="col-md-3 portfolio-item">


                                <h3>
                                    <a href="#">Redes de Computadores</a>
                                </h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio,
                                    gravida
                                    pellentesque urna varius vitae.</p>
                                <button type="button" class="btn btn-success btn-block"><a href="#">Ver vaga</a>
                                </button>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 portfolio-item">


                            <h3>
                                <a href="#">Redes de Computadores{{--{{$vaga->nome}}--}}</a>
                            </h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio,
                                gravida
                                pellentesque urna varius vitae.{{--$vaga->descricao--}}</p>
                            <button type="button" class="btn btn-success btn-block"><a href="#">Ver vaga</a>
                            </button>

                        </div>
                        <div class="col-md-3 portfolio-item">


                            <h3>
                                <a href="#">Redes de Computadores</a>
                            </h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio,
                                gravida
                                pellentesque urna varius vitae.</p>
                            <button type="button" class="btn btn-success btn-block"><a href="#">Ver vaga</a>
                            </button>

                        </div>

                    </div>
                </div>
                        {{-- }@endforeach--}}
                    </div>


            <div class="col-md-2">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    oua{{--{{$empregador->nome}}--}}
                </div>
                <div class="form-group">
                    <label for="nome">Email:</label>
                    {{--{{$empregador->email}}--}}teste@gmail.com
                </div>
            </div>

        </div>
    </div>




@stop
