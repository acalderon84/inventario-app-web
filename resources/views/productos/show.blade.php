<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Crear una ventana modal si desea eliminar el producto -->
                    @if (isset($_GET['confirmar_eliminado']))
                        <div class="flex flex-col items-center justify-center p-6 border-2 border-red-500 rounded-lg">
                            <div class="text-red-500 text-center">
                                <p class="text-xl font-bold">¿Está seguro de eliminar el producto:
                                    {{ $producto->nombre }}?</p>
                                <p class="text-gray-600">
                                    Esta acción no se puede deshacer.
                                </p>
                            </div>
                            <div class="mt-5">
                                <form action="{{ route('productos.destroy', ['producto' => $producto->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        Si
                                    </button>


                                </form>
                                <a href="{{ route('productos.index') }}"
                                    class="text-gray-500 p-4 hover:text-red-700">No</a>
                            </div>
                        </div>
                    @else
                        <!-- Mostrar los detalles del producto  -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                            <x-app-show texto="Nombre" valor="{{ $producto->nombre }}" />
                            <x-app-show texto="Descripcion" valor="{{ $producto->descripcion }}" />
                            <x-app-show texto="Existencia" valor="{{ $producto->existencia }}" />
                            <x-app-show texto="Presentacion" valor="{{ $producto->presentacion }}" />
                            <x-app-show texto="Proveedor" valor="{{ $producto->proveedor_id }}" />

                        </div>
                    @endif
                    <!-- Mostrar el detalle de las compras realizadas -->
                     <div>
                        <h3 class="text-gray-600 font-bold text-xl mb-2">
                            Compras realizadas
                        </h3>

                        <div class="grid grid-cols-1">
                                   <table class="text-center">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-2">Cantidad</th>
                                                <th class="px-4 py-2">P/C</th>
                                                <th class="px-4 py-2">P/V</th>
                                                <th class="px-4 py-2">Total</th>
                                                <th class="px-4 py-2">Tareas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($producto->compras as $compra)
                                                <tr>
                                                    <td class="border px-4 py-2">{{ $compra->cantidad }}</td>
                                                    <td class="border px-4 py-2">{{ $compra->precio_compra }}</td>
                                                    <td class="border px-4 py-2">{{ $compra->precio_venta }}</td>
                                                    <td class="border px-4 py-2">{{ $compra->total_compra }}</td>
                                                    <td class="px-4 py-2">
                                                        <a href="text-center w-6 p-2 text-black bg-greay-400 rounded-lg hover:text-red-700">
                                                            @svg('gmdi-zoom-in-map', 'h-4 w-4 text-gray-500 inline')
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                     </div>
                </div>
        </div>
    </div>
    </div>
</x-app-layout>
