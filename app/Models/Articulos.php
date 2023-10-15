<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_articulo',
        'temporada_id',
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'imagen_alt',
        'created_at',
        'updated_at'
    ];

    public function temporadas()
    {
        return $this->hasOne(Temporadas::class, 'id_temporada', 'temporada_id');
    }
}
