@extends('layouts.main')
@section('title')
    Empregador
@stop



@section('body')
    <link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
    <link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
    <link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
    <script src="{{URL::asset("js/jquery.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.min.js")}}"></script>




    <div class="row">

        <div class="col-md-2 portfolio-item">
            <ul class="nav nav-tabs nav-stacked nav-esquerdo ">
                <li class="active"><a data-toggle="tab" href="#registar">Registar Vagas</a></li>
                <li><a data-toggle="tab" href="#ver">Ver Vagas</a></li>
            </ul>
        </div>

        <div class="col-md-8">



            <div class="row">
                <div class="panel panel-body">
                    <div  class="tab-content">
                        <div id="registar" class="tab-pane fade in active" >
                            {{--@include('vaga')--}}
                            @yield('content')

                            {{-- <iframe src="{{url('vaga')}}"></iframe>--}}
                        </div>
                        <div id="ver" class="tab-pane fade " >


                            @if($vaga)
                                <p>Nenhuma Vaga Disponivel</p>
                            @else
                                @foreach($vagas as $vaga)
                                    <div id="imgE" class="col-md-4 portfolio-item">
                                        <a href="#"  onclick="vaga()">
                                            <img   class="img-responsive " src="{{URL::asset('Start/img/empregador/vaga9.png')}}" alt="vaga">

                                            <h4 id="verVaga" class="text-center" >
                                                {{$vaga->nome}}
                                            </h4>
                                            <input type="hidden" value="{{$vaga->id}}" id="hidden">
                                        </a>


                                        {{--  <p>{{$vaga->descricao}}.</p>--}}

                                    </div>
                                @endforeach


                            @endif
                        </div>



                    </div>
                </div>

            </div>

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

    <script>
        function vaga(){

            var verSelect = $('#hidden').val();

            var tab=document.getElementById('ver');
            var x= $('#ver').load('/vaga/'+verSelect);

        }
        function teste(){
            var id = $('#hidden').val();
            $.put('/gestorEmpregador/'+id,function(){
                var x= $('#ver').load('/vaga/'+verSelect);
            });
        }






    </script>
@stop
