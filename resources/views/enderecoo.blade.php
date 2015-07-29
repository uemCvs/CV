

@if($end)
<a href="{{ route('editar_endereco', ['id' => $end->id]) }}"><button>Editar</button></a>
<p>Endereço</p>

<p>
  Pais : {{ $end->pais }}
</p>
      <p>
        Provincia:{{ $end->provincia }}
      </p>
      <p>
        Distrito: {{ $end->distrito }}
      </p>
      <p>
        Bairro :{{ $end->bairro }}
      </p>
      <p> Rua: {{ $end->rua }}
      </p>
    </p>
    <p>Avenida: {{ $end->avenida }}
    </p>
    <p>
      Numero de casa :{{ $end->nrDeCasa }}
    </p>
    <p> Quarteirao: {{ $end->quarteirao }}
    </p>
    @else
  <p>404 nao existe</p>
@endif
