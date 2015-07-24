
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{ route('put_qual', ['id' => $qual->id]) }}">
    <input type="hidden" name="_method" value="PUT">
    <p>&nbsp;</p>
    <p>
        <label for="nomeCurso">Nome do Curso</label>
        <input type="text" name="nomeCurso" id="nomeCurso" value="{{ $qual->nomeCurso }}" />
    </p>
    <p>
        <label for="nomeInstituicao">Nome da Instituição</label>
        <input type="text" name="nomeInstituicao" id="nomeInstituicao" value="{{ $qual->nomeInstituicao }}" />
    </p>
    <p>
        <label for="anoConclusao">Ano de Conclusão</label>
        <input type="text" name="anoConclusao" id="anoConclusao" value="{{ $qual->anoConclusao}}" />
    </p>
    <p>
        <input type="submit" value="enviar"/>
    </p>
</form>
</body>
</html>
