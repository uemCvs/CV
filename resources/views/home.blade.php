@extends('layouts.main')

@section('body')
    <?php if(isset($estudante)) { ?>

    @include('gestorCurriculum',['vista'=>$vista,'v'=>$v])



    <?php } else { ?>
    @include('gestorEmpregador',['vaga'=>$vaga])
    <?php } ?>


@endsection
