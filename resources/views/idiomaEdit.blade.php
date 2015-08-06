<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">

<script src="{{URL::asset('Start/js/bootstrap.js')}} " ></script>


<form id="form1" name="form1" method="post" action="{{route('put_idioma', ['id' => $idioma->id])}}">
    <input type="hidden" name="_method" value="PUT">

    <h4 class="text-center">Idiomas</h4>


    <div class="form-group">
        <label class="control-label col-sm-3" for="lingua">Nome do Idioma</label>

        <div class="col-sm-9">
            <select class="form-control" name="lingua" id="lingua" onclick="showIdioma()" disabled>
                <option >{{ $idioma->lingua}}</option>
                <option >Changana</option>
                <option>Inglês</option>
                <option>Português</option>
                <option>Francês</option>
                <option>Espanhol</option>
            </select>
            <input class="form-control" type="hidden" name="outroIdioma" id="outroIdioma"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="dominioEsc">Dominio de Escrito</label>

        <div class="col-sm-9">
            <select class="form-control" name="dominioEsc" id="dominioEsc" disabled>
                <option  >{{ $idioma->dominioEsc}}</option>
                <option  >Excelente</option>
                <option>Bom</option>
                <option>Razoável</option>
                <option>Mau</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="dominioFala">Dominio de Fala</label>

        <div class="col-sm-9">
            <select class="form-control" name="dominioFala" id="dominioFala" disabled>
                <option>{{$idioma->dominioFala}}</option>
                <option>Razoável</option>
                <option>Excelente</option>
                <option>Bom</option>
                <option>Mau</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="dominioLei">Dominio de leitura</label>

        <div class="col-sm-9">
            <select class="form-control" name="dominioLei" id="dominioLei" disabled>
                <option>{{ $idioma->dominioLei}}</option>
                <option>Razoável</option>
                <option>Excelente</option>
                <option>Bom</option>
                <option>Mau</option>
            </select>
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
    <script>
        function showIdioma(){

            var lingua= document.getElementById("lingua");
            var outroIdioma=document.getElementById("outroIdioma");

            if(lingua.value=='Outros'){
                outroIdioma.setAttribute('type','text');
            }else {
                outroIdioma.setAttribute('type','hidden');

            }}

            function editar(){

                var btEditar = document.getElementById('editarPessoais');
                var btGravar = document.getElementById('gravarDpessoais');

                btEditar.style.display='none';
                btGravar.style.display='block';
                var dominioEsc=document.getElementById('dominioEsc');
                var dominioLei=document.getElementById('dominioLei');
                var dominioFala=document.getElementById('dominioFala');
                var lingua=document.getElementById('lingua');
                dominioEsc.disabled=false;
                dominioFala.disabled=false;
                dominioLei.disabled=false;
                lingua.disabled=false;


        }
    </script>
</form>


