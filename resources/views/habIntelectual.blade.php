<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form id="form1" name="form1" method="post" action="habilitacaoIntelectual">


    <h4 class="text-center">Habilitações Intelectuais</h4>
    <div class="form-group">
        <label  for="descrHabilIntelc" >Descrição:</label>
        <textarea class="form-control"  name="habilitacao" id="descrHabilIntelc" rows="10" cols="10" ></textarea>

    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarHabIntelectual" id="gravarHabIntelectual" value="Gravar"/>
        </div>
    </div>

</form>

