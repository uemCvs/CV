<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('qualificacao')}}">
    <h4 class="text-center">Outras Qualificacoes</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nomeCurso">Nome do Curso</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nomeCurso" id="nomeCurso" required="required" placeholder="Introduza o nome do curso" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="nomeInstituicao">Nome da Instituição</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nomeInstituicao" id="nomeInstituicao" required="required" placeholder="Introduza o nome da instituicao" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="anoConclusao">Ano de Conclusão</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="anoConclusao" id="anoConclusao" placeholder="0000" required="required" min="1920"  max="{{date("Y")}}" />

        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarQualificacao" id="gravarQualificacaoo" value="Gravar"/>
        </div>
    </div>

</form>

