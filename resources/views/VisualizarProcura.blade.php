@if(count($estudantes) != 0)
  <ul>
@foreach($estudantes as $estudante)
		<li><a href="{{url('/apreciarPerfil/'.$estudante->id)}}">{{$estudante->outrosNomes . ' ' . $estudante->apelido}}</a></li>
@endforeach
  </ul>
@else
  <p>404 Nenhum estudante encontrado</p>
@endif
