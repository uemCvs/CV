<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('estudantes')}}">
    <input type="hidden" id="registoEstudante" name="registoEstudante" value="1" />
    <h4 class="text-center">Dados Pessoais</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="apelido">Apelido</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="apelido" id="apelido" required="required" placeholder="Introduza seu apelido" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="outrosNomes" >Outros Nomes</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="outrosNomes" id="outrosNomes" placeholder="Introduza seu nome" required="required" />
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-sm-3" for="dataNascimento">Data de nascimento</label>
        <div class="col-sm-9">
            <input class="form-control" type="date" name="dataNascimento" id="dataNascimento"  required="required" min="1930-01-01" max="{{date('Y-m-d')}}" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="numeroEstudante">Número de Estudante</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="numeroEstudante"  id="numeroEstudante" placeholder="Introduza o numero de estudante"  required="required"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="curso" for="curso">Curso</label>
        <div class="col-sm-9">
            <select class="form-control" id="curso" name="curso">
                <option value="Eng. Ambiente">Eng. Ambiente</option>
                <option value="Eng. Civil">Eng. Civil</option>
                <option value="Eng. Electrica">Eng. Electrica</option>
                <option value="Eng. Electronica">Eng. Electronica</option>
                <option value="Eng. Informatica">Eng. Informatica</option>
                <option value="Eng. Mecanica">Eng. Mecanica</option>
                <option value="Eng. Quimica">Eng. Quimica</option>
                <option value="Gestão Industrial">Gestão Industrial</option>
            </select>
</div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nivel">Nível </label>
        <div class="col-sm-9">
        <select class="form-control" id="nivel" name="nivel">
            <option selected="selected">Escolha o nivel</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>

        </select>
</div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"/>
        </div>
    </div>


</form>
<script>
    $("gravarDpessoais").click(function(){
        $.post("demo_test_post.asp",
                {
                    name: "Donald Duck",
                    city: "Duckburg"
                },
                function(data, status){
                    alert("Data: " + data + "\nStatus: " + status);
                });
    });

</script>
