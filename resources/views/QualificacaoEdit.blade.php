<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

<form id="form1" name="form1" method="post" action="{{ route('put_qual', ['id' => $qual->id]) }}">
    <input type="hidden" name="_method" value="PUT">
    <h4 class="text-center">Outras Qualificacoes</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nomeCurso">Nome do Curso</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nomeCurso" id="nomeCurso" required="required"  value="{{ $qual->nomeCurso }}" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="nomeInstituicao">Nome da Instituição</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nomeInstituicao" id="nomeInstituicao" required="required"  value="{{ $qual->nomeInstituicao }}" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="anoConclusao">Ano de Conclusão</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="anoConclusao" id="anoConclusao" value="{{ $qual->anoConclusao}}"  required="required" min="1920"  max="{{date("Y")}}" />

        </div>
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

    var btEditar = document.getElementById('editarPessoais');
    var btGravar = document.getElementById('gravarDpessoais');

    function editar(){

        btEditar.style.display='none';
        btGravar.style.display='block';
        var nomeCurso=document.getElementById('nomeCurso');
        var nomeInstituicao=document.getElementById('nomeInstituicao');
        var anoConclusao=document.getElementById('anoConclusao');
        anoConclusao.readOnly=false;
        nomeInstituicao.readOnly=false;
        nomeCurso.readOnly=false;
    }

</script>

