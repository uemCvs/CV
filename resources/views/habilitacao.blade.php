@if($h)
  <form id="form1" name="form1" method="post" action="{{ route('put_h', ['id' => $h->id]) }}">
    <input type="hidden" name="_method" value="PUT" />
    <p>&nbsp;</p>
    <p>
      <label for="nivel">Nível</label>
      <input type="text" name="nivel" id="nivel" value="{{ $h->nivel }}"/>
    </p>
    <p>
      <label for="anoConclusao">Ano de Conclusão</label>
      <input type="text" name="anoConclusao" id="anoConclusao" value="{{ $h->anoDeConclusao}}" />
    </p>
    <p>
      <label for="curso">Curso</label>
      <input type="text" name="curso" id="curso" value="{{ $h->curso }}"/>
    </p>
    <p>
      <label for="sisEnsino">Sistema de Ensino</label>
      <input type="text" name="sisEnsino" id="sisEnsino" value="{{ $h->sisEnsino }}"/>
    </p>
    <p>
      <label for="instituicao">Instituição</label>
      <input type="text" name="instituicao" id="instituicao" value="{{ $h->instituicao }}"/>
    </p>
    <p>
      <input type="submit" name="gravarHabLiter" id="gravarHabLiter" value="Gravar" />
    </p>
  </form>
@else
  <p>404 nao existe</p>
@endif
