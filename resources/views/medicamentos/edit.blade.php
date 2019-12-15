@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar medicamento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($medicamento, [ 'route' => ['medicamentos.update',$medicamento->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('nombre_comun', 'Nombre del medicamento') !!}
                            {!! Form::text('nombre_comun',$medicamento->nombre_comun,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('composicion', 'Composición del medicamento') !!}
                            {!! Form::text('composicion',$medicamento->composicion,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('presentación', 'Presentación del medicamento') !!}
                            {!! Form::text('presentación',$medicamento->presentacion,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('link_vademecum', 'Link vademecum del medicamento') !!}
                            {!! Form::text('link_vademecum',$medicamento->link_vademecum,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('doses_id', 'Dosis del medicamento') !!}
                            <br>
                            {!! Form::select('doses_id', $doses,$medicamento->doses_id, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
