<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>
<form class="form-horizontal" id="form1" name="form1" method="post" action="disponibilidade">

    <h4 class="text-center">Disponibilidade</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="disp">Tempo</label>
    <div class="col-sm-9">
        <select class="form-control" name="disp" id="disp" required="required">
            <option selected="selected">Inteiro</option>
            <option>Parcial</option>
        </select>
        </div>
        </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="tempoInicio" >Hora Inicial</label>
        <div class="col-sm-9">
        <input class="form-control" type="time" name="tempoInicio" id="tempoInicio" />
   </div>
        </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="tempoFim" >Hora Final</label>
        <div class="col-sm-9">
            <input class="form-control" type="time" name="tempoFim" id="tempoFim" />
        </div>
    </div>

    <div class="form-group">
        <label  for="descricao" >Descricao</label>
            <textarea class="form-control"  name="descricao" id="descricao" rows="10" cols="10" ></textarea>

    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarDisponibilidade" id="gravarDisponibilidade" value="Gravar"/>
        </div>
    </div>



</form>
