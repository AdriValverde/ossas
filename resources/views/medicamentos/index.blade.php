@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Medicamentos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'medicamentos.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear medicamento', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        {!! Form::open(['route' => 'medicamentos.index', 'method' => 'GET', 'class'=> 'navbar-form navbar-left pull-right']) !!}
                        <div class="form-group">
                            {!! Form::text('nombre_comun', old('nombre_comun'), ['class' => 'form-control', 'placeholder' => 'Nombre común']) !!}
                            {!! Form::submit('Buscar', ['class'=>'btn btn-default pull-right']) !!}
                        </div>

                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Composición</th>
                                <th>Presentación</th>
                                <th>Link Vademecum</th>
                                <th>Dosis</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($medicamentos as $medicamento)


                                <tr>
                                    <td>{{ $medicamento->nombre_comun }}</td>
                                    <td>{{ $medicamento->composicion }}</td>
                                    <td>{{ $medicamento->presentación }}</td>
                                    <td>{{ $medicamento->link_vademecum }}</td>
                                    <td>{{ $medicamento->doses->dose_completa }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['medicamentos.edit',$medicamento->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['medicamentos.destroy',$medicamento->id], 'method' => 'delete']) !!}
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
@endsection