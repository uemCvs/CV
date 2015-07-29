<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/jquery.js')}}"></script>

  <form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('enderecos')}}">

      <h4 class="text-center">Endereço</h4>


      <div class="form-group">
          <label class="control-label col-sm-3" id="pais1" for="pais">Pais</label>
          <div class="col-sm-9">
              <select class="form-control" name='pais' id="pais" onclick="showPais()">
                  <option>Mocambique</option>
                  <option >Outros</option>

              </select>
              <input class="form-control" type="hidden" name="outros" id="outros"  placeholder="Introduza o seu pais" />
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-3" id="provincia1" for="provincia">Provincia</label>
          <div class="col-sm-9">
              <select class="form-control" name="provincia" id="provincia">
                  <option>Escolha a provincia</option>
                  <option>Maputo-Cidade</option>
                  <option >Matola</option>
                  <option >Gaza</option>
                  <option >Inhambane</option>
                  <option >Sofala</option>
                  <option >Manica</option>
                  <option >Zambezia</option>
                  <option >Tete</option>
                  <option >Nampula</option>
                  <option >Niassa</option>
                  <option >Cabo-Delgado</option>

              </select>
              <input class="form-control" type="hidden" name="outrasP" id="outrasP"  placeholder="Introduza a provincia" />
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-3" for="distrito">Distrito</label>
          <div class="col-sm-9">
              <input class="form-control" type="text" name="distrito" id="distrito" placeholder="Introduza o distrito" required="required" />
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-3" for="bairro">Bairro</label>
          <div class="col-sm-9">
              <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Introduza o bairro" required="required" />
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-3" for="rua">Rua</label>
          <div class="col-sm-9">
              <input class="form-control" type="text" name="rua" id="rua" placeholder="Introduza a rua"  />
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-3" for="avenida">Avenida</label>
          <div class="col-sm-9">
              <input class="form-control" type="text" name="avenida" id="avenida"  placeholder="Introduza a avenida"  />
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-3" for="nrDeCasa">Número de casa</label>
          <div class="col-sm-9">
              <input class="form-control" type="number" name="nrDeCasa" id="nrDeCasa" placeholder="Introduza o numero da casa" />
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-3" for="quarteirao">Quarteirão</label>
          <div class="col-sm-9">
              <input class="form-control" type="number" name="quarteirao" id="quarteirao" placeholder="Introduza o numero do quarteirao" />
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
              <input type="submit" class="btn btn-success" name="gravarEndereco" id="gravarEndereco" value="Gravar"/>
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
</script>
  </form>