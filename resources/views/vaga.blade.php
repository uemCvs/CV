
    <link href="{{URL::asset('Start/css/bootstrap.css')}} " rel="stylesheet">
    <link href="{{URL::asset('Start/css/MeuStyle.css')}} " rel="stylesheet">
    <link href="{{URL::asset('Start/js/bootstrap.js')}} " rel="script">
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    @if(session('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>

    @endif

    <form class="form-horizontal" id="form1" name="form1" method="post" action="{{url('gestorEmpregador')}}">
        <input type="hidden" id="registoEstudante" name="registoEstudante" value="1" />
        <h4 class="text-center">Vagas</h4>
        <div class="form-group">
            <label class="control-label col-sm-3" for="nome" >Nome da Vaga</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="nome" id="nome" required="required" placeholder="Introduza o nome da vaga" maxlength="40"/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="Descricao" >Descricao da vaga</label>
            <div class="col-sm-9">
                <textarea class="form-control"  name="descricao" id="Descricao" placeholder="Introduza a descricao da vaga" required="required" ></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="vagas">Numero de vagas</label>
            <div class="col-sm-9">
                <input class="form-control" type="number" name="nrVagas" id="vagas"  placeholder="Introduza o numero de vagas" required="required" />
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-3" id="Disponibilidade" for="Disponibilidade">Disponibilidade</label>
            <div class="col-sm-9">
                <select class="form-control" id="Disponibilidade" name="disponibilidade" >
                    <option selected="selected">Escolha a disponibilidade</option>
                    <option value="Parcial">Parcial</option>
                    <option value="Inteiro">Inteiro</option>
                </select>
            </div>
        </div>

        <div class="form-group">

            {!! Form::label('idiomas','Idioma(Pressione shif para selecionar mais de um)',['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-9">


                {!! Form::select('idiomas', $idiomas ,null,['class'=>'form-control','multiple']) !!}

            </div>
        </div>

        {{--<div class="form-group">
            <label class="control-label col-sm-3" for="idioma">Idioma </label>
            <div class="col-sm-9">

                @foreach($idiomas as $idioma)
                    <input type="checkbox" value="{{$idioma->id}}" name="idioma[]"/>{{ $idioma->idioma}}  </br>

                @endforeach
            </div>
        </div>--}}

        <div class="form-group">
            <label class="control-label col-sm-3" for="outroCurso">Curso adicional</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="outroCurso" id="outroCurso"  placeholder="Introduza cursos adicionais" />
            </div>
        </div>


        <div class="form-group">

            {!! Form::label('nivel','Nivel',['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-9">


                {!! Form::select('nivel', $nivel , null,['class'=>'form-control']) !!}

            </div>
        </div>

        <div class="form-group">
            {!! Form::label('curso','Curso(Pressione shif para selecionar mais de um)',['class'=>'control-label col-sm-3']) !!}
            <div class="col-sm-9">


                {!! Form::select('curso', [] , null,['class'=>'form-control','multiple']) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="Competencia" >Competencias</label>
            <div class="col-sm-9">
                <textarea class="form-control"  name="competencia" id="Competencia" placeholder="Introduza as competencias requeridas"  ></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="Condicao" >Condicoes oferecidas</label>
            <div class="col-sm-9">
                <textarea class="form-control"  name="condicaoOferecida" id="Condicao" placeholder="Introduza as condicoes oferecidas"  ></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <input type="submit" class="btn btn-success" name="gravarDpessoais" id="gravarDpessoais" value="Gravar"/>
            </div>
        </div>


    </form>

    <script>
        $('select[name=nivel]').change(function(){

            var id=$(this).val();

            $.get('/get-curso/'+id, function(curso){
                $('select[name=curso]').empty();
                $.each(curso, function(key,value){
                    $('select[name=curso]').append('<option value'+value.id+'>'+value.nome+'</option>');

                });
            });
        });

    </script>
