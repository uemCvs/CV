<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>


<form class="form-horizontal" id="form1" name="form1" method="post" action="{{ route('put_cont', ['id' => $cont->id]) }}">
  <input type="hidden" name="_method" value="PUT" />
    <h4 class="text-center">Contacto</h4>

        @foreach ($cont->telefone as $t)
        <div class="form-group">
            <label class="control-label col-sm-3" for="telefone">Telefone</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="telefone" id="telefone" readonly value="{{ $t->telefone }}"/>
            </div>
        </div>
      @endforeach

      @foreach ($cont->email as $e)
      <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email</label>
          <div class="col-sm-9">

              <input class="form-control" type="text" name="email[]" id="email" readonly value="{{ $e->email }}"  />
</div>

          </div>
    @endforeach

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="button" class="btn btn-success" name="editarPessoais" id="editarPessoais" value="Editar"
                   onclick="editar()"/>
            <input style="display: none" type="submit" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"
                    />
        </div>
    </div>

</form>

<script>

    var btEditar = document.getElementById('editarPessoais');
    var btGravar = document.getElementById('gravarDpessoais');
    var telefone = document.getElementById('telefone');
    var email = document.getElementById('email');
    function editar() {

        btEditar.style.display = 'none';
        btGravar.style.display = 'block';
        telefone.readOnly=false;
        email.readOnly=false;
    }

    </script>