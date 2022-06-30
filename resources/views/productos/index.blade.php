<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <span class="text-xl font-semibold leading-tight text-gray-800">
            Lista de productos
            </span>
        <!-- Crear un boton -->
        <a href="{{ route('productos.create') }}" class="rounded-md bg-gray-200 text-black p-2">
            <!-- Incluir un icono en formato svg: plus -->
            <svg class="w-6 h-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
            </svg>
            Crear producto
        </a>
    </div>
    </x-slot>

     <!-- agregar una barra de tarea para operaciones con los productos -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Mostrar en una tabla la lista de productos -->
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Descripcion</th>
                                <th class="px-4 py-2">Existencia</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                                    <td class="border px-4 py-2">{{ $producto->descripcion }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $producto->existencia }}</td>
                                    <td class="border px-4 py-2 ">
                                        <a href="{{ route('productos.edit', $producto->id) }}" class=  "p-2 text-white bg-teal-600 rounded-lg hover:text-blue-700">Editar</a>
                                        <a href="{{ route('productos.show', ["producto"=>$producto->id, "confirmar_eliminado"=>1]) }}" class="text-black-500 p-2 bg-gray-300 rounded-lg hover:text-black-700">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr class="m-5">
                    {{ $productos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
