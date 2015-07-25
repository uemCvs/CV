
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{route('put_hab', ['id' => $hab->id])}}">
    <input type="hidden" name="_method" value="PUT">
    <p>Habilitações Intelectuais
    </p>
    <p>Descrição: </p>

    <p>
        <textarea name="habilitacao" value="{{ $hab->habilitacao}}" cols="100" rows="10"></textarea>
    </p>
    <input type="submit" value="enviar">
</form>

</body>
</html>