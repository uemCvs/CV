<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('habilitacoes')}}">
    <input type="hidden" id="sisEnsino" name="sisEnsino" value="Ensino Tecnico" />
    <h4 class="text-center">Ensino Tecnico</h4>

    <div class="form-group">
        <label class="control-label col-sm-3" id="nivel" for="nivel">Nivel</label>
        <div class="col-sm-9">
            <select class="form-control" name="nivel" id="nivel" >
                <option selected="selected">Escolha o nivel</option>
                <option value="Basico">Basico</option>
                <option value="Medio">Medio</option>


            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="curso" for="curso">Curso</label>
        <div class="col-sm-9">
            <select class="form-control" id="curso" name="curso">
                <option selected="selected">Escolha o curso</option>
                <option value="Hidraulica">Hidraulica</option>
                <option value="Civil">Civil</option>
                <option value="Electrica">Electrica</option>
                <option value="Electronica">Electronica</option>
                <option value="Informatica">Informatica</option>

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
    <input type="hidden" name="sisEnsino" id="sisEnsino" />

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarHabLiter" id="gravarHabLiter" value="Gravar"/>
        </div>
    </div>

</form>
