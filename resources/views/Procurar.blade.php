<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="" action="{{url('procurarEstudante/visualizarEstudante')}}">
    <input type="hidden" id="registoEstudante" name="registoEstudante" value="1" />
    <h4 class="text-center">Procurar Estudante</h4>



    <div class="form-group">
        <label class="control-label col-sm-3" id="curso" for="curso">Curso:</label>
        <div class="col-sm-9">
        </br>
              <input type="checkbox" name="cursos[]" value="Eng. Ambiente">Eng. Ambiente
              <input type="checkbox" name="cursos[]" value="Eng. Civil">Eng. Civil</br>
              <input type="checkbox" name="cursos[]" value="Eng. Electrica">Eng. Electrica
              <input type="checkbox" name="cursos[]" value="Eng. Electronica">Eng. Electronica<br>
              <input type="checkbox" name="cursos[]" value="Eng. Informatica">Eng. Informatica
              <input type="checkbox" name="cursos[]" value="Eng. Mecanica">Eng. Mecanica<br>
              <input type="checkbox" name="cursos[]" value="Eng. Quimica">Eng. Quimica
              <input type="checkbox" name="cursos[]" value="Gestão Industrial">Gestão Industrial

</div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="disponibilidade" for="disponibilidade">Disponibilidade :</label>
        <div class="col-sm-9">
        </br>
              <input type="checkbox" name="disponibilidades[]" value="parcial">Parcial
              <input type="checkbox" name="disponibilidades[]" value="inteiro">Inteiro</br>
            </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="nivel" for="curso">Curso:</label>
        <div class="col-sm-9">
        </br>
              <input type="checkbox" name="niveis[]" value="1">1
              <input type="checkbox" name="niveis[]" value="2">2
              <input type="checkbox" name="niveis[]" value="3">3
              <input type="checkbox" name="niveis[]" value="4">4
              <input type="checkbox" name="niveis[]" value="5">5
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="nivel" for="idioma">Idioma:</label>
        <div class="col-sm-9">
        </br>
              <input type="checkbox" name="idiomas[]" value="Inglês">Inglês
              <input type="checkbox" name="idiomas[]" value="Português">Português
              <input type="checkbox" name="idiomas[]" value="Francês">Francês
              <input type="checkbox" name="idiomas[]" value="Espanhol">Espanhol

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="procurar" id="procurar" value="procurar"/>
        </div>
    </div>


</form>
