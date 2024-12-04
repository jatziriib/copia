<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as MongoClient;

class CalendarController extends Controller
{
    private $collection;

    public function __construct()
    {
        $client = new MongoClient(); // Conecta a MongoDB Compass
        $this->collection = $client->flores1->eventos; // Selecciona la base y colección
    }

    public function index()
    {
        return view('calendario');
    }

    public function getEventos()
    {
        $eventos = $this->collection->find()->toArray();
        return response()->json($eventos);
    }

    public function guardarEvento(Request $request)
    {
        $this->collection->insertOne([
            'dia' => $request->dia,
            'evento' => $request->evento
        ]);
        return response()->json(['mensaje' => 'Evento guardado']);
    }
}
public function testMongoConnection()
{
    $client = new \MongoDB\Client();
    $collection = $client->flores_1->eventos;

    $eventos = $collection->find()->toArray();

    return response()->json($eventos); // Devuelve los datos como JSON
}
