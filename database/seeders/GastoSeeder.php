<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gasto;

class GastoSeeder extends Seeder
{
    public function run()
    {
        // Crear registros manualmente para cada categoría
        $gastos = [
            // Categoría: Comida
            [
                'descripcion' => 'Almuerzo en restaurante',
                'monto' => 15000, // 15,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-01'
            ],
            [
                'descripcion' => 'Cena en casa',
                'monto' => 20000, // 20,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-02'
            ],
            [
                'descripcion' => 'Compra de mercado',
                'monto' => 50000, // 50,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-03'
            ],
            [
                'descripcion' => 'Refrigerios para la oficina',
                'monto' => 10000, // 10,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-04'
            ],
            [
                'descripcion' => 'Cena en restaurante',
                'monto' => 30000, // 30,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-05'
            ],

            // Categoría: Transporte
            [
                'descripcion' => 'Gasolina para el carro',
                'monto' => 25000, // 25,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-01'
            ],
            [
                'descripcion' => 'Transporte público',
                'monto' => 3000, // 3,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-02'
            ],
            [
                'descripcion' => 'Taxi desde el trabajo a casa',
                'monto' => 15000, // 15,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-03'
            ],
            [
                'descripcion' => 'Mantenimiento del vehículo',
                'monto' => 100000, // 100,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-04'
            ],
            [
                'descripcion' => 'Peaje en el viaje',
                'monto' => 8000, // 8,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-05'
            ],

            // Categoría: Ocio
            [
                'descripcion' => 'Cine con amigos',
                'monto' => 30000, // 30,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-01'
            ],
            [
                'descripcion' => 'Concierto de música',
                'monto' => 70000, // 70,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-02'
            ],
            [
                'descripcion' => 'Salida a un bar',
                'monto' => 25000, // 25,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-03'
            ],
            [
                'descripcion' => 'Viaje a la playa',
                'monto' => 200000, // 200,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-04'
            ],
            [
                'descripcion' => 'Excursión a la montaña',
                'monto' => 50000, // 50,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-05'
            ],
            [
                'descripcion' => 'Almuerzo en la oficina',
                'monto' => 17000, // 17,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-01'
            ],
            [
                'descripcion' => 'Desayuno en cafetería',
                'monto' => 8000, // 8,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-02'
            ],
            [
                'descripcion' => 'Comida de negocios',
                'monto' => 35000, // 35,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-03'
            ],
            [
                'descripcion' => 'Mercado de fin de semana',
                'monto' => 85000, // 85,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-04'
            ],
            [
                'descripcion' => 'Café y postre en panadería',
                'monto' => 12000, // 12,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-05'
            ],
            [
                'descripcion' => 'Comida de cumpleaños',
                'monto' => 60000, // 60,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-06'
            ],
            [
                'descripcion' => 'Paseo a la heladería',
                'monto' => 12000, // 12,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-07'
            ],
            [
                'descripcion' => 'Picnic en el parque',
                'monto' => 25000, // 25,000 COP
                'categoria' => 'Comida',
                'fecha' => '2025-01-08'
            ],

            // Categoría: Transporte
            [
                'descripcion' => 'Cargar gasolina en estación',
                'monto' => 45000, // 45,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-01'
            ],
            [
                'descripcion' => 'Tarifa de bus intermunicipal',
                'monto' => 18000, // 18,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-02'
            ],
            [
                'descripcion' => 'Alquiler de moto por 1 día',
                'monto' => 35000, // 35,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-03'
            ],
            [
                'descripcion' => 'Taxis en el centro de la ciudad',
                'monto' => 22000, // 22,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-04'
            ],
            [
                'descripcion' => 'Pago mensual de seguro de carro',
                'monto' => 90000, // 90,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-05'
            ],
            [
                'descripcion' => 'Transporte en mototaxi',
                'monto' => 10000, // 10,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-06'
            ],
            [
                'descripcion' => 'Alquiler de coche en agencia',
                'monto' => 120000, // 120,000 COP
                'categoria' => 'Transporte',
                'fecha' => '2025-01-07'
            ],

            // Categoría: Ocio
            [
                'descripcion' => 'Entradas para un parque temático',
                'monto' => 120000, // 120,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-01'
            ],
            [
                'descripcion' => 'Fiesta privada en club',
                'monto' => 80000, // 80,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-02'
            ],
            [
                'descripcion' => 'Parque de diversiones con niños',
                'monto' => 35000, // 35,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-03'
            ],
            [
                'descripcion' => 'Tour gastronómico por la ciudad',
                'monto' => 90000, // 90,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-04'
            ],
            [
                'descripcion' => 'Excursión a una isla cercana',
                'monto' => 150000, // 150,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-05'
            ],
            [
                'descripcion' => 'Clase de yoga y meditación',
                'monto' => 40000, // 40,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-06'
            ],
            [
                'descripcion' => 'Juego de escape con amigos',
                'monto' => 25000, // 25,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-07'
            ],
            [
                'descripcion' => 'Trekking por el bosque',
                'monto' => 50000, // 50,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-08'
            ],
            [
                'descripcion' => 'Aventura en kayak',
                'monto' => 45000, // 45,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-09'
            ],
            [
                'descripcion' => 'Noche en hotel boutique',
                'monto' => 200000, // 200,000 COP
                'categoria' => 'Ocio',
                'fecha' => '2025-01-10'
            ]
        ];

        // Insertar los gastos manualmente en la base de datos
        foreach ($gastos as $gasto) {
            Gasto::create($gasto);
        }
    }
}
