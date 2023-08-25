@extends('adminlte::page')

@section('title', 'Crear Producto')

@section('content_header')
    <h1>Crear Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario de Producto</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingrese el código del producto" required>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del producto" required>
                </div>

                <div class="form-group">
                    <label for="caracteristica">Característica</label>
                    <input type="text" name="caracteristica" id="caracteristica" class="form-control" placeholder="Ingrese las características del producto">
                </div>

                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" placeholder="Ingrese la marca del producto">
                </div>

                <div class="form-group">
                    <label for="stock_inicial">Stock Inicial</label>
                    <input type="number" name="stock_inicial" id="stock_inicial" class="form-control" placeholder="Ingrese el stock inicial" required>
                </div>

                <div class="form-group">
                    <label for="stock_actual">Stock Actual</label>
                    <input type="number" name="stock_actual" id="stock_actual" class="form-control" placeholder="Ingrese el stock actual" readonly>
                </div>

                <div class="form-group">
                    <label for="proyecto">Proyecto</label>
                    <input type="text" name="proyecto" id="proyecto" class="form-control" placeholder="Ingrese el proyecto relacionado">
                </div>

                <div class="form-group">
                    <label for="lugar">Lugar</label>
                    <input type="text" name="lugar" id="lugar" class="form-control" placeholder="Ingrese el lugar de almacenamiento">
                </div>

                <button type="submit" class="btn btn-success">Crear Producto</button>
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