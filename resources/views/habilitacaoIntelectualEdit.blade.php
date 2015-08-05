<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

<form id="form1" name="form1" method="post" action="{{route('put_hab', ['id' => $hab->id])}}">

    <input type="hidden" name="_method" value="PUT">
    @if(session('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>

    @endif

    <h4 class="text-center">Habilitações Intelectuais</h4>
    <div class="form-group">
        <label  for="descrHabilIntelc" >Descrição:</label>
        <textarea class="form-control"  name="habilitacao" id="descrHabilIntelc"  rows="10" cols="10" readonly>{{ $hab->habilitacao}}</textarea>

    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="button" class="btn btn-success" name="editarPessoais" id="editarPessoais" value="Editar"
                   onclick="editar()"/>
            <input style="display: none" type="submit" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"
                    />
        </div>
    </div>

</form>


<script>
  function editar(){

      var btEditar = document.getElementById('editarPessoais');
      var btGravar = document.getElementById('gravarDpessoais');
      btEditar.style.display='none';
      btGravar.style.display='block';
      var desc=document.getElementById('descrHabilIntelc');
      desc.readOnly=false;
  }

</script>