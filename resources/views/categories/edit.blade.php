@extends('layouts.uno')
@section('titulo')
    Editar Categoria
@endsection
@section('cabecera')
    Editar Categoria: {{$category->id}}
@endsection
@section('contenido')
<div class="bg-gray-300 rounded py-4 px-2">
    <form action="{{route('categories.update', $category)}}" method="POST">
        @csrf
        @method('PUT')
    <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre Categoria</label>
        <input type="text" value="{{$category->nombre}}" name="nombre" id="nombre" class="py-2 px-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full  sm:text-sm border-gray-300 rounded-md" placeholder="Nombre" required>
        @error('nombre')
        <p class="text-sm text-orange-900 mt-1">*** {{$message}}</p>
        @enderror
    </div>
    <div class="mt-2">
        <label for="desc" class="block text-sm font-medium text-gray-700 mb-2">Descripción  Categoria</label>
        <input type="text" value="{{$category->descripcion}}" name="descripcion" id="desc" class="px-2 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full  sm:text-sm border-gray-300 rounded-md" placeholder="Descripción" required>
        @error('descripcion')
        <p class="text-sm text-orange-900 mt-1">*** {{$message}}</p>
        @enderror
    </div>
    <div class="mt-2">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-edit"></i> Editar</button>
        <a href="{{route('categories.index')}}" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-backward"></i> Regresar</a>
    </div>
    </form>
</div>
@endsection