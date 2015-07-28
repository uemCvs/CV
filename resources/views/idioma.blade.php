<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('idioma')}}">
    <h4 class="text-center">Idiomas</h4>


    <div class="form-group">
        <label class="control-label col-sm-3" for="lingua">Nome do Idioma</label>

        <div class="col-sm-9">
            <select class="form-control" name="lingua" id="lingua" onclick="showIdioma()">
                <option value="Portugues" >Português</option>
                <option value="Ingles">Inglês</option>
                <option value="Changana">Changana</option>
                <option value="Frances">Francês</option>
                <option value="Espanhol">Espanhol</option>
                <option value="Outros">Outros</option>
            </select>
            <input class="form-control" type="hidden" name="outroIdioma" id="outroIdioma"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="dominioEsc">Dominio de Escrito</label>

        <div class="col-sm-9">
            <select class="form-control" name="dominioEsc" id="dominioEsc">
                <option value="Excelente" >Excelente</option>
                <option value="Bom">Bom</option>
                <option value="Razoavel">Razoável</option>
                <option value="Mau">Mau</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="dominioFala">Dominio de Fala</label>

        <div class="col-sm-9">
            <select class="form-control" name="dominioFala" id="dominioFala">
                <option value="Excelente" >Excelente</option>
                <option value="Bom">Bom</option>
                <option value="Razoavel">Razoável</option>
                <option value="Mau">Mau</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="dominioLei">Dominio de leitura</label>

        <div class="col-sm-9">
            <select class="form-control" name="dominioLei" id="dominioLei">
                <option value="Excelente" >Excelente</option>
                <option value="Bom">Bom</option>
                <option value="Razoavel">Razoável</option>
                <option value="Mau">Mau</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-success" name="gravarIdioma" id="gravarIdioma" value="Gravar"/>
        </div>
    </div>
    <script>
        function showIdioma(){

            var lingua= document.getElementById("lingua");
            var outroIdioma=document.getElementById("outroIdioma");

            if(lingua.value=='Outros'){
               outroIdioma.setAttribute('type','text');
            }else {
                outroIdioma.setAttribute('type','hidden');
            }

        }
    </script>
</form>
