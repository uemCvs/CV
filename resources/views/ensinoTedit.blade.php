<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

<form id="form1" name="form1" method="post" action="{{ route('put_h', ['id' => $h->id]) }}">
    <input type="hidden" name="_method" value="PUT" />
    <h4 class="text-center">Ensino Tecnico</h4>


    <div class="form-group">
        <label class="control-label col-sm-3" for="instituicao">Nome da Instituição</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="instituicao" id="instituicao" required="required" value="{{ $h->instituicao }} "/>
        </div>
    </div>

   {{-- <div class="form-group">

            {!! Form::select('nivel', Tecnico , null,['class'=>'form-control','hidden']) !!}

        </div>--}}


    <div class="form-group">
        {!! Form::label('curso',arrary('default'=>'$h->curso')+'Curso',['class'=>'control-label col-sm-3']) !!}

        <div class="col-sm-9">


            {!! Form::select('curso', [] , null,['class'=>'form-control','multiple']) !!}
        </div>
    </div>




    <div class="form-group">
        <label class="control-label col-sm-3" for="anoConclusao">Ano de Conclusão</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="anoConclusao" id="anoConclusao" value="{{ $h->anoDeConclusao}}" required="required" min="1920"  max="{{date("Y")}}" />

        </div>
    </div>

    <input type="hidden" name="sisEnsino" id="sisEnsino" />


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
        var anoConclusao=document.getElementById('anoConclusao');
        var instituicao=document.getElementById('instituicao');

        anoConclusao.readOnly=false;

        instituicao.readOnly=false;

    }

</script>