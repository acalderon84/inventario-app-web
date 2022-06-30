<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar datos de un producto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <x-app-input
                                texto="Nombre"
                                valor="{{ $producto->nombre }}"
                                id="nombre"
                                required="true" />

                                <x-app-input
                                texto="Descripcion"
                                valor="{{ $producto->descripcion }}"
                                id="descripcion"
                                required="true" />

                              <x-app-input
                                texto="Presentacion"
                                valor="{{ $producto->presentacion }}"
                                id="presentacion"
                                required="true" />

                                <x-app-input
                                texto="Existencia"
                                valor="{{ $producto->existencia }}"
                                id="Existencia"
                                required="true" />

                                <x-app-select
                                  texto="Presentacion"
                                  :datos="$presentaciones"
                                  id="presentacion"
                                />
                        </div>
                        <div class="mt-2">
                            <x-button>
                                Guardar
                            </x-button>

                        <!-- Crear un boton para regresar a la lista de productos  -->
                        <a href="{{ route('productos.index') }}" class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-orange-500 hover:bg">
                            Regresar
                        </a>



                        </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
