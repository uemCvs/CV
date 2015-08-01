

<a href="{{ route('editar_idioma', ['id' => $idioma->id]) }}"><button>Editar</button></a>
<a href="{{ route('gravar_idioma')}}"><button>Adicionar</button></a>
    <p>
        Idioma : {{ $idioma->lingua }}
    </p>
    <p>
        Domnio de escrita :{{ $idioma->dominioEsc}}
    </p>
    <p>
        Dominio de fala: {{ $idioma->dominioFala }}
    </p>
    <p>
        Dominio de Leitura :{{ $idioma->dominioLei }}
    </p>


    </p>
