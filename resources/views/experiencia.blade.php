@if($exp)
<form id="form1" name="form1" method="post" action="{{ route('put_exp', ['id' => $exp->id]) }}">
  <input type="hidden" name="_method" value="PUT" />
  <p>Experiencia Profissional</p>
  <p>
    <label>Nome da Instituição
      <input type="text" name="nomeInstituicao" id="nomeInstituicao" value="{{ $exp->instituicao }}"/>
    </label>
  </p>
  <p>
    <label>Cargo
      <input type="text" name="cargo" id="cargo" value="{{ $exp->cargo }}" />
    </label>
  </p>
  <p>
    <label>Ano de Ingresso
      <input type="text" name="anoIngresso" id="anoIngresso"  value="{{ $exp->anoIngresso }}"/>
    </label>
  </p>
  <p>
    <label>Ano de Conclusão
      <input type="text" name="anoConclusao" id="anoConclusao" value="{{ $exp->anoTermino }}" />
    </label>
  </p>
  <p>
    <input type="submit" name="adicionarExperienciaProf" id="adicionarExperienciaProf" value="+" />
    <input type="submit" name="gravalExpProf" id="gravalExpProf" value="Gravar" />
  </p>
</form>
@else
  <p>404 nao existe</p>
@endif
