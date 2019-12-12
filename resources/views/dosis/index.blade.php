@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dosis</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'dosis.create', 'method' => 'get']) !!}
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

                            @foreach ($dosis as $dosis)


                                <tr>
                                    <td>{{ $dosis->unidades }}</td>
                                    <td>{{ $dosis->frecuencia }}</td>
                                    <td>{{ $dosis->instrucciones }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['dosis.edit',$dosis->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['dosis.destroy',$dosis->id], 'method' => 'delete']) !!}
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