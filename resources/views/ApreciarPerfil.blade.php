Dados Pessoais</br>
</br>

Nome completo      : {{$estudante->estudante->outrosNomes . ' ' . $estudante->estudante->apelido}}</br>
Data de nascimento : {{$estudante->estudante->dataNascimento}}</br>
Curso              : {{$estudante->estudante->curso}}</br>
Nivel              : {{$estudante->estudante->$estudante->nivel}}
Número de estudante: {{$estudante->estudante->nrEstudante}}


Endereco</br>
</br>

Pais :{{$estudante->endereco->pais}}</br>
Provincia :{{$estudante->endereco->provincia}}</br>
Distrito :{{$estudante->endereco->distrito}}</br>
Bairro :{{$estudante->endereco->bairro}}</br>
Avenida :{{$estudante->endereco->avenida}}</br>
Rua :{{$estudante->endereco->rua}}</br>
Quarteirao :{{$estudante->endereco->quarteirao}}</br>
Numero de casa :{{$estudante->endereco->nrDeCasa}}</br>

Contacto</br>
 Telefone:{{$estudante->contacto->telefone}}</br>
 Email:{{$estudante->contacto->email}}</br>

@if(count($estudante->curriculo->Idioma))
Idiomas </br>
@foreach($estudante->curriculo->Idioma as i)
Lingua:{{$estudante->curriculo->Idioma->lingua}}</br>
Dominio de Escrita :{{$i->dominioEsc}}
Dominio da Fala    :{{$i->dominioFala}}
Dominio de Leitura :{{$i->Idioma->dominioLei}}
</br>
@endforeach
@endif


@if(count($estudante->curriculo->Idioma))
Habilitações Literárias </br>
@foreach($estudante)
Lingua:{{$estudante->curriculo->Idioma->lingua}}</br>
Dominio de Escrita :{{$estudante->curriculo->Idioma->dominioEsc}}
Dominio da Fala    :{{$estudante->curriculo->Idioma->dominioFala}}
Dominio de Leitura :{{$estudante->curriculo->Idioma->dominioLei}}
</br>
@endforeach
@endif
<!-- {{$estudante->estudante->outrosNomes}} -->
