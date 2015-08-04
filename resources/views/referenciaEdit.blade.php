<form id="form1" name="form1" method="post" action="{{route('put_refer', ['id' => $refer->id])}} ">
    <input type="hidden" name="_method" value="PUT">
        <p>
        <label for="referencias">Referencias:</label><br>
        <textArea name="referencia" cols="40" rows="10" value="{{$refer->referencia}}" ></textArea><br>
        <input type="submit" value="enviar">
    </p>
    <p>&nbsp;</p>
</form>
