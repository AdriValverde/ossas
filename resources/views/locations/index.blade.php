@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Localizaciones</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'locations.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear localización', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Hospital</th>
                                <th>Consulta</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($locations as $location)

                                <tr>
                                    <td>{{ $location->hospital }}</td>
                                    <td>{{ $location->consulta }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['locations.edit',$location->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['location.destroy',$location->id], 'method' => 'delete']) !!}
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