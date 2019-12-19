@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Enfermedades</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'enfermedades.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear enfermedad', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        {!! Form::open(['route' => 'enfermedades.index', 'method' => 'GET', 'class'=> 'navbar-form navbar-left pull-right']) !!}
                        <div class="form-group">
                            {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder' => 'Enfermedad']) !!}
                            {!! Form::submit('Buscar', ['class'=>'btn btn-default pull-right']) !!}
                        </div>
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Especialidad</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($enfermedades as $enfermedad)


                                <tr>
                                    <td>{{ $enfermedad->nombre }}</td>
                                    <td>{{ $enfermedad->especialidad->name }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['enfermedades.edit',$enfermedad->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['enfermedades.destroy',$enfermedad->id], 'method' => 'delete']) !!}
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