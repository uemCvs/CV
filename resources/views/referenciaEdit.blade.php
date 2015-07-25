
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CV </title>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{route('put_refer', ['id' => $refer->id])}} ">
    <input type="hidden" name="_method" value="PUT">
    <p>Referencias</p>
    <p>
        <label for="referencias">Referencias</label>
        <input type="textArea" name="referencia" cols="100" rows="30" value="{{ $refer->referencia}}" /><br>
        <input type="submit" value="enviar">
    </p>
    <p>&nbsp;</p>
</form>
</body>
</html>
