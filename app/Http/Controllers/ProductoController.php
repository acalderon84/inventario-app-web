<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Presentaciones de productos para el select de la vista
    public $presentaciones = [
            '1' => 'Unidad',
            '2' => 'Kilos',
            '3' => 'Litros',
            '4' => 'Gramos',
            '5' => 'Miligramos',
            '6' => 'Libras',
            '7' => 'Onzas',
            '8' => 'Pies',
            '9' => 'Pulgadas',
            '10' => 'botella',
        ];


    public function index()
    {
        //extraer los productos de la base de datos.
        $productos = Producto::paginate(20);
        //mostrar la vista y pasarle los productos
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //traer todos los proveedores
        $proveedores = \App\Models\Proveedor::query()
          ->select('id', 'nombre')
          ->get()
          ->pluck('nombre', 'id');

        $presentaciones = $this->presentaciones;
        //Mostrar el formulario de creación de productos
        return view('productos.create', compact('presentaciones', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insertar un nuevo producto en la base de datos
        $producto = Producto::create($request->all());
        //redireccionar al index de productos
        return redirect()->route('productos.index')->with('success', 'Producto guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //Mostrar el producto con su id en la vista de la
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //presentaciones de productos para el select de la vista

         //Mostrar la vista de editar un producto
         $presentaciones = $this->presentaciones;
        return view('productos.edit', compact('producto', 'presentaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //Guardar los cambios en la base de datos
        $producto->update($request->all());
        //redireccionar al index de productos
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //eliminar el producto de la base de datos
        $producto->delete();
        //redireccionar a la vista de Productos
        return redirect()->route('productos.index');
    }
}
