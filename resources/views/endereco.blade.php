<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>


<form id="form1" name="form1" method="post" action="{{ route('put_end', ['id' => $end->id]) }}">
    <input type="hidden" name="_method" value="PUT">

    <h4 class="text-center">Endereço</h4>
    @if(session('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>

    @endif

    <div class="form-group">
        <label class="control-label col-sm-3" id="pais1" for="pais">Pais</label>
        <div class="col-sm-9">
            <select class="form-control" name='pais' id="pais" onclick="showPais()" style="display: none">
                <option value="Mocambique">Mocambique</option>
                <option >Outros</option>

            </select>
            <input class="form-control" type="hidden" name="pais" id="outros"  placeholder="Introduza o seu pais" />
            <input class="form-control"  name="outroPais" id="outroPais"  value="{{ $end->pais }}" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" id="provincia1" for="provincia">Provincia</label>
        <div class="col-sm-9">
            <select class="form-control" name="provincia" id="provincia" style="display: none">

                <option value="Maputo-Cidade">Maputo-Cidade</option>
                <option value="Matola">Matola</option>
                <option value="Gaza">Gaza</option>
                <option value="Inhambane">Inhambane</option>
                <option value="Sofala">Sofala</option>
                <option value="Manica">Manica</option>
                <option value="Zambezia">Zambezia</option>
                <option value="Tete">Tete</option>
                <option value="Nampula">Nampula</option>
                <option value="Niassa">Niassa</option>
                <option value="Cabo-Delgado">Cabo-Delgado</option>
            </select>
            <input class="form-control" type="hidden" name="provincia" id="outrasP"  placeholder="Introduza a provincia" />
            <input class="form-control"  name="outrasProvincias" id="outrasProvincias"  value="{{ $end->provincia }}" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="distrito">Distrito</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="distrito" id="distrito" readonly value="{{ $end->distrito }}" required="required" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="bairro">Bairro</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="bairro" id="bairro" value="{{ $end->bairro }}" readonly required="required" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="rua">Rua</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="rua" id="rua" value="{{ $end->rua }}"  readonly/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="avenida">Avenida</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="avenida" id="avenida"  value="{{ $end->avenida }}" readonly />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="nrDeCasa">Número de casa</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="nrDeCasa" id="nrDeCasa" value="{{ $end->nrDeCasa }}" readonly/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="quarteirao">Quarteirão</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="quarteirao" id="quarteirao" value="{{ $end->quarteirao }}"  readonly/>
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


        function showPais(){
            // alert("cheguei")
            var pais= document.getElementById("pais");
            var provincias=document.getElementById("provincia");
            var outrasP=document.getElementById("outrasP");
            var outros=document.getElementById("outros");
            if(pais.value=='Outros'){
                outros.setAttribute('type','text');
                provincias.style.display="none"; // torna invisivel
                outrasP.setAttribute("type","text");
            }else {
                outros.setAttribute('type','hidden');
                provincias.style.display="inline";//torna visivel
                outrasP.setAttribute("type","hidden");
            }

        }

        function editar(){
            var btEditar = document.getElementById('editarPessoais');
            var btGravar = document.getElementById('gravarDpessoais');
            var distrito=document.getElementById('distrito');
            var rua=document.getElementById('rua');
            var avenida=document.getElementById('avenida');
            var quarteirao=document.getElementById('quarteirao');
            var numero=document.getElementById('nrDeCasa');
            var bairro=document.getElementById('bairro');
            var provincia=document.getElementById('provincia');
            var provincia1=document.getElementById('outrasProvincias');
            var pais=document.getElementById('pais');
            var pais1=document.getElementById('outroPais');
            distrito.readOnly=false;
            rua.readOnly=false;
            avenida.readOnly=false;
            quarteirao.readOnly=false;
            numero.readOnly=false;
            bairro.readOnly=false;

        btEditar.style.display='none';
            btGravar.style.display='block';
            pais.style.display='block';
            pais1.style.display='none';
            provincia.style.display='block'
            provincia1.style.display='none';




        }
    </script>
</form>





