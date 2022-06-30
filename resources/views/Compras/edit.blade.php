<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar datos para compras
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('compras.update', $compra->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <x-app-input
                                texto="Proveedor"
                                valor="{{ $compra->proveedor }}"
                                id="proveedor"
                                required="true" />

                                <x-app-input
                                texto="Fecha"
                                valor="{{ $compra->fecha }}"
                                id="fecha"
                                required="true" />

                              <x-app-input
                                texto="Monto"
                                valor="{{ $compra->monto }}"
                                id="monto"
                                required="true" />


                        </div>
                        <div class="mt-2">
                            <x-button>
                                Guardar
                            </x-button>

                        <!-- Crear un boton para regresar a la lista de productos  -->
                        <a href="{{ route('compras.index') }}" class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-orange-500 hover:bg">
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
