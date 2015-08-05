@extends('layouts.main')

@section('body')
    <?php
    if(isset($estudante))
    {
    ?>
    @include('gestorEmpregador',['vaga'=>$vaga])

    <?php } else { ?>
    @include('gestorEmpregador',['vaga'=>$vaga])
    <?php }?>


@endsection
