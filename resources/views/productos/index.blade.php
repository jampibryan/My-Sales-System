@extends('layouts.plantilla')

@section('titulo')

@section('contenido')

    <!-- <a href="{{route('productos.create')}}" class="btn btn-danger col-6 col-md-1">Crear Producto</a> -->
    <a href="{{route('productos.pdf')}}" class="btn btn-danger d-flex justify-content-center">PDF</a>
    
    &nbsp;

    <a href="{{route('productos.create')}}" class="btn btn-danger d-flex justify-content-center" >CREAR PRODUCTO</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Producto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->codigo}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <a href="{{route('productos.edit', $producto)}}" class="btn btn-info">Editar</a>
                        <form action="{{route('productos.destroy', $producto)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mt-1">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
