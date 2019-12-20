@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear tratamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'tratamientos.store']) !!}
                        <div class="form-group">
                            {!! Form::label('fecha_inicio', 'Fecha de inicio del tratamiento') !!}


                            <input type="datetime-local" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />


                        </div>
                        <div class="form-group">
                            {!! Form::label('fecha_fin', 'Fecha de final del tratamiento') !!}


                            <input type="datetime-local" id="fecha_fin" name="fecha_fin" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />


                        </div>
                        <div class="form-group">
                            {!!Form::label('descripcion', 'Descripción') !!}
                            <br>
                            {!! Form::text('descripcion',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('medicamento_id', 'Medicamento') !!}
                            <br>
                            <select class="form-control pull-right" name="medicamento_id" id="medicamento_id">
                                <option {{Request::get('medicamento_id') === null ? "selected" : ""}} value="">Ningún medicamento</option>
                                <?php foreach ($medicamentos as $medicamento):
                                $medicamento?>
                                <option value="<?php echo $medicamento->id; ?>">
                                    <?php echo $medicamento->nombre_comun; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>

                        <div class="form-group">
                            {!!Form::label('cita_id', 'Cita') !!}
                            <br>
                            {!! Form::select('cita_id', $citas, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection