<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    // Los atributos que pueden ser asignados de manera masiva
    protected $fillable = [
        'descripcion',
        'monto',
        'categoria',
        'fecha',
    ];
}
