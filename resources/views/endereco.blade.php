<form id="form1" name="form1" method="post" action="{{ route('put_end', ['id' => $end->id]) }}">

<p><strong>Endereço</strong></p>
      <label for="pais">Pais</label>
    <input type="text" name="pais" id="pais" value="{{ $end->pais }}"/>
  </p>
  <p>
    <label for="provincia">Provincia</label>
    <input type="text" name="provincia" id="provincia" value="{{ $end->provincia }}" />
  </p>
  <p>
    <label for="distrito">Distrito</label>
    <input type="text" name="distrito" id="distrito" value="{{ $end->distrito }}"/>
  </p>
  <p>
    <label for="bairro">Bairro</label>
    <input type="text" name="bairro" id="bairro" value="{{ $end->bairro }}" />
  </p>
  <p>
    <label for="rua">Rua</label>
    <input type="text" name="rua" id="rua" value="{{ $end->rua }}" />
  </p>
  <p>
    <label for="avenida">Avenida</label>
    <input type="text" name="avenida" id="avenida" value="{{ $end->avenida }}" />
  </p>
  <p>
    <label for="nrDeCasa">Número de casa</label>
    <input type="text" name="nrDeCasa" id="nrDeCasa" value="{{ $end->nrDeCasa }}"/>
  </p>
  <p>
    <label for="quarteirao">Quarteirão</label>
    <input type="text" name="quarteirao" id="quarteirao" value="{{ $end->quarteirao }}" />
  </p>
  <p>
    <input type="submit" name="gravarEndereco" id="gravarEndereco" value="Gravar" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
