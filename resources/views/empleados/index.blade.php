@extends('adminlte::page')

@section('title', 'Lista de Empleados')

@section('content_header')
    <h1>Lista de Empleados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Empleados Registrados</h3>
            <a href="{{ route('empleados.create') }}" class="btn btn-primary float-right">Añadir Empleado</a>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Posición</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->apellido }}</td>
                            <td>{{ $empleado->dni }}</td>
                            <td>{{ $empleado->posicion }}</td>
                            <td>
                                <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                
                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@stop

@section('css')
    <!-- Si deseas añadir estilos específicos para esta página -->
@stop

@section('js')
    <!-- Si deseas añadir scripts específicos para esta página -->
@stop
