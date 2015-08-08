@extends('layouts.main')
@section('title')
    Nucleo
@stop



@section('body')

    <script src="{{URL::asset("js/jquery.min.js")}}"></script>
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.js")}}"></script>
    <script src="{{URL::asset("Start/js/progressbar.min.js")}}"></script>

    <script>


        var empregad,proc;
        nav = "none";
        @if(isset($nav))
        nav = '<?=$nav?>';

        @endif
    </script>



    <div class="container-fluid">
        <div class="panel-body">
            {{--<h3 class="text-center">Preencha o seu Curriculum</h3>--}}
            <ul class="nav nav-tabs nav-justified top">
             {{--   <li ><a id="empregad" data-toggle="pill" href="#home">Vagas</a></li>--}}
                <li ><a id="empregad" data-toggle="tab" href="#menu1">Empregador</a></li>
                <li><a id="proc"  data-toggle="tab" href="#menu2">Procurar</a></li>

            </ul>

            <div class="container-fluid">



                <div class="row">
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">

                            </div>


                            <div id="menu1" class="tab-pane fade in active">
                                <?php if(isset($empregadores)) { ?>
                                @if($vista=='empregador')
                                    @include('empregador')
                                @elseif($vista=='empregadorEdit')
                                    @include($vista,["emp"=>$emp,"user"=>$user])
                                @endif

                                <?php } else { ?>
                                @include('empregador')
                                <?php } ?>
                            </div>
                            <div id="menu2" class="tab-pane fade">i
@include("Procurar")
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
<script>

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
                case "empregad":
                    clica('empregad');

                    break;
                case "proc":
                    clica('proc');
                   // alert("v");
                    break;


                default:
                    clica('empregad');

                    break;
            }
        }
    });




</script>

@stop
