<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Categoría principal
        $bicicletas = Category::create([
            'nombre' => 'Bicicletas',
            'slug' => 'bicicletas',
            'descripcion' => 'Bicicletas para diferentes modalidades de ciclismo.',
        ]);

        // Categorías principales
        $mtb = Category::create([
            'parent_id' => $bicicletas->id,
            'nombre' => 'MTB',
            'slug' => 'mtb',
            'descripcion' => 'Bicicletas de montaña.',
        ]);

        $ruta = Category::create([
            'parent_id' => $bicicletas->id,
            'nombre' => 'Ruta',
            'slug' => 'ruta',
            'descripcion' => 'Bicicletas diseñadas para ciclismo de carretera.',
        ]);

        // Subcategorías MTB
        Category::create([
            'parent_id' => $mtb->id,
            'nombre' => 'Trail',
            'slug' => 'trail',
            'descripcion' => 'Bicicletas para recorridos de montaña y terrenos variados.',
        ]);

        Category::create([
            'parent_id' => $mtb->id,
            'nombre' => 'Enduro',
            'slug' => 'enduro',
            'descripcion' => 'Bicicletas para descensos técnicos y terrenos exigentes.',
        ]);

        Category::create([
            'parent_id' => $mtb->id,
            'nombre' => 'Downhill',
            'slug' => 'downhill',
            'descripcion' => 'Bicicletas especializadas para descenso.',
        ]);

        // Subcategorías Ruta
        Category::create([
            'parent_id' => $ruta->id,
            'nombre' => 'Performance',
            'slug' => 'performance',
            'descripcion' => 'Bicicletas de ruta orientadas al rendimiento.',
        ]);

        Category::create([
            'parent_id' => $ruta->id,
            'nombre' => 'Endurance',
            'slug' => 'endurance',
            'descripcion' => 'Bicicletas de ruta orientadas a comodidad y largas distancias.',
        ]);

        // Categoría principal
        $accesorios = Category::create([
            'nombre' => 'Accesorios',
            'slug' => 'accesorios',
            'descripcion' => 'Accesorios y equipamiento para complementar cada salida.',
        ]);

        // Subcategorías de accesorios
        Category::create([
            'parent_id' => $accesorios->id,
            'nombre' => 'Cascos',
            'slug' => 'cascos',
            'descripcion' => 'Cascos para protección y seguridad durante cada recorrido.',
        ]);

        Category::create([
            'parent_id' => $accesorios->id,
            'nombre' => 'Protecciones',
            'slug' => 'protecciones',
            'descripcion' => 'Protecciones para mejorar la seguridad en terrenos exigentes.',
        ]);

        Category::create([
            'parent_id' => $accesorios->id,
            'nombre' => 'Guantes',
            'slug' => 'guantes',
            'descripcion' => 'Guantes para mejorar el agarre y la comodidad durante la conducción.',
        ]);

        Category::create([
            'parent_id' => $accesorios->id,
            'nombre' => 'Ropa',
            'slug' => 'ropa',
            'descripcion' => 'Ropa y equipamiento para acompañar cada recorrido.',
        ]);

        Category::create([
            'parent_id' => $accesorios->id,
            'nombre' => 'Componentes',
            'slug' => 'componentes',
            'descripcion' => 'Componentes y piezas para mejorar y mantener tu bicicleta.',
        ]);

    }
}
