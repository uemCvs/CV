<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

<form id="form1" name="form1" method="post" action="{{ route('put_exp', ['id' => $exp->id]) }}">
    <input type="hidden" name="_method" value="PUT" />

    <h4 class="text-center">Experiencia Profissional</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nomeInstituicao">Nome da Instituição</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nomeInstituicao" id="nomeInstituicao" readonly required="required" value="{{ $exp->instituicao }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="cargo">Cargo</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="cargo" id="cargo" readonly required="required" value="{{ $exp->cargo }}"  />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="anoIngresso">Ano de Ingresso</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="anoIngresso" id="anoIngresso" readonly value="{{ $exp->anoIngresso }}" required="required"  maxlength="4" min="1920" max="{{date("Y")}}" />

        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="anoConclusao">Ano de Conclusão</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="anoConclusao" id="anoConclusao" readonly value="{{ $exp->anoTermino }}" required="required" maxlength="4" min="1920" onclick="changeMin()" max="{{date("Y")}}" />

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
        function changeMin() {

            var anoIngresso = document.getElementById("anoIngresso");
            var ano = anoIngresso.value;
//alert(ano);
            var anoConclusao = document.getElementById("anoConclusao");
            anoConclusao.setAttribute('min','2014');
            //  anoConclusao.readOnly=true;
            anoConclusao.min = 2014;
            /*var ano2=anoConclusao.value;
             // alert(ano2);
             //alert(ano);
             if(ano2<ano){
             */
            /*alert("Ano de conclusao deve ser maior ou igual a nao de ingresso");*/
            /*

             $(document).ready(function(){
             $('[data-toggle="popover"]').popover();
             }); }
             }*/
        }



        function editar(){
            var btEditar = document.getElementById('editarPessoais');
            var btGravar = document.getElementById('gravarDpessoais');
            btEditar.style.display='none';
            btGravar.style.display='block';
            var nome=document.getElementById('nomeInstituicao');
            var anoIngresso=document.getElementById('anoIngresso');
            var cargo=document.getElementById('cargo');
            var anoConclusao=document.getElementById('anoConclusao');
            cargo.readOnly=false;

            anoConclusao.readOnly=false;
            anoIngresso.readOnly=false;
            nome.readOnly=false;
        }
    </script>
</form>



