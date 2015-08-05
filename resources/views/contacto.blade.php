<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>


<form class="form-horizontal" id="form1" name="form1" method="post" action="{{ route('put_cont', ['id' => $cont->id]) }}">
  <input type="hidden" name="_method" value="PUT" />
    <h4 class="text-center">Contacto</h4>

        @foreach ($telefones as $telefone)
        <div class="form-group">
            <label class="control-label col-sm-3" for="telefone">Telefone</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Introduza o telefone" value="{{ $telefone->telefone }}"/>
            </div>
        </div>
      @endforeach

      @foreach ($emails as $email)
      <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email</label>
          <div class="col-sm-9">
              <input class="form-control" type="text" name="email" id="anoConclusao" placeholder="aaaaa@bbbbb.ccc" value="{{ $email->email }}"  />

          </div>
    @endforeach


            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <input type="submit" class="btn btn-success" name="gravarQualificacao" id="gravarQualificacaoo" value="Gravar"/>
                </div>
            </div>

</form>
