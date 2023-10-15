<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporadas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_temporada',
        'nombre',
        'created_at',
        'updated_at'
    ];
}
