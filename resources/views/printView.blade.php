<!DOCTYPE html>
<html>
<head>
    <title>Example</title>
</head>
<body>
<h1><?php echo $param ?></h1>


Dados Pessoais: <br>

Nome completo      : {{$resultado->estudante->outrosNomes}}{{ $resultado->estudante->apelido}}<br>
Data de nascimento : {{$resultado->estudante->dataNascimento}}<br>
Curso              : {{$resultado->estudante->curso}}<br>
Nivel              : {{$resultado->estudante->nivel}}<br>
Número de estudante: {{$resultado->estudante->nrEstudante}}<br><br>

Endereco<br>


Pais :{{$resultado->endereco->pais}}<br>
Provincia :{{$resultado->endereco->provincia}}<br>
Distrito :{{$resultado->endereco->distrito}}<br>
Bairro :{{$resultado->endereco->bairro}}<br>
Avenida :{{$resultado->endereco->avenida}}<br>
Rua :{{$resultado->endereco->rua}}<br>
Quarteirao :{{$resultado->endereco->quarteirao}}<br>
Numero de casa :{{$resultado->endereco->nrDeCasa}}<br><


@if(count($resultado->estudante->curriculo->Idioma) != null)
    Idiomas:<br>
    @foreach($resultado->estudante->curriculo->Idioma as $i)
        Lingua : {{$i->lingua}}<br>
        Dominio de Escrita :{{$i->dominioEsc}}<br>
        Dominio de Leitura :{{$i->dominioFala}}<br>
        Dominio de Leitura :{{$i->dominioLei}}<br>
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->habilitacao) != null)
    Habilitacoes Literarias:<br>
    @foreach($resultado->estudante->curriculo->habilitacao as $h)
        Nivel : {{$h->nivel}}<br>
        Ano de Conclusao :{{$h->anoDeConclusao}}<br>
        Instituicao:{{$h->instituicao}}<br>
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->OutraQualificacao) != null)
    Outras Qualificações:<br>
    @foreach($resultado->estudante->curriculo->OutraQualificacao as $o)
        Curso : {{$o->nomeCurso}}<br>
        Nome da Instituição :{{$o->nomeInstituicao}}<br>
        Ano de Conclusão :{{$o->anoConclusao}}<br>
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->experiencia) != null)
    Experiêcia Profissional <br>
    @foreach($resultado->estudante->curriculo->experiencia as $exp )
        Instittuicao:{{$exp->instituicao}}<br>
        Cargo:{{$exp->cargo}}<br>
        Ano de Ingresso:{{$exp->anoIngresso}}<br>
        Ano de Conclusão:{{$exp->anoTermino}}<br>
        <
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->HabilitacaoIntelectual) != null)
    HabilitacaoIntelectual<br>
    @foreach($resultado->estudante->curriculo->HabilitacaoIntelectual as $hab )
        Habilitação:{{$hab->habilitacao}}<br>
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->referencia) != null)
    Referências <br>
    @foreach($resultado->estudante->curriculo->referencia as $r )
        Referencia:{{$r->referencia}}<br>
        <br>
    @endforeach
@endif



</body>
</html>