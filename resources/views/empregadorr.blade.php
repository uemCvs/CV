<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

@if($emp)

    <a href="{{ route('editar_Empregador', ['id' => $emp->id]) }}"><button class="btn btn-success">Editar</button></a>

    <p>
        Nome da Empresa :{{ $emp->nome }}
    </p>
    <p>
        Descricao :{{ $emp->descricao }}
    </p>
    <p>
        Logotipo : {{ $emp->logotipo }}
    </p>

@else
    <p>404 nao existe</p>



@endif
