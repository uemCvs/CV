
@if($h)
<a href="{{route('editarHabilitacao', ['id' => $h->id]) }}"><button>Editar</button></a>
<a href="{{ route('gravarHabilitacao')}}"><button>Adicionar</button></a>
    @if ($h->curso == null)
    <p>
      Nível : {{ $h->nivel }}
    </p>
          <p>
            Ano de Conclusão :{{ $h->anoDeConclusao}}
          </p>
        <p>Instituição : {{ $h->instituicao }}

          </p>
          @else
          <p>
            Nível : {{ $h->nivel }}
          </p>
                <p>
                  Ano de Conclusão :{{ $h->anoDeConclusao}}
                </p>
                <p>
                  Curso: {{ $h->curso }}
                </p>
                <p>
                  Sistema de Ensino :{{ $h->sisEnsino }}

                </p>
                <p>Instituição : {{ $h->instituicao }}

                </p>
                @endif 
        @else
  <p>404 nao existe</p>

@endif
