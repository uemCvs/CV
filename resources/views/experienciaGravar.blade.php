<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('experiencias')}}">

    <h4 class="text-center">Experiencia Profissional</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nomeInstituicao">Nome da Instituição</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nomeInstituicao" id="nomeInstituicao" required="required" placeholder="Introduza o nome da instituicao" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="cargo">Cargo</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="cargo" id="cargo" required="required" placeholder="Introduza o nome da instituicao" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="anoIngresso">Ano de Ingresso</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="anoIngresso" id="anoIngresso" placeholder="0000" required="required"  maxlength="4" min="1920" max="{{date("Y")}}" />

        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="anoConclusao">Ano de Conclusão</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="anoConclusao" id="anoConclusao" placeholder="0000" required="required" maxlength="4" min="1920" onclick="changeMin()" max="{{date("Y")}}" />

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-success" name="gravalExpProf" id="gravalExpProf" value="Gravar"  />
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
    </script>
</form>
