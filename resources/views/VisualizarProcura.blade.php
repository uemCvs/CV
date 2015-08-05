if($estudantes)

@foreach($estudantes as $estudante)
{{$estudante}}
@endforeach
@else
<p>404 Nenhum estudante encontrado</p>
@endif
