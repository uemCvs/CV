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



    <script>


        var vagaR,vagaV, perfilV;
        nav = "none";
        @if(isset($nav))
        nav = '<?=$nav?>';

        @endif
    </script>

    <div class="row">

        <div class="col-md-2 portfolio-item">
            <ul class="nav nav-tabs nav-stacked nav-esquerdo ">
                <li  ><a id="vagaR" data-toggle="tab" href="#registar">Registar Vagas</a></li>
                <li><a id="vagaV" data-toggle="tab" href="#ver">Ver Vagas</a></li>
               {{-- <li><a id="perfilV" data-toggle="tab" href="#verPerfil">Ver Perfil</a></li>--}}
            </ul>
        </div>

        <div class="col-md-8">



            <div class="row">
                <div class="panel panel-body">
                    <div  class="tab-content">
                        <div id="registar" class="tab-pane fade in active" >

                            @include('vaga')
                        </div>
                        <div id="ver" class="tab-pane fade " >




                                @foreach($vagas as $vaga)
                                    <div id="imgE" class="col-md-4 portfolio-item">
                                        <a href="#"  onclick="vaga()">
                                            <img   class="img-responsive " src="{{url('Start/img/empregador/vaga9.png')}}" alt="vaga">

                                            <h4 id="verVaga" class="text-center" >
                                                {{$vaga->nome}}
                                            </h4>
                                            <input type="hidden" value="{{$vaga->id}}" id="hidden">
                                        </a>


                                        {{--  <p>{{$vaga->descricao}}.</p>--}}

                                    </div>
                                @endforeach



                        </div>

                        <div id="verPerfil" class="tab-pane fade" >

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="col-md-2">

            <div class="form-group">
                <label for="nome">Nome:</label>
                {{-- {{$empregador->nome}}--}}
            </div>
            <div class="form-group">
                <label for="nome">Email:</label>
                {{--{{$empregador->email}}--}}
            </div>
        </div>


    </div>

    <script>
        function vaga(){

            var verSelect = $('#hidden').val();

            var tab=document.getElementById('ver');
            var x= $('#ver').load('/vaga/'+verSelect);

        }
       /* function teste(){
            var id = $('#hidden').val();
            $.put('/gestorEmpregador/'+id,function(){
                var x= $('#ver').load('/vaga/'+verSelect);
            });
        }*/

        function clica(nome) {
            //alert('clica '+nome);
            var tag,parent;
            tag = document.getElementById(nome);
            tag.click();
        }

        $(document).ready(function () {
            if (nav!='none') {
                //alert('oloa');
                switch (nav) {
                    case "vagaR":
                        clica('vagaR');

                        break;
                    case "vagaV":
                        clica('vagaV');
alert("v");
                        break;
                    case "perfilV":
                        clica('perfilV');

                        break;

                    default:
                        clica('vagaR');

                        break;
                }
            }
        });




    </script>
@stop
