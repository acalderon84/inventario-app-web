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
                                <p class="text-xl font-bold">¿Está seguro de eliminar el producto: {{ $producto->nombre }}?</p>
                                <p class="text-gray-600">
                                    Esta acción no se puede deshacer.
                                </p>
                            </div>
                            <div class="mt-5">
                                <form action="{{ route('productos.destroy', ['producto' => $producto->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        Si
                                    </button>


                                </form>
                                <a href="{{ route('productos.index') }}"
                                    class="text-gray-500 p-4 hover:text-red-700">No</a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
