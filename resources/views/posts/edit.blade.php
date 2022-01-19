@extends('layouts.uno')
@section('titulo')
    Editar Post
@endsection
@section('cabecera')
    Editar Post
@endsection
@section('contenido')
    <div class="bg-gray-300 rounded py-4 px-2">
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method("PUT")
            <div>
                <label for="tit" class="block text-sm font-medium text-gray-700 mb-2">Título Post</label>
                <input type="text" value="{{$post->titulo}}" name="titulo" id="tit"
                    class="py-2 px-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full  sm:text-sm border-gray-300 rounded-md"
                    required>
                @error('titulo')
                    <p class="text-sm text-orange-900 mt-1">*** {{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="res" class="block text-sm font-medium text-gray-700 mb-2">Resumen Post</label>
                <input type="text" name="resumen" id="res" value="{{$post->resumen}}"
                    class="px-2 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full  sm:text-sm border-gray-300 rounded-md"
                    placeholder="Resumen" required>
                @error('resumen')
                    <p class="text-sm text-orange-900 mt-1">*** {{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="cont" class="block text-sm font-medium text-gray-700 mb-2">Contenido Post</label>
                <textarea name="contenido" id="cont"
                    class="px-2 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full  sm:text-sm border-gray-300 rounded-md">{{$post->contenido}}</textarea>
                @error('contenido')
                    <p class="text-sm text-orange-900 mt-1">*** {{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="cat" class="block text-sm font-medium text-gray-700 mb-2">Categoría Post</label>
                <select name="category_id"
                    class=" py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full  sm:text-sm border-gray-300 rounded-md">
                    @foreach ($categorias as $item)
                        <option value="{{ $item->id }}" @if($item->id==$post->category_id) selected @endif>{{ $item->nombre }}</option>
                    @endforeach
                </select>

            </div>
            <div class="mt-2">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                        class="fas fa-save"></i> Guardar</button>
                <a href="{{ route('posts.index') }}"
                    class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded"><i
                        class="fas fa-backward"></i> Regresar</a>
            </div>
        </form>
    </div>
@endsection
