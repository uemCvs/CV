@if($cont)
<a href="{{ route('editar_contacto', ['id' => $cont->id]) }}"><button>Editar</button></a>
<p>Contacto</p>

@foreach ($telefones as $telefone)
<p>
Telefone : {{$telefone->telefone}}
</p>
@endforeach

@foreach ($emails as $email)
<p>
Email : {{$email->email}}
</p>
@endforeach

    @else
  <p>404 nao existe</p>
@endif
