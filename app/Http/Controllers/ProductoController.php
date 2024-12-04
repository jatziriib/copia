<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Mostrar la lista de productos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Obtener todos los productos desde MongoDB
        $productos = Producto::all(); 
        // Retornar la vista con los productos
        return view('productos', compact('productos'));
    }

    /**
     * Almacenar un nuevo producto.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'producto' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'categoria' => 'required|string|max:255',
        ]);

        // Crear un nuevo producto en la base de datos
        Producto::create($validatedData); 

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    }

    /**
     * Eliminar un producto por ID.
     *
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Buscar y eliminar el producto por su ID
        $producto = Producto::find($id);

        if ($producto) {
            $producto->delete();
            return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito.');
        }

        // Si no se encuentra el producto, redirigir con un mensaje de error
        return redirect()->route('productos.index')->with('error', 'Producto no encontrado.');
    }
}
