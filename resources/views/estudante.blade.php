<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>


<form id="form1" name="form1" method="post">
    <h4 class="text-center">Dados Pessoais</h4>
    <input type="hidden" name="_method" value="PUT"/>

    <div class="form-group">
        <label class="control-label col-sm-3" for="apelido">Apelido:</label>

        <div class="col-sm-9">
            <input class="form-control" type="text" name="apelido" id="apelido" required="required"
                   placeholder="Introduza seu apelido" readonly value="{{ $est->apelido }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="outrosNomes">Outros Nomes:</label>

        <div class="col-sm-9">
            <input class="form-control" type="text" name="outrosNomes" id="outrosNomes" placeholder="Introduza seu nome"
                   readonly required="required" value="{{ $est->outrosNomes }}"/>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3" for="dataNascimento">Data de nascimento:</label>

        <div class="col-sm-9">
            <input class="form-control" type="date" name="dataNascimento" id="dataNascimento" readonly
                   required="required" min="1930-01-01" max="{{date('Y-m-d')}}" value="{{ $est->dataNascimento }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="numeroEstudante">Número de Estudante:</label>

        <div class="col-sm-9">
            <input class="form-control" type="number" name="numeroEstudante" id="numeroEstudante" readonly
                   placeholder="Introduza o numero de estudante" required="required" value="{{ $est->nrEstudante }}"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="curso" for="curso">Curso:</label>

        <div class="col-sm-9">
            <input class="form-control" id="curso" name="curso1" readonly value="{{ $est->curso}}">
            <select class="form-control" id="curso" name="curso" style="display:none;">
                <option selected="selected">Escolha o curso</option>
                <option value="Eng. Ambiente">Eng. Ambiente</option>
                <option value="Eng. Civil">Eng. Civil</option>
                <option value="Eng. Electrica">Eng. Electrica</option>
                <option value="Eng. Electronica">Eng. Electronica</option>
                <option value="Eng. Informatica">Eng. Informatica</option>
                <option value="Eng. Mecanica">Eng. Mecanica</option>
                <option value="Eng. Quimica">Eng. Quimica</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nivel">Nível: </label>

        <div class="col-sm-9">

            <select class="form-control" id="nivel" name="nivel" style="display:none;">
                <option selected="selected">Escolha o nivel</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <input class="form-control" id="nivel" name="nivel1" readonly value="{{ $est->nivel}}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="button" class="btn btn-success" name="editarPessoais" id="editarPessoais" value="Editar"
                   onclick="editar()"/>
            <input type="hidden" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"
                   />
        </div>
    </div>

</form>

<script>
    function editar() {
        var apelido = document.getElementById('apelido');
        var outrosNomes = document.getElementById('outrosNomes');
        var dataNascimento = document.getElementById('dataNascimento');
        var numeroEstudante = document.getElementById('numeroEstudante');
        var curso = document.getElementsByName('curso');
        var nivel = document.getElementsByName('nivel');
        var curso1 = document.getElementsByName('curso1');
        var nivel1 = document.getElementsByName('nivel1');
        var btEditar = document.getElementById('editarPessoais');
        var btGravar = document.getElementById('gravarDpessoais');

        apelido.readOnly = false;
        outrosNomes.readOnly = false;
        dataNascimento.readOnly = false;
        numeroEstudante.readOnly = false;
        curso.style.display = 'inline';
        nivel.style.display = 'block';
        curso1.style.display = 'none';
        nivel1.style.display = 'none';
        btEditar.style.display='hidden';
        btGravar.style.display='block';
    }


</script>