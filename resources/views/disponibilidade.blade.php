<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <script type="text/javascript">

    </script>
</head>

<body>
<form id="form1" name="form1" method="post" action="disponibilidade">
    <p>Idiomas</p>
    <p>
        <label for="Tempo">Tempo</label>
        <select name="disp" id="jumpMenu" >
            <option selected="selected">Inteiro</option>
            <option>Parcial</option>
        </select>
    <p>
        <label >Hora Inicial</label>
        <input type="time" name="horaInicial"  />
    </p>
    <p>
        <label >Hora Final</label>
        <input type="time" name="horaFinal"  />
    </p>
    <p>
        <label >descricao</label>
        <input type="textArea" name="descricao" cols="50" rows="10"/>


        <input type="submit" name="gravarDisponibilidade" id="gravarIdioma" value="Gravar" />
    </p>
</form>
</body>
</html>
