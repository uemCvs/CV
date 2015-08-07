<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

  <form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('enderecos')}}">

      <h4 class="text-center">Endereço</h4>
      @if(session('message'))
          <div class="alert alert-success">
              {{Session::get('message')}}
          </div>

      @endif

      <div class="form-group">
          <label class="control-label col-sm-3"  for="pais">Pais</label>
          <div class="col-sm-9">
              <select class="form-control" name='pais' id="pais" >
                  <option value="Mocambique">Mocambique</option>
                  <option value="Outros">Outros</option>

              </select>
             {{-- <input class="form-control" type="hidden" name="pais" id="outros"  placeholder="Introduza o seu pais" />--}}
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-3"  for="provincia">Provincia</label>
          <div class="col-sm-9">
              <select class="form-control" name="provincia" id="provincia">

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
             {{-- <input class="form-control" type="hidden" name="provincia" id="outrasP"  placeholder="Introduza a provincia" />--}}
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
        //var out=outros.value;
        if(pais.value=='Outros'){
            outros.setAttribute('type','text');
            provincias.style.display="none"; // torna invisivel
            outrasP.setAttribute("type","text");
            
        }else {
            outros.setAttribute('type','hidden');
            provincias.style.display="block";//torna visivel
            outrasP.setAttribute("type","hidden");
        }

    }
</script>
  </form>
