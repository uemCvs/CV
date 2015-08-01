@if($est)
<form id="form1" name="form1" method="post" action="{{ route('put_est', ['id' => $est->id]) }}">
  <input type="hidden" name="_method" value="PUT" />
          <p><strong>Dados Pessoais</strong></p>
      <label for="apelido">Apelido</label>
    <input type="text" name="apelido" id="apelido" value="{{ $est->apelido }}" />
  </p>
  <p>
    <label for="outrosNomes">Outros Nomes</label>
    <input type="text" name="outrosNomes" id="outrosNomes" value="{{ $est->outrosNomes }}" > </p>
  <p>
    <label for="dataNascimento">Data de Nascimento</label>
    <input type="text" name="dataNascimento" id="dataNascimento" value="{{ $est->dataNascimento }}"/>
  </p>
  <p>
    <label for="numeroEstudante">Número de Estudante</label>
    <input type="text" name="numeroEstudante" id="numeroEstudante" value="{{ $est->nrEstudante }}" />
  </p>
  <p>
    <label for="curso">Curso</label>
    <input type="text" name="curso" id="curso" value="{{ $est->curso }}"/>
  </p>
  <p>
    <label for="nivel">Nível</label>
    <input type="text" name="nivel" id="nivel" value="{{ $est->nivel }}"/>
  </p>
  <p>
    <input type="submit" name="gravarDpessoais" id="gravarDpessoais" value="Gravar" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
@else
  <p>404 nao existe</p>
@endif
