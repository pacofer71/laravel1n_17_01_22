@extends('layouts.uno')
@section('titulo')
    Inicio Categorias
@endsection
@section('cabecera')
    Listado de Categorias
@endsection
@section('contenido')
    <!-- This example requires Tailwind CSS v2.0+ -->
    @if(session('mensaje'))
    <x-alerta1>{{session('mensaje')}}</x-alerta1>
    @endif
    <div class="mb-4">
        <a href="{{route('categories.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <i class="fas fa-plus"></i> Nueva</a>
    </div>
    <x-tabla1>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        NOMBRE
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        DESCRIPCIÓN
                    </th>
                    <th colspan="2"></th>

                </tr>
               
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($categories as $item)
                            <tr>
                                <td class="px-6 py-4">
                                    <a href="{{route('posts.index1', $item->id)}}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Posts</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $item->nombre }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->descripcion }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('categories.edit', $item)}}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                        <i class="fas fa-edit"></i></a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{route('categories.destroy', $item)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                </table>

    </x-tabla1>

@endsection
