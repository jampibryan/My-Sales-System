@extends('layouts.plantilla')

@section('titulo')

@section('contenido')

    <form action="{{route('productos.store')}}" method="post">
        @csrf
        
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{old('codigo')}}"> 
        </div>
        @error('codigo')
            <small>*{{($message)}}</small>
        @enderror
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{old('nombre')}}"> 
        </div>
        @error('nombre')A
            <small>*{{($message)}}</small>
        @enderror
        
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1"> 
                {{old('descripcion')}}
            </textarea>        
        </div>
        @error('descripcion')
            <small>*{{($message)}}</small>
        @enderror
        
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="any" class="form-control"> 
        </div>

        <a href="{{route('productos.index')}}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>

@endsection
