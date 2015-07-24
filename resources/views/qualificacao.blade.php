<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{url('qualificacao')}}">
    <p>&nbsp;</p>
    <p>
        <label for="nomeCurso">Nome do Curso</label>
        <input type="text" name="nomeCurso" id="nomeCurso" />
    </p>
    <p>
        <label for="nomeInstituicao">Nome da Instituição</label>
        <input type="text" name="nomeInstituicao" id="nomeInstituicao" />
    </p>
    <p>
        <label for="anoConclusao">Ano de Conclusão</label>
        <input type="text" name="anoConclusao" id="anoConclusao" />
    </p>
    <p>
        <input type="submit" value="enviar"/>
    </p>
</form>
</body>
</html>
