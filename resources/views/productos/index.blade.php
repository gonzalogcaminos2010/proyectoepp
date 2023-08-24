@extends('adminlte::page')

@section('title', 'Listado de Productos')

@section('content_header')
    <h1>Listado de Productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Productos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Característica</th>
                        <th>Marca</th>
                        <th>Stock Inicial</th>
                        <th>Proyecto</th>
                        <th>Lugar</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->codigo }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->caracteristica }}</td>
                        <td>{{ $producto->marca }}</td>
                        <td>{{ $producto->stock_inicial }}</td>
                        <td>{{ $producto->proyecto }}</td>
                        <td>{{ $producto->lugar }}</td>
                        <td>
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <!-- Puedes añadir más acciones como ver detalles, eliminar, etc. -->
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
    <!-- Aquí puedes añadir estilos específicos para esta página si es necesario -->
@stop

@section('js')
    <!-- Aquí puedes añadir scripts específicos para esta página si es necesario -->
@stop
