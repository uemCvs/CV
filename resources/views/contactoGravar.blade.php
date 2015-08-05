
<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
<script src="{{URL::asset('Start/js/freelancer.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('contactos')}}">
    <h4 class="text-center">Contacto</h4>
      <div class="form-group">
        <label class="control-label col-sm-3" for="telefone">Telefone</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Introduza o telefone" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Email</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="email" id="anoConclusao" placeholder="aaaaa@bbbbb.ccc"  />

        </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <input type="submit" class="btn btn-success" name="gravarContacto" id="gravarContacto" value="Gravar"/>
                </div>
            </div>

</form>
