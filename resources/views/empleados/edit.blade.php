@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario de Edición</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $empleado->nombre }}" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $empleado->apellido }}" required>
                </div>

                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="text" name="dni" id="dni" class="form-control" value="{{ $empleado->dni }}" required>
                </div>

                <div class="form-group">
                    <label for="posicion">Posición</label>
                    <input type="text" name="posicion" id="posicion" class="form-control" value="{{ $empleado->posicion }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Empleado</button>
            </form>
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
