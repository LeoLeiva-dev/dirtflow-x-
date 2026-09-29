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
            // Accesorios - Cascos
            [
                'categoria' => 'cascos',
                'nombre' => 'Fox Speedframe Pro',
                'precio' => 85000,
                'sku' => 'DF-ACC-CA-001',
                'descripcion' => 'Casco de montaña ligero con ventilación y protección para trail y enduro.',
            ],
            [
                'categoria' => 'cascos',
                'nombre' => 'Troy Lee Designs A3',
                'precio' => 105000,
                'sku' => 'DF-ACC-CA-002',
                'descripcion' => 'Casco premium diseñado para ofrecer protección y comodidad en terrenos técnicos.',
            ],
            [
                'categoria' => 'cascos',
                'nombre' => 'POC Kortal Race',
                'precio' => 125000,
                'sku' => 'DF-ACC-CA-003',
                'descripcion' => 'Casco de alto rendimiento con cobertura extendida para recorridos exigentes.',
            ],

            // Accesorios - Protecciones
            [
                'categoria' => 'protecciones',
                'nombre' => 'Fox Launch Pro Knee Guard',
                'precio' => 65000,
                'sku' => 'DF-ACC-PR-001',
                'descripcion' => 'Protección de rodillas para trail, enduro y descensos técnicos.',
            ],
            [
                'categoria' => 'protecciones',
                'nombre' => 'Leatt AirFlex Chest Protector',
                'precio' => 95000,
                'sku' => 'DF-ACC-PR-002',
                'descripcion' => 'Protección ligera para el torso con diseño flexible y ventilado.',
            ],
            [
                'categoria' => 'protecciones',
                'nombre' => 'Fox Baseframe Pro',
                'precio' => 115000,
                'sku' => 'DF-ACC-PR-003',
                'descripcion' => 'Protección corporal avanzada para recorridos agresivos y descensos.',
            ],

            // Accesorios - Guantes
            [
                'categoria' => 'guantes',
                'nombre' => 'Fox Ranger Gloves',
                'precio' => 22000,
                'sku' => 'DF-ACC-GU-001',
                'descripcion' => 'Guantes ligeros con buen agarre y comodidad para recorridos de montaña.',
            ],
            [
                'categoria' => 'guantes',
                'nombre' => 'Troy Lee Designs Air Glove',
                'precio' => 28000,
                'sku' => 'DF-ACC-GU-002',
                'descripcion' => 'Guantes ventilados diseñados para máximo control y comodidad.',
            ],
            [
                'categoria' => 'guantes',
                'nombre' => 'Giro DND Gloves',
                'precio' => 20000,
                'sku' => 'DF-ACC-GU-003',
                'descripcion' => 'Guantes resistentes y cómodos para uso diario en montaña.',
            ],

            // Accesorios - Ropa
            [
                'categoria' => 'ropa',
                'nombre' => 'Fox Flexair Jersey',
                'precio' => 48000,
                'sku' => 'DF-ACC-RO-001',
                'descripcion' => 'Jersey ligero y transpirable diseñado para trail y enduro.',
            ],
            [
                'categoria' => 'ropa',
                'nombre' => 'Troy Lee Designs Sprint Jersey',
                'precio' => 55000,
                'sku' => 'DF-ACC-RO-002',
                'descripcion' => 'Jersey de alto rendimiento para conducción agresiva y competición.',
            ],
            [
                'categoria' => 'ropa',
                'nombre' => 'Fox Ranger Shorts',
                'precio' => 52000,
                'sku' => 'DF-ACC-RO-003',
                'descripcion' => 'Shorts resistentes y cómodos para recorridos de montaña.',
            ],

            // Accesorios - Componentes
            [
                'categoria' => 'componentes',
                'nombre' => 'Race Face Chester Pedals',
                'precio' => 42000,
                'sku' => 'DF-ACC-CO-001',
                'descripcion' => 'Pedales planos resistentes con excelente agarre para MTB.',
            ],
            [
                'categoria' => 'componentes',
                'nombre' => 'Maxxis Minion DHF',
                'precio' => 38000,
                'sku' => 'DF-ACC-CO-002',
                'descripcion' => 'Llanta de MTB diseñada para ofrecer agarre y control en terrenos exigentes.',
            ],
            [
                'categoria' => 'componentes',
                'nombre' => 'SRAM GX Eagle Chain',
                'precio' => 32000,
                'sku' => 'DF-ACC-CO-003',
                'descripcion' => 'Cadena de transmisión para sistemas MTB de 12 velocidades.',
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
