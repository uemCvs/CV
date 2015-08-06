<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{ route('put_vaga', ['id' => $vaga->id]) }}">
    <input type="hidden" name="_method" value="PUT" />

    <input type="hidden" id="registoEstudante" name="registoEstudante" value="1" />
    <h4 class="text-center">Vagas</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nome">Nome da Vaga</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nome" id="nome" readonly required="required" value="{{ $vaga->nome }}" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="Descricao" >Descricao da vaga</label>
        <div class="col-sm-9">
            <textarea class="form-control"  name="descricao" id="Descricao" readonly required="required" >{{$vaga->descricao}}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="vagas">Numero de vagas</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nrVagas" id="vagas"  readonly value="{{ $vaga->nrVagas }}" required="required" />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3" id="Disponibilidade" for="Disponibilidade">Disponibilidade</label>
        <div class="col-sm-9">
            <select class="form-control" id="Disponibilidade" name="Disponibilidade" disabled>
                <option selected="selected">{{ $vaga-> disponibilidade}}</option>
                <option value="Parcial">Parcial</option>
                <option value="Inteiro">Inteiro</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="idioma" for="idioma">idioma</label>
        <div class="col-sm-9">
            <select class="form-control" id="idioma" name="idioma" disabled>
                <option selected="selected">{{ $vaga->idioma }}</option>
                <option value="Ingles">ingles</option>
                <option value="Portugues">Portugues</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="outroCurso">Curso adicional</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="outroCurso" readonly id="outroCurso" required="required" placeholder="Introduza cursos adicionais" value="{{ $vaga->outroCurso}}" />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3" for="nivel">Nível </label>
        <div class="col-sm-9">
            <select class="form-control" id="nivel" name="sistemaEnsino" disabled>
                <option selected="selected">{{ $vaga->sistemaEnsino }}</option>
                <option value="superior">superior</option>
                <option value="Tecnico Medio">Tecnico Medio</option>
                <option value="Geral">Geral</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="curso">curso </label>
        <div class="col-sm-9">
            <select class="form-control" id="curso" name="cursos" disabled>
                <option selected="selected">{{ $vaga->cursos }}</option>
                <option value="Engenharia Informatica">Engenharia Informatica</option>
                <option value="Engenharia Electrica">Engenharia Electrica</option>
                <option value="Engenharia Civil">Engenharia Civil</option>
                <option value="Engenharia Electronica"> Engenharia Electronica</option>
                <option value="Engenharia Ambiental">Engenharia Ambiental</option>
                <option value="Engenharia Quimica">Engenharia quimica</option>
                <option value="Engenharia Mecanica">Engenharia Mecanica</option>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="Competencia" >Competencias</label>
        <div class="col-sm-9">
            <textarea class="form-control"  name="competencia" id="Competencia" readonly required="required" >{{$vaga->competencia}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="Condicao" >Condicoes oferecidas</label>
        <div class="col-sm-9">
            <textarea class="form-control"  name="condicoesOferecidas" id="Condicao" readonly required="required" >{{ $vaga->condicoesOferecidas}}</textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"/>
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




    function editar() {

        var btEditar = document.getElementById('editarPessoais');
        var btGravar = document.getElementById('gravarDpessoais');
        btEditar.style.display='none';
        btGravar.style.display='block';
        var nome = document.getElementById('nome');
        var descricao = document.getElementById('descricao');
        var nrVagas = document.getElementById('nrVagas');
        var Disponibilidade = document.getElementById('Disponibilidade');
        var idioma = document.getElementById('idioma');
        var nivel = document.getElementById('nivel');
        var Competencia = document.getElementById('Competencia');
        var curso = document.getElementById('curso');
        var Condicao = document.getElementById('Condicao');

        Competencia.readOnly = false;
        Condicao.readOnly = false;
        nome.readOnly = false;
        descricao.readOnly = false;
        nrVagas.readOnly = false;
        Disponibilidade.disabled = false;
        idioma.disabled = false;

        curso.disabled = false;
        nivel.disabled = false;

    }


</script>



