@extends('layouts.plantilla')

@section('titulo')

@section('contenido')

    <form action="{{route('productos.update', $producto)}}" method="post">
        @csrf

        @method('put')

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" value="{{old('codigo', $producto->codigo)}}"> 
        </div>
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{old('nombre', $producto->nombre)}}"> 
        </div>
        
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1"> 
                {{old('descripcion', $producto->descripcion)}}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{old('precio', $producto->precio)}}"> 
        </div>

        <a href="{{route('productos.index')}}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Actualizar</button>
    </form>

@endsection
