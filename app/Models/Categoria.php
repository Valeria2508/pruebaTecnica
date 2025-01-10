<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Si tu tabla en la base de datos tiene un nombre diferente, puedes especificarlo aquí
    protected $table = 'categorias';

    // Los atributos que pueden ser asignados masivamente
    protected $fillable = ['nombre'];
}
