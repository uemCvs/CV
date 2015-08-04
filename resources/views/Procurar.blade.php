<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('procurar')}}">
    <input type="hidden" id="registoEstudante" name="registoEstudante" value="1" />
    <h4 class="text-center">Procurar Estudante</h4>



    <div class="form-group">
        <label class="control-label col-sm-3" id="curso" for="curso">Curso:</label>
        <div class="col-sm-9">
        </br>
              <input type="checkbox" name="curso" value="Eng. Ambiente">Eng. Ambiente
              <input type="checkbox" name="curso" value="Eng. Civil">Eng. Civil</br>
              <input type="checkbox" name="curso" value="Eng. Electrica">Eng. Electrica
              <input type="checkbox" name="curso" value="Eng. Electronica">Eng. Electronica<br>
              <input type="checkbox" name="curso" value="Eng. Informatica">Eng. Informatica
              <input type="checkbox" name="curso" value="Eng. Mecanica">Eng. Mecanica<br>
              <input type="checkbox" name="curso" value="Eng. Quimica">Eng. Quimica
              <input type="checkbox" name="curso" value="Gestão Industrial">Gestão Industrial

</div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="disponibilidade" for="disponibilidade">Disponibilidade :</label>
        <div class="col-sm-9">
        </br>
              <input type="checkbox" name="disponibilidade" value="parcial">Parcial
              <input type="checkbox" name="disponibilidade" value="inteiro">Inteiro</br>
            </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="nivel" for="curso">Curso:</label>
        <div class="col-sm-9">
        </br>
              <input type="checkbox" name="nivel" value="1">1
              <input type="checkbox" name="nivel" value="2">2
              <input type="checkbox" name="nivel" value="3">3
              <input type="checkbox" name="nivel" value="4">4
              <input type="checkbox" name="nivel" value="5">5
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="nivel" for="idioma">Idioma:</label>
        <div class="col-sm-9">
        </br>
              <input type="checkbox" name="idioma" value="Inglês">Inglês
              <input type="checkbox" name="idioma" value="Português">Português
              <input type="checkbox" name="idioma" value="Francês">Francês
              <input type="checkbox" name="idioma" value="Espanhol">Espanhol

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"/>
        </div>
    </div>


</form>
