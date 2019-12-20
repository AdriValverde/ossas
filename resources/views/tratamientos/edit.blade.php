@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar tratamientos</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($tratamiento, [ 'route' => ['tratamientos.update',$tratamiento->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('fecha_inicio', 'Fecha de inicio del tratamiento') !!}


                            <input type="datetime-local" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{$tratamiento->fecha_inicio->format('Y-m-d\TH:i')}}" />


                        </div>
                        <div class="form-group">
                            {!! Form::label('fecha_fin', 'Fecha de final del tratamiento') !!}


                            <input type="datetime-local" id="fecha_fin" name="fecha_fin" class="form-control" value="{{$tratamiento->fecha_fin->format('Y-m-d\TH:i')}}" />


                        </div>
                        <div class="form-group">
                            {!!Form::label('descripcion', 'Descripción') !!}
                            <br>
                            {!! Form::text('descripcion',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">

                            {!!Form::label('medicamento_id', 'Medicamento') !!}
                            {!! Form::label('medicamento_id', ' -- Recetado anteriormente:  ', ['class' => 'awesome']); !!}
                            {!! Form::label('medicamento_id', $tratamiento->medicamento->nombre_comun); !!}


                            <div class=" btn-group ">

                                <select class="form-control pull-right" name="medicamento_id" id="medicamento_id">
                                    <option {{Request::get('medicamento_id') === null ? "selected" : ""}} value="">Ningún medicamento</option>
                                    <?php foreach ($medicamentos as $medicamento):
                                    $medicamento?>
                                    <option {{Request::get('medicamento_id') == $tratamiento->medicamento_id ? "selected" : ""}} value="<?php echo $medicamento->id; ?>">
                                        <?php echo $medicamento->nombre_comun; ?></option>
                                    <?php endforeach; ?>
                                </select>


                            </div>


                        </div>

                        <div class="form-group">

                            {!!Form::label('cita_id', 'Cita') !!}
                            <br>
                            {!! Form::select('cita_id', $citas, $tratamiento->cita_id, ['class' => 'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection