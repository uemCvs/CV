<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>






<p>
  Apelido :{{ $est->apelido }}
</p>
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

    <p>Nível : {{ $est->nivel }}
    </p>




  <a href="{{ route('editar_estudante', ['id' => $est->id]) }}"><button class="btn btn-success">Editar</button></a>


