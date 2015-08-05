<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>
<form id="form1" name="form1" method="post" action="{{route('put_disp', ['id' => $disp->id])}}">
    <input type="hidden" name="_method" value="PUT">

    <h4 class="text-center">Disponibilidade</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="disp">Tempo</label>
        <div class="col-sm-9">
            <select class="form-control" name="disp" id="disp" required="required" style="display: none">
                <option selected="selected">{{ $disp->disp}}</option>
                <option value="Inteiro">Inteiro</option>
                <option value="Parcial">Parcial</option>
            </select>

            <input class="form-control"  name="disp" id="disp1"  value="{{ $disp->disp}}" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="tempoInicial" >Hora Inicial</label>
        <div class="col-sm-9">
            <input class="form-control" type="time" name="tempoInicial"  readonly id="tempoInicial" value="{{ $disp->tempoInicio}}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="tempoFinal" >Hora Final</label>
        <div class="col-sm-9">
            <input class="form-control" type="time" name="tempoFinal" readonly id="tempoFinal" value="{{ $disp->tempFim}}" />
        </div>
    </div>

    <div class="form-group">
        <label  for="descricao" >Descricao</label>
        <textarea class="form-control"  name="descricao" id="descricao" rows="10" readonly cols="10" >{{ $disp->descricao}}</textarea>

    </div>


</form>

<script>

    var btEditar = document.getElementById('editarPessoais');
    var btGravar = document.getElementById('gravarDpessoais');

    function editar(){

        btEditar.style.display='none';
        btGravar.style.display='block';
        var descricao=document.getElementById('descricao');
        descricao.readOnly=false;
        var tempoF=document.getElementById('tempoFinal');
        var tempoI=document.getElementById('tempoInicial');
        var disp=document.getElementById('disp');
        var disp1=document.getElementById('disp1');

        tempoF.readOnly=false;
        tempoI.readOnly=false;
        disp.style.display='block';
        disp1.style.display='none';
    }

</script>



