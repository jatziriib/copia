<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Evento extends Model
{
   protected $conection = 'mongodb';
    protected $collection = 'eventos';
    protected $fillable = ['nombre', 'fecha', 'hora', 'lugar', 'celular','productos'];

}
