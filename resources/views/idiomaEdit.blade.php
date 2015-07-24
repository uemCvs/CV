<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <script type="text/javascript">

    </script>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{route('put_idioma', ['id' => $idioma->id])}}">
    <input type="hidden" name="_method" value="PUT">

    <p>Idiomas</p>
    <p>
        <label for="nomeIdioma">Nome do Idioma</label>
        <select name="lingua" id="jumpMenu"  >
            <option >{{ $idioma->lingua}}</option>
            <option >Changana</option>
            <option>Inglês</option>
            <option>Português</option>
            <option>Francês</option>
            <option>Espanhol</option>
        </select>
    </p>
    <p>
        Dominio de Escrito
        <select name="dominioEsc" id="jumpMenu2" >
            <option  >{{ $idioma->dominioEsc}}</option>
            <option  >Excelente</option>
            <option>Bom</option>
            <option>Razoável</option>
            <option>Mau</option>
        </select>
    </p>
    <p>Dominio de Fala
        <select name="dominioFala" id="jumpMenu3" >
            <option>{{$idioma->dominioFala}}</option>
            <option>Razoável</option>
            <option>Excelente</option>
            <option>Bom</option>
            <option>Mau</option>
        </select>
    </p>
    <p>Dominio de leitura
        <select name="dominioLei" id="jumpMenu3"  >
            <option>{{ $idioma->dominioLei}}</option>
            <option>Razoável</option>
            <option>Excelente</option>
            <option>Bom</option>
            <option>Mau</option>
        </select>
    </p>

    <p>
        <input type="submit" name="gravarIdioma" id="gravarIdioma" value="Gravar" />
    </p>
</form>
</body>
</html>
