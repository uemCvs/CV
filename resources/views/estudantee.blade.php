<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

@if($est)




<h4 class="text-center">Dados Pessoais</h4>
<div class="form-group">
    <label class="control-label col-sm-3" for="apelido">Apelido:</label>
    <div class="col-sm-9">
        <input type="text" id="apelido" readonly class="form-control" value="{{ $est->apelido }}"/>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-3" for="outrosNomes" >Outros Nomes:</label>
    <div class="col-sm-9">
        <input class="form-control" type="text" name="outrosNomes" id="outrosNomes" placeholder="Introduza seu nome" required="required" readonly value="{{ $est->outrosNomes }}"/>
    </div>
</div>



      <p>
        Outros Nomes :{{ $est->outrosNomes }}
      </p>
      <p>
        Data de nascimento: {{ $est->dataNascimento }}
      </p>
      <p>
        Numero de Estudante :{{ $est->nrEstudante }}

      </p>
      <p>Curso : {{ $est->curso }}
      </p>
    </p>
    <p>Nível : {{ $est->nivel }}
    </p>
    @else
  <p>404 nao existe</p>


  <a href="{{ route('editar_estudante', ['id' => $est->id]) }}"><button class="btn btn-success">Editar</button></a>
@endif
