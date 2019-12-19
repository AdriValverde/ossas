@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Citas</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'citas.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear cita', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        {!! Form::open(['route' => 'citas.index', 'method' => 'get']) !!}
                        <div class="form-group">
                            <select class="btn btn-default pull-right" name="filtro_fecha" id="filtro_fecha">
                                <option {{Request::get('filtro_fecha') == 1 ? "selected" : ""}} value="1">Todas las citas</option>
                                <option {{Request::get('filtro_fecha') == null ? "selected" : ""}} value="">Próximas citas</option>
                            </select>
                            <button type="submit" class="btn btn-default pull-right">Filtrar</button>

                        </div>
                        {!! Form::close() !!}


                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Fecha</th>
                                <th>Fecha Fin</th>
                                <th>Médico</th>
                                <th>Paciente</th>
                                <th>Localización</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($citas as $cita)


                                <tr>
                                    <td>{{ $cita->fecha_inicio }}</td>
                                    <td>{{ $cita->fecha_fin }}</td>
                                    <td>{{ $cita->medico->full_name }}</td>
                                    <td>{{ $cita->paciente->full_name}}</td>
                                    <td>{{ $cita->location->full_name}}</td>

                                    <td>
                                        {!! Form::open(['route' => ['citas.edit',$cita->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['citas.destroy',$cita->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection