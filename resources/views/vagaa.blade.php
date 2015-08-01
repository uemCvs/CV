


    <a href="{{ route('editar_vaga', ['id' => $vaga->id]) }}"><button>Editar</button></a>
    <a href="{{ route('gravarVaga')}}"><button>Adicionar</button></a>

    <p>Vaga</p>

    <p>
        Nome da vaga : {{ $vaga->nome }}
    </p>
    <p>
        Descricao da vaga:{{ $vaga-> descricao}}
    </p>
    <p>
        Numero de vagas: {{ $vaga->nrVagas }}
    </p>
    <p>
        Nivel de ensino:{{ $vaga->sistemaEnsino}}
    </p>
    <p> Curso: {{ $vaga->cursos }}
    </p>
    </p>
      <p>Idioma: {{ $vaga->idioma}}
    </p>
    <p>
        Outros cursos :{{ $vaga->outroCurso }}
    </p>
    <p> Disponibilidade : {{ $vaga->disponibilidade }}
    </p>
    <p> Competencias : {{ $vaga->competencia }}
    </p>
    <p> Condicoes Oferecidas : {{ $vaga->condicoesOferecidas }}
    </p>

