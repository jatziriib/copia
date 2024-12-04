<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function store(request $request){
        \Log::info('Datos recibidos:', $request->all());
        $evento = Evento::create([
            'nombre' =>$request->nombre,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'lugar' => $request->lugar,
            'celular' => $request->celular,
            'productos' => $request->productos,
        ]);
        return response()->json(['message' => 'Evento creado correctamente', 'evento' => $evento]);
    }
}
