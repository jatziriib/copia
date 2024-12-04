<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Producto extends Model
{
    public function index()
{
    $productos = Producto::all(); // O la consulta que necesites
    return view('tu_vista', compact('productos'));
}

    // Conexión específica para MongoDB
    protected $connection = 'mongodb';

    // Colección asociada
    protected $collection = 'producto_1';

    // Atributos que se pueden asignar masivamente
    protected $fillable = [
        'producto',
        'precio',
        'categoria',
    ];
}
