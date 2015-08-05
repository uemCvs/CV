<div class="container">
    <div class="jumbotron">
        <h2 class="text-center">Nivel</h2>
        @if(session('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>

        @endif
        {!! Form::open( array('url'=> 'gravar-nivel')) !!}


        <div class="form-group">
            {!! Form::label('nome','Introduza o nivel:',['class'=>'text-primary']) !!}
            {!! Form::text('nome','',['class'=>'form-control','rows'=>'1']) !!}


        </div>

        <button type="submit" name="Gravar" class="btn btn-primary">Gravar</button>

        {!! Form::close() !!}
    </div>
</div>