<!DOCTYPE html>
<html>
<head>
    <title>Curriculum Vitae</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/css">


</head>
<style type="text/css">
    body {
        font-family: sans-serif;


    }
    p, h2, {
        font-size: 2em;
        background: #eee;
        padding: 1em;
        text-align: center;

    }
    h4{

    }


    label {
        text-align: right;
        float: left;
        width: 15%;
    }

</style>

<body>



<div class="container">
    <h2>Curriculum Vitae</h2>

<h4 >Dados Pessoais</h4>

<div >
    <label class="text-justify" for="tempoFinal" >Nome completo :</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->estudante->outrosNomes}}&nbsp;{{ $resultado->estudante->apelido}}

    </div>

<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Data de nascimento :</label>{{--&nbsp;&nbsp;&nbsp;{{$resultado->estudante->dataNascimeto}}--}}
{{$resultado->estudante->dataNascimeto}}
</div>
<div class="form-group css">
    <label class="text-justify" for="tempoFinal" >Curso : </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->estudante->curso}}


</div>
<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Nivel : </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->estudante->nivel}}

</div>
<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Numero de estudante : </label>{{$resultado->estudante->nrEstudante}}

</div>
_____________________________________________________________________________________________________

<h4 >Endereco</h4>

<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Pais :</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->endereco->pais}}

</div>
<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Provincia:</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->endereco->provincia}}

</div>
<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Distrito :</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->endereco->distrito}}

</div>
<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Bairro  : </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->endereco->bairro}}

</div>
<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Avenida : </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->endereco->avenida}}

</div>
<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Rua : </label>
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$resultado->endereco->rua}}

</div>

<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Quarteirao : </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->endereco->quarteirao}}

</div>
<div class="form-group css">
    <label class="control-label col-sm-3" for="tempoFinal" >Numero de casa : </label>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$resultado->endereco->nrDeCasa}}

</div>



@if(count($resultado->estudante->curriculo->Idioma) != null)
        ________________________________________________________________________________________________________________
    <h4 >Idiomas :</h4>
    @foreach($resultado->estudante->curriculo->Idioma as $i)
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Lingua : </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$i->lingua}}

        </div>
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Dominio de Escrita : </label>
            &nbsp;&nbsp;{{$i->dominioEsc}}

        </div>
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Dominio de Fala: </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$i->dominioFala}}

        </div>
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Dominio de Leitura: </label>
            &nbsp;&nbsp; {{$i->dominioLei}}

        </div>
       - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->habilitacao) != null)
        ________________________________________________________________________________________________________________
    <h4 >Habilitacoes Literarias :</h4>
    @foreach($resultado->estudante->curriculo->habilitacao as $h)
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Nivel : </label>
            &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$h->nivel}}

        </div>
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Ano de Conclusao : </label>
       &nbsp; {{$h->anoDeConclusao}}

        </div>
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Instituicao: </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$h->instituicao}}

        </div>
    - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->OutraQualificacao) != null)
        ________________________________________________________________________________________________________________
    <h4 >Outras qualificacoes :</h4>
    @foreach($resultado->estudante->curriculo->OutraQualificacao as $o)
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Curso : </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$o->nomeCurso}}

        </div>
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Nome de Instituicao : </label>
            {{$o->nomeInstituicao}}

        </div>
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Ano de Conclusao: </label>
            &nbsp;&nbsp;{{$o->anoConclusao}}

        </div>
       - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->experiencia) != null)
        ________________________________________________________________________________________________________________
    <h4 >Experiencia Profissonal :</h4>
    @foreach($resultado->estudante->curriculo->experiencia as $exp )
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Instituicao: </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$exp->instituicao}}

        </div>
        <div class="form-group css">
            <label class="control-label col-sm-3" for="tempoFinal" >Cargo : </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$exp->cargo}}

        </div>
            <div class="form-group css">
                <label class="control-label col-sm-3" for="tempoFinal" >Ano de Ingresso: </label>
                &nbsp;&nbsp;  {{$exp->anoIngresso}}

            </div>
            <div class="form-group css">
                <label class="control-label col-sm-3" for="tempoFinal" > Ano de Conclusao:</label>
                &nbsp;{{$exp->anoTermino}}

            </div>

      - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
@endif

@if(count($resultado->estudante->curriculo->HabilitacaoIntelectual) != null)
        ________________________________________________________________________________________________________________
        <h4 >Habilitacao Intelectual :</h4>
    @foreach($resultado->estudante->curriculo->HabilitacaoIntelectual as $hab )
            <div class="form-group css">
                <label class="control-label col-sm-3" for="tempoFinal" >Habilitacoes Intelectuais: </label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$hab->habilitacao}}

            </div>
     - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
        @endforeach
@endif

@if(count($resultado->estudante->curriculo->referencia) != null)
        ________________________________________________________________________________________________________________
        <h4 >Referencias :</h4>
    @foreach($resultado->estudante->curriculo->referencia as $r )
            <div class="form-group css">
                <label class="control-label col-sm-3" for="tempoFinal" >Referencias: </label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$r->referencia}}

            </div>
       - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
        @endforeach
@endif
</div>



</body>
</html>