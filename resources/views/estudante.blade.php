<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

<div onload="inicio()">
<form id="form1" name="form1" method="post" action="{{ route('put_est', ['id' => $est->id]) }}">
    <h4 class="text-center">Dados Pessoais</h4>
    @if(session('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>

    @endif
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
        <label class="control-label col-sm-3"  for="curso">Curso:</label>

        <div class="col-sm-9">

            <select class="form-control" id="curso" name="curso" style="display: none">
                <option selected="selected" value="{{ $est->curso}}">{{ $est->curso}}</option>
                <option value="Eng. Ambiente">Eng. Ambiente</option>
                <option value="Eng. Civil">Eng. Civil</option>
                <option value="Eng. Electrica">Eng. Electrica</option>
                <option value="Eng. Electronica">Eng. Electronica</option>
                <option value="Eng. Informatica">Eng. Informatica</option>
                <option value="Eng. Mecanica">Eng. Mecanica</option>
                <option value="Eng. Quimica">Eng. Quimica</option>
            </select>
            <input class="form-control" id="curso1" name="curso1" readonly value="{{ $est->curso}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nivel">Nível: </label>

        <div class="col-sm-9">

            <select class="form-control" id="nivel" name="nivel" style="display: none">
                <option selected="selected" value="{{ $est->nivel}}">{{ $est->nivel}}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <input class="form-control" id="nivel1" name="nivel1" readonly value="{{ $est->nivel}}">
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
</div>
<script>
    var btEditar = document.getElementById('editarPessoais');
    var btGravar = document.getElementById('gravarDpessoais');
    var apelido = document.getElementById('apelido');
    var outrosNomes = document.getElementById('outrosNomes');
    var dataNascimento = document.getElementById('dataNascimento');
    var numeroEstudante = document.getElementById('numeroEstudante');
    var curso = document.getElementById('curso');
    var nivel = document.getElementById('nivel');
    var curso1 = document.getElementById('curso1');
    var nivel1 = document.getElementById('nivel1');

    function inicio(){
       btGravar.style.display='none';
        curso.style.display='none';
        nivel.style.display='none';
    }

    function editar() {



        apelido.readOnly = false;
        outrosNomes.readOnly = false;
        dataNascimento.readOnly = false;
        numeroEstudante.readOnly = false;
        curso.style.display = 'block';
        nivel.style.display = 'block';
        curso1.style.display = 'none';
        nivel1.style.display = 'none';
        btEditar.style.display='none';
        btGravar.style.display='block';
    }


</script>

