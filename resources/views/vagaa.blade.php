

<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>



<h4 class="text-center">Vaga</h4>


<div class="form-group">
    <p><label class="control-label col-sm-3" >Nome da vaga:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->nome }}</p>
    </div>
</div>


<div class="form-group">
    <p><label class="control-label col-sm-3" >Descricao:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->descricao }}</p>
    </div>
</div>
<div class="form-group">
    <p><label class="control-label col-sm-3" >Numero de vagas:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->nrVagas }}</p>
    </div>
</div>

<div class="form-group">
    <p><label class="control-label col-sm-3" >Disponibilidade:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->disponibilidade }}</p>
    </div>
</div>
<div class="form-group">
    <p><label class="control-label col-sm-3" >Idioma:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->idioma }}</p>
    </div>
</div>
<div class="form-group">
    <p><label class="control-label col-sm-3" >Curso Adicional:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->outroCurso }}</p>
    </div>
</div>
<div class="form-group">
    <p><label class="control-label col-sm-3" >Nivel:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->sistemaEnsino }}</p>
    </div>
</div>

<div class="form-group">
    <p><label class="control-label col-sm-3" >Curso:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->cursos }}</p>
    </div>
</div>
<div class="form-group">
    <p><label class="control-label col-sm-3" >Competencias:</label></p>
    <div class="col-sm-9">
        <p class="form-control" >{{ $vaga->competencia }}</p>
    </div>
</div>
<div class="form-group">
    <p><label class="control-label col-sm-3" >Condicoes Oferecidas:</label></p>
    <div class="col-sm-9">
        <p class="form-control">{{ $vaga->condicoesOferecidas }}</p>
    </div>
</div>

<div class="form-group">
    <a href="{{ route('editar_vaga', ['id' => $vaga->id]) }}"><button class="btn btn-success" >Editar</button></a>
    <a href="{{ route('gravarVaga')}}"><button class="btn btn-success">Adicionar</button></a>
</div>


