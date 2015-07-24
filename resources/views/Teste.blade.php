<ul>
@foreach($habilitacoes as $h)
  <li>
    <a href="{{ route('editar_habilitacao', ['id' => $h->id]) }}">{{ $h->instituicao }}</a>     
  </li>
@endforeach
</ul>
