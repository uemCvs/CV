
@if($h)
<a href="{{ route('editar_habilitacao', ['id' => $h->id]) }}"><button>Editar</button></a>
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
  @else
  <p>404 nao existe</p>
@endif
