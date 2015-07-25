
@if($hab)
    <a href="{{ route('editar_habilitacao', ['id' => $hab->id]) }}"><button>Editar</button></a>
    <p>
        Habilitacao : {{ $hab->habilitacao }}
    </p>
    <p>

    </p>
@else
    <p>404 nao existe</p>
@endif
