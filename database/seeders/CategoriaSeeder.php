<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        // Insertamos las categorías predefinidas
        Categoria::create(['nombre' => 'Comida']);
        Categoria::create(['nombre' => 'Transporte']);
        Categoria::create(['nombre' => 'Ocio']);
        // Puedes agregar más categorías si lo deseas
    }
    
}
