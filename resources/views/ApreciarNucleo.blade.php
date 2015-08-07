@extends("layouts.main")

@section("body")
<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>


<div class="container">
    <h4 >Dados Pessoais</h4>

    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Nome completo :</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->estudante->outrosNomes}}{{ $resultado->estudante->apelido}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Data de nascimento :</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->estudante->dataNascimeto}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Curso : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->estudante->curso}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Nivel : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->estudante->nivel}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Número de estudante : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->estudante->nrEstudante}}" />
        </div>
    </div>
    ________________________________________________________________________________________________________________

    <h4 >Endereço</h4>

    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >País :</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->endereco->pais}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Província:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->endereco->provincia}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Distrito :</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->endereco->distrito}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Bairro : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->endereco->bairro}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Avenida : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->endereco->avenida}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Rua : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->endereco->rua}}" />
        </div>
    </div>

    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Quarteirão : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->endereco->quarteirao}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Número de casa : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$resultado->endereco->nrDeCasa}}" />
        </div>
    </div>

    ________________________________________________________________________________________________________________

    @if(count($resultado->estudante->curriculo->Idioma) != null)
    <h4 >Idiomas :</h4>
    @foreach($resultado->estudante->curriculo->Idioma as $i)
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Lingua : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$i->lingua}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Dominio de Escrita : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$i->dominioEsc}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Dominio de Fala: </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$i->dominioFala}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Dominio de Leitura: </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="tempoFinal" readonly id="tempoFinal" value="{{$i->dominioLei}}" />
        </div>
    </div>
    - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
    @endif
    _________________________________________________________________________________________________________________________________
    @if(count($resultado->estudante->curriculo->habilitacao) != null)
    <h4 >Habilitações Literárias :</h4>
    @foreach($resultado->estudante->curriculo->habilitacao as $h)
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Nivel : </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$h->nivel}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Ano de Conclusão : </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$h->anoDeConclusao}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Instituição: </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$h->instituicao}}" />
        </div>
    </div>
    - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
    @endif
    ________________________________________________________________________________________________________________
    @if(count($resultado->estudante->curriculo->OutraQualificacao) != null)
    <h4 >Outras qualificações :</h4>
    @foreach($resultado->estudante->curriculo->OutraQualificacao as $o)
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Curso : </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$o->nomeCurso}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Nome de Instituição : </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$o->nomeInstituicao}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Ano de Conclusão: </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$o->anoConclusao}}" />
        </div>
    </div>
    - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
    @endif
    ________________________________________________________________________________________________________________
    @if(count($resultado->estudante->curriculo->experiencia) != null)
    <h4 >Experiência Profissonal :</h4>
    @foreach($resultado->estudante->curriculo->experiencia as $exp )
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Instituição: </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$exp->instituicao}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Cargo: </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$exp->cargo}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Ano de Ingresso: </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$exp->anoIngresso}}" />
        </div>
    </div>
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" > Ano de Conclusão:</label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$exp->anoTermino}}" />
        </div>
    </div>

    - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
    @endif
    ________________________________________________________________________________________________________________
    @if(count($resultado->estudante->curriculo->HabilitacaoIntelectual) != null)
    <h4 >Habilitacao Intelectual :</h4>
    @foreach($resultado->estudante->curriculo->HabilitacaoIntelectual as $hab )
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Habilitacoes Intelectuais: </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$hab->habilitacao}}" />
        </div>
    </div>
    - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
    @endif
    _________________________________________________________________________________________________________________
    @if(count($resultado->estudante->curriculo->referencia) != null)
    <h4 >Referencias :</h4>
    @foreach($resultado->estudante->curriculo->referencia as $r )
    <div class="form-group css">
        <label class="control-label col-sm-3" for="tempoFinal" >Referencias: </label>
        <div class="col-sm-9">
            <input class="form-control" readonly type="text" name="tempoFinal" id="tempoFinal" value="{{$r->referencia}}" />
        </div>
    </div>
    - - -  - -- - - - - -- -- - -- -- - - - - - - -- - - - -- - -- - - -- - - - -- - - -- - - -- - - - -- - -
    @endforeach
    @endif
</div>
@stop