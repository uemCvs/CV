

<a href="{{ route('editar_disponibilidade', ['id' => $disp->id]) }}"><button>Editar</button></a>
<p>
    Disponibilidade : {{ $disp->disp }}
</p>
<p>
    Hora final :{{ $disp->tempoInicio}}
</p>
<p>
    Hora inicial: {{ $disp->tempoFim }}
</p>
<p>
    Descricao :{{ $disp->descricao }}
</p>


</p>
