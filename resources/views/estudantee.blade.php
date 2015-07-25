
@if($est)
<a href="{{ route('editar_estudante', ['id' => $est->id]) }}"><button>Editar</button></a>
<p>Dados Pessoais</p>

<p>
  Apelido : {{ $est->apelido }}
</p>
      <p>
        Outros Nomes :{{ $est->outrosNomes }}
      </p>
      <p>
        Data de nascimento: {{ $est->dataNascimento }}
      </p>
      <p>
        Numero de Estudante :{{ $est->nrEstudante }}

      </p>
      <p>Curso : {{ $est->curso }}
      </p>
    </p>
    <p>Nível : {{ $est->nivel }}
    </p>
    @else
  <p>404 nao existe</p>
@endif
