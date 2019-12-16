@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dosis</div>
                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'doses.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear dosis', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}
                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Unidades</th>
                                <th>Frecuencia</th>
                                <th>Instrucciones</th>

                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($doses as $dose)

                                <tr>
                                    <td>{{ $dose->unidades }}</td>
                                    <td>{{ $dose->frecuencia }}</td>
                                    <td>{{ $dose->instrucciones }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['doses.edit',$dose->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['doses.destroy',$dose->id], 'method' => 'delete']) !!}
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