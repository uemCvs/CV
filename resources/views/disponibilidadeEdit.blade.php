<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <script type="text/javascript">

    </script>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{route('put_disp', ['id' => $disp->id])}}">
    <input type="hidden" name="_method" value="PUT">

    <p>Idiomas</p>
    <p>
        <label for="Tempo">Tempo</label>
        <select name="disp" id="jumpMenu" >
            <option>{{ $disp->disp}}</option>
            <option >Inteiro</option>
            <option>Parcial</option>
        </select>
    <p>
        <label >Hora Inicial</label>
        <input type="time" name="horaInicial"  value="{{ $disp->tempoInicio}}"/>
    </p>
    <p>
        <label >Hora Final</label>
        <input type="time" name="horaFinal"  value="{{ $disp->tempFim}}"/>
    </p>
    <p>
        <label >descricao</label>
        <input type="textArea" name="descricao" cols="50" rows="10" value="{{ $disp->descricao}}"/>


        <input type="submit" name="gravarDisponibilidade" id="gravarIdioma" value="Gravar" />
    </p>
</form>
</body>
</html>
