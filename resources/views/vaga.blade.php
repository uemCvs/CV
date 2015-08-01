<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('vaga')}}">
    <input type="hidden" id="registoEstudante" name="registoEstudante" value="1" />
    <h4 class="text-center">Vagas</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nome">Nome da Vaga</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nome" id="nome" required="required" placeholder="Introduza o nome da vaga" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="Descricao" >Descricao da vaga</label>
        <div class="col-sm-9">
            <textarea class="form-control"  name="descricao" id="Descricao" placeholder="Introduza a descricao da vaga" required="required" ></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="vagas">Numero de vagas</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nrVagas" id="vagas"  placeholder="Introduza o numero de vagas" required="required" />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3" id="Disponibilidade" for="Disponibilidade">Disponibilidade</label>
        <div class="col-sm-9">
            <select class="form-control" id="Disponibilidade" name="disponibilidade">
                <option selected="selected">Escolha a disponibilidade</option>
                <option value="Parcial">Parcial</option>
                <option value="Inteiro">Inteiro</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="idioma" for="idioma">idioma</label>
        <div class="col-sm-9">
            <select class="form-control" id="idioma" name="idioma">
                <option selected="selected">Selecione o idioma</option>
                <option value="Parcial">ingles</option>
                <option value="Inteiro">Portugues</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="outroCurso">Curso adicional</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="outroCurso" id="outroCurso" required="required" placeholder="Introduza cursos adicionais" />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3" for="nivel">Nível </label>
        <div class="col-sm-9">
            <select class="form-control" id="nivel" name="sistemaEnsino">
                <option selected="selected">Escolha o nivel</option>
                <option value="superior">superior</option>
                <option value="Tecnico Medio">Tecnico Medio</option>
                <option value="Geral">Geral</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="curso">curso </label>
        <div class="col-sm-9">
            <select class="form-control" id="curso" name="cursos">
                <option selected="selected">Escolha o nivel</option>
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
            <textarea class="form-control"  name="Competencia" id="Competencia" placeholder="Introduza as competencias requeridas" required="required" ></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="Condicao" >Condicoes oferecidas</label>
        <div class="col-sm-9">
            <textarea class="form-control"  name="condicaoOferecida" id="Condicao" placeholder="Introduza as condicoes oferecidas" required="required" ></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"/>
        </div>
    </div>


</form>

