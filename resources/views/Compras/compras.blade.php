<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de productos
        </h2>
    </x-slot>

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
                            @foreach ($compra as $compra)
                                <tr>
                                    <td class="border px-4 py-2">{{ $compras->proveedor_id }}</td>
                                    <td class="border px-4 py-2">{{ $compras->user_id }}</td>
                                    <td class="border px-4 py-2">{{ $compras->fecha }}</td>
                                    <td class="border px4 py-2">{{ $compras->monto }}</td>
                                    <td class="border px-4 py-2 ">
                                        <a href="{{ route('compras.edit', $compra->id) }}" class=  "p-2 text-white bg-blue-300 rounded-lg hover:text-blue-700">Editar</a>
                                        <a href="{{ route('compras.destroy', $compra->id) }}" class="text-red-500 bg-red-300 rounded-lg hover:text-red-700">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr class="m-5">
                    {{ $compras->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
