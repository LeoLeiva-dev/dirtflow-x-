<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $administrador = Persona::create([
            'nombre' => 'Leonardo',
            'ap1' => 'Leiva',
            'ap2' => 'Gómez',
            'identificacion' => '305660930',
            'fecha_nacimiento' => '2006-08-09',
        ]);

        $adminUser = User::create([
            'persona_id' => $administrador->id,
            'email' => 'adminleo@dirtflow.test',
            'password' => '12345678',
        ]);

        $adminRole = Role::where('nombre', 'Administrador')->firstOrFail();

        $adminUser->roles()->attach($adminRole->id);


        $cliente = Persona::create([
            'nombre' => 'Jimena',
            'ap1' => 'Rodríguez',
            'ap2' => 'Mora',
            'identificacion' => '106530728',
            'fecha_nacimiento' => '2008-06-15',
        ]);

        $clienteUser = User::create([
            'persona_id' => $cliente->id,
            'email' => 'c1jimena@dirtflow.test',
            'password' => '1234',
        ]);

        $clienteRole = Role::where('nombre', 'Cliente')->firstOrFail();

        $clienteUser->roles()->attach($clienteRole->id);
    }
}