<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'nombre' => 'Administrador',
            'descripcion' => 'Usuario con acceso a las funciones administrativas del sistema.',
        ]);

        Role::create([
            'nombre' => 'Cliente',
            'descripcion' => 'Usuario que puede consultar productos, gestionar su carrito y realizar pedidos.',
        ]);
    }
}
