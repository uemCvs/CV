{{--

@if($exp)
<a href="{{ route('editar_experiencia', ['id' => $exp->id]) }}"><button>Editar</button></a>
<p>Experiencia Profissional</p>

<p>
  Pais : {{ $exp->pais }}
</p>
      <p>
        Nome da instituição:{{ $exp->instituicao }}
      </p>
      <p>
        Cargo: {{ $exp->cargo }}
      </p>
      <p>
        Ano de ingresso :{{ $exp->anoIngresso }}
      </p>
      <p> Ano de Téemino: {{ $exp->anoTermino }}
      </p>
    @else
  <p>404 nao existe</p>
@endif
--}}
