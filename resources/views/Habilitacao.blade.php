<form id="form1" name="form1" method="post" action="{{url('habilitacoes')}}">
  <p>&nbsp;</p>
  <p>
    <label for="nivel">Nível</label>
    <input type="text" name="nivel" id="nivel" />
  </p>
  <p>
    <label for="anoConclusao">Ano de Conclusão</label>
    <input type="text" name="anoConclusao" id="anoConclusao" />
  </p>
  <p>
    <label for="curso">Curso</label>
    <input type="text" name="curso" id="curso" />
  </p>
  <p>
    <label for="sisEnsino">Sistema de Ensino</label>
    <input type="text" name="sisEnsino" id="sisEnsino" />
  </p>
  <p>
    <label for="instituicao">Instituição</label>
    <input type="text" name="instituicao" id="instituicao" />
  </p>
  <p>
    <input type="submit" name="adicionarHabLiter" id="adicionarHabLiter" value="+" />
    <input type="submit" name="gravarHabLiter" id="gravarHabLiter" value="Gravar" />
  </p>
</form>
