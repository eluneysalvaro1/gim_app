<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    use HasFactory;

    protected $fillable = [
        "usuario",
        "altura",
        "peso",
        "edad",
        "km_corridos",
        "km_bicicleta",
        "meses_entrenando"
    ];

}
