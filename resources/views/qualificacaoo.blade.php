
@if($qual)
    <a href="{{ route('editar_qualificacao', ['id' => $qual->id]) }}"><button>Editar</button></a>
    <p>
        Ano de Conclusão :{{ $qual->nomeCurso}}
    </p>
    <p>
        Nome da Instituicao :{{ $qual->nomeInstituicao}}
    </p>
    <p>
        Ano de conclusao : {{ $qual->anoConclusao}}
    </p>
@else
    <p>404 nao existe</p>
@endif
