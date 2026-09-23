<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            // MTB - Trail
            [
                'categoria' => 'trail',
                'nombre' => 'Santa Cruz Tallboy',
                'precio' => 1850000,
                'sku' => 'DF-MTB-TR-001',
                'descripcion' => 'Bicicleta de montaña versátil para recorridos de trail.',
            ],
            [
                'categoria' => 'trail',
                'nombre' => 'Trek Fuel EX',
                'precio' => 2100000,
                'sku' => 'DF-MTB-TR-002',
                'descripcion' => 'Bicicleta de doble suspensión para trail y terrenos técnicos.',
            ],
            [
                'categoria' => 'trail',
                'nombre' => 'Specialized Stumpjumper',
                'precio' => 2250000,
                'sku' => 'DF-MTB-TR-003',
                'descripcion' => 'Bicicleta ligera y ágil para rutas de montaña.',
            ],
            [
                'categoria' => 'trail',
                'nombre' => 'Giant Trance X',
                'precio' => 1950000,
                'sku' => 'DF-MTB-TR-004',
                'descripcion' => 'Bicicleta de trail con suspensión preparada para terrenos variados.',
            ],
            [
                'categoria' => 'trail',
                'nombre' => 'Canyon Neuron',
                'precio' => 2300000,
                'sku' => 'DF-MTB-TR-005',
                'descripcion' => 'Bicicleta de trail orientada a recorridos largos y técnicos.',
            ],

            // MTB - Enduro
            [
                'categoria' => 'enduro',
                'nombre' => 'Santa Cruz Megatower',
                'precio' => 2800000,
                'sku' => 'DF-MTB-EN-001',
                'descripcion' => 'Bicicleta de enduro preparada para descensos técnicos.',
            ],
            [
                'categoria' => 'enduro',
                'nombre' => 'Trek Slash',
                'precio' => 2950000,
                'sku' => 'DF-MTB-EN-002',
                'descripcion' => 'Bicicleta de enduro para terrenos agresivos y descensos exigentes.',
            ],
            [
                'categoria' => 'enduro',
                'nombre' => 'Specialized Enduro',
                'precio' => 3100000,
                'sku' => 'DF-MTB-EN-003',
                'descripcion' => 'Bicicleta de alto recorrido para enduro técnico.',
            ],
            [
                'categoria' => 'enduro',
                'nombre' => 'Giant Reign',
                'precio' => 2700000,
                'sku' => 'DF-MTB-EN-004',
                'descripcion' => 'Bicicleta de enduro con suspensión de largo recorrido.',
            ],
            [
                'categoria' => 'enduro',
                'nombre' => 'Canyon Strive',
                'precio' => 3200000,
                'sku' => 'DF-MTB-EN-005',
                'descripcion' => 'Bicicleta de enduro diseñada para terrenos técnicos.',
            ],

            // MTB - Downhill
            [
                'categoria' => 'downhill',
                'nombre' => 'Santa Cruz V10',
                'precio' => 3500000,
                'sku' => 'DF-MTB-DH-001',
                'descripcion' => 'Bicicleta de downhill diseñada para descensos de alta velocidad.',
            ],
            [
                'categoria' => 'downhill',
                'nombre' => 'Trek Session',
                'precio' => 3300000,
                'sku' => 'DF-MTB-DH-002',
                'descripcion' => 'Bicicleta de descenso para circuitos técnicos y competitivos.',
            ],
            [
                'categoria' => 'downhill',
                'nombre' => 'Specialized Demo',
                'precio' => 3400000,
                'sku' => 'DF-MTB-DH-003',
                'descripcion' => 'Bicicleta de downhill enfocada en estabilidad y control.',
            ],
            [
                'categoria' => 'downhill',
                'nombre' => 'Commencal Supreme',
                'precio' => 3150000,
                'sku' => 'DF-MTB-DH-004',
                'descripcion' => 'Bicicleta de descenso preparada para terrenos exigentes.',
            ],
            [
                'categoria' => 'downhill',
                'nombre' => 'Canyon Sender',
                'precio' => 3250000,
                'sku' => 'DF-MTB-DH-005',
                'descripcion' => 'Bicicleta de downhill orientada a velocidad y control.',
            ],

            // Ruta - Performance
            [
                'categoria' => 'performance',
                'nombre' => 'Specialized Tarmac',
                'precio' => 2900000,
                'sku' => 'DF-RD-PE-001',
                'descripcion' => 'Bicicleta de ruta orientada al rendimiento y velocidad.',
            ],
            [
                'categoria' => 'performance',
                'nombre' => 'Trek Madone',
                'precio' => 3200000,
                'sku' => 'DF-RD-PE-002',
                'descripcion' => 'Bicicleta de carretera de alto rendimiento.',
            ],
            [
                'categoria' => 'performance',
                'nombre' => 'Canyon Aeroad',
                'precio' => 3500000,
                'sku' => 'DF-RD-PE-003',
                'descripcion' => 'Bicicleta aerodinámica para ciclismo de carretera.',
            ],
            [
                'categoria' => 'performance',
                'nombre' => 'Giant Propel',
                'precio' => 3000000,
                'sku' => 'DF-RD-PE-004',
                'descripcion' => 'Bicicleta de ruta enfocada en aerodinámica y velocidad.',
            ],
            [
                'categoria' => 'performance',
                'nombre' => 'Scott Addict RC',
                'precio' => 3100000,
                'sku' => 'DF-RD-PE-005',
                'descripcion' => 'Bicicleta de carretera ligera para alto rendimiento.',
            ],

            // Ruta - Endurance
            [
                'categoria' => 'endurance',
                'nombre' => 'Trek Domane',
                'precio' => 2400000,
                'sku' => 'DF-RD-ED-001',
                'descripcion' => 'Bicicleta de ruta diseñada para comodidad en largas distancias.',
            ],
            [
                'categoria' => 'endurance',
                'nombre' => 'Specialized Roubaix',
                'precio' => 2550000,
                'sku' => 'DF-RD-ED-002',
                'descripcion' => 'Bicicleta de carretera enfocada en comodidad y resistencia.',
            ],
            [
                'categoria' => 'endurance',
                'nombre' => 'Giant Defy',
                'precio' => 2250000,
                'sku' => 'DF-RD-ED-003',
                'descripcion' => 'Bicicleta de endurance para recorridos largos.',
            ],
            [
                'categoria' => 'endurance',
                'nombre' => 'Canyon Endurace',
                'precio' => 2650000,
                'sku' => 'DF-RD-ED-004',
                'descripcion' => 'Bicicleta de carretera para largas distancias y comodidad.',
            ],
            [
                'categoria' => 'endurance',
                'nombre' => 'Scott Addict',
                'precio' => 2350000,
                'sku' => 'DF-RD-ED-005',
                'descripcion' => 'Bicicleta de endurance ligera y preparada para largas rutas.',
            ],
        ];

        foreach ($productos as $datos) {
            $categoria = Category::where('slug', $datos['categoria'])->firstOrFail();

            $producto = Product::create([
                'category_id' => $categoria->id,
                'nombre' => $datos['nombre'],
                'slug' => str()->slug($datos['nombre']),
                'descripcion' => $datos['descripcion'],
                'precio' => $datos['precio'],
                'sku' => $datos['sku'],
                'activo' => true,
            ]);

            Inventory::create([
                'product_id' => $producto->id,
                'cantidad' => 5,
                'stock_minimo' => 2,
            ]);
        }
    }
}