
@if($refer)
    <a href="{{ route('editar_referencia', ['id' => $refer->id]) }}"><button>Editar</button></a>
    <a href="{{ route('gravar_referencia')}}"><button>Adicionar</button></a>

    <p>
        Referencia : {{ $refer->referencia }}
    </p>
    <p>

    </p>
@else
    <p>404 nao existe</p>
@endif
