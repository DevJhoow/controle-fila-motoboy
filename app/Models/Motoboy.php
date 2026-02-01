<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motoboy extends Model
{
     protected $fillable = [
        'nome',
        'sobrenome',
        'restaurante_id'
    ];

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }

    public function fila()
    {
        return $this->hasOne(Fila::class);
    }

}
