<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('habilitacoes')}}">
    <input type="hidden" id="sisEnsino" name="sisEnsino" value="Ensino Geral" />
    <h4 class="text-center">Habilitações Intelectuais</h4>

    <div class="form-group">
        <label class="control-label col-sm-3" id="nivel" for="nivel">Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="nivel" id="nivel" >
                {{--    <option selected="selected">E</option>--}}
                <option value="primario">Primario</option>
                <option value="basico">Basico</option>
                <option value="medio">Medio</option>


            </select>
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-sm-3" for="anoConclusao">Ano de Conclusão</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="anoConclusao" id="anoConclusao" placeholder="0000" required="required" min="1920"  max="{{date("Y")}}" />

        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="nomeInstituicao">Nome da Instituição</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="instituicao" id="instituicao" required="required" placeholder="Introduza o nome da instituicao" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="curso">Curso</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="curso" id="curso" required="required" placeholder="Introduza o nome da instituicao" />
        </div>
    </div>
    <input type="hidden" name="sisEnsino" id="sisEnsino" />

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarHabLiter" id="gravarHabLiter" value="Gravar"/>
        </div>
    </div>

</form>


