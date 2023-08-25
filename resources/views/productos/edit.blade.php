@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario de Edición</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" id="codigo" class="form-control" value="{{ $producto->codigo }}" required>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                </div>

                <div class="form-group">
                    <label for="caracteristica">Característica</label>
                    <input type="text" name="caracteristica" id="caracteristica" class="form-control" value="{{ $producto->caracteristica }}">
                </div>

                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" value="{{ $producto->marca }}">
                </div>

                <div class="form-group">
                    <label for="stock_inicial">Stock Inicial</label>
                    <input type="number" name="stock_inicial" id="stock_inicial" class="form-control" value="{{ $producto->stock_inicial }}" required>
                </div>

                <!-- Si agregaste el campo stock_actual -->
                <div class="form-group">
                    <label for="stock_actual">Stock Actual</label>
                    <input type="number" name="stock_actual" id="stock_actual" class="form-control" value="{{ $producto->stock_actual }}" required>
                </div>

                <div class="form-group">
                    <label for="proyecto">Proyecto</label>
                    <input type="text" name="proyecto" id="proyecto" class="form-control" value="{{ $producto->proyecto }}">
                </div>

                <div class="form-group">
                    <label for="lugar">Lugar</label>
                    <input type="text" name="lugar" id="lugar" class="form-control" value="{{ $producto->lugar }}">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Producto</button>
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
