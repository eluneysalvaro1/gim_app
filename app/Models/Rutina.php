<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_rutina", 
        "fecha",
        "repeticiones",
        "promedio_peso",
        "ejercicio",
        "usuario"
    ];

    public function ejercicio(){
        $ejercicio = $this->hasOne(Ejercicio::class);
        return $ejercicio;
    }
    public function usuario(){
        $usuario = $this->hasMany(User::class);
        return $usuario; 
    }


}
