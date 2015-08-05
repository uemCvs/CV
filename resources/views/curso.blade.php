<div class="container">
    <div class="jumbotron">
        <h2 class="text-center">Curso</h2>
        @if(session('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>

        @endif
        {!! Form::open( array('url'=> 'gravar-curso')) !!}


        <div class="form-group">
            {!! Form::label('nivel','Escolha o nivel',['class'=>'text-primary']) !!}
            {!! Form::select('nivel', $nivel , null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('curso','Introduza o nome do curso:',['class'=>'text-primary']) !!}
            {!! Form::text('curso','',['class'=>'form-control','rows'=>'1']) !!}

        </div>

        <div>
            <button type="submit" name="Gravar" class="btn btn-primary">Gravar</button>
        </div>


        {!! Form::close() !!}
    </div>
</div>