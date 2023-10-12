<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cortes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_corte',
        'fecha',
        'nombre',
        'cantidad',
        'articulos',
        'costureros',
        'estado',
        'created_at',
        'updated_at'
    ];
}
