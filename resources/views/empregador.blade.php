<link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
<link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
<script src="{{URL::asset('Start/js/bootstrap.js')}}"></script>

<form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('')}}">
    <input type="hidden" id="registoEstudante" name="registoEstudante" value="1" />
    <h4 class="text-center">Cadastro do Empregador</h4>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nome">Nome da Empresa</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nome" id="nome" required="required" placeholder="Introduza o nome da empresa" />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="descricao" >Descricao</label>
        <div class="col-sm-9">
            <textarea class="form-control"  name="descricao" id="descricao" placeholder="Introduza uma breve descricao sobre a sua empresa" required="required" ></textarea>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3" for="logotipo">seleccione um Logotipo</label>
        <div class="col-sm-9">
            <input class="form-control" type="file" name="logotipo" id="logotipo"   />
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3" for="nomeUsuario">Nome de usuario</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="nomeUsuario"  id="nomeUsuario" placeholder="Introduza o nome de usuario"  required="required"/>
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3" for="email">Email</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" name="email"  id="email" placeholder="Introduza o nome de usuario"  required="required"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Confirm Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"/>
        </div>
    </div>


</form>

