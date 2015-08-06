<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form id="form1" name="form1" method="post" action="{{route('put_refer', ['id' => $refer->id])}} ">
    <input type="hidden" name="_method" value="PUT">
    <h4 class="text-center">Referencias</h4>
    <div class="form-group">
        <label  for="referencia" >Referencias</label>
        <textarea class="form-control"  name="referencia" id="referencia" readonly rows="10" cols="10" >{{ $refer->referencia}}</textarea>

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
        var referencia=document.getElementById('referencia');
        referencia.readOnly=false;
    }

</script>




