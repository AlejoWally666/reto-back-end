<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    protected $table = 'paquetes';
    protected $fillable = [
        'descripcion',
        'salida',
        'llegada',
        'precio_envio',
        'valor_paquete',
        'cliente_id'
    ];
}
