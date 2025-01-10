<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gasto;

class GastoDeleteSeeder extends Seeder
{
    public function run()
    {
        // Eliminar todos los registros de la tabla 'gastos'
        Gasto::truncate(); // Esto elimina todos los registros en la tabla
    }
}
