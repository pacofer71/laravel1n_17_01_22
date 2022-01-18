@extends('layouts.uno')
@section('titulo')
    Inicio Posts
@endsection
@section('cabecera')
    Listado de Posts @if(isset($flag)) Categoria: {{$id}} @endif
@endsection
@section('contenido')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="mb-4">
        <a href="{{route('posts.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <i class="fas fa-plus"></i> Nuevo</a>
            @if(isset($flag))
            <a href="{{route('posts.index')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                 Ver Todos</a>
            @endif
    </div>
    <x-tabla1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        INFO
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        TITULO
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        RESUMEN
                    </th>
                    <th scope="col" colspan="2">

                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($posts as $item)
                    <tr>
                        <td class="px-6 py-4">
                            <a href="{{route('posts.show', $item)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-info"></i></a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->titulo }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->resumen }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Edit
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            Borrar
                        </td>
                    </tr>
                @endforeach
                <!-- More people... -->
            </tbody>
        </table>
    </x-tabla1>
    <div class="mt-2">
        {{ $posts->links() }}
    </div>

@endsection
