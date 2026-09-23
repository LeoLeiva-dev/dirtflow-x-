<?php

namespace Database\Seeders;

use App\Models\Direccion;
use App\Models\Email;
use App\Models\Persona;
use App\Models\Telefono;
use Illuminate\Database\Seeder;

class CustomerDataSeeder extends Seeder
{
    public function run(): void
    {
        $cliente = Persona::where('identificacion', '106530728')
            ->firstOrFail();

        $cliente->emails()->create([
            'email' => 'jimena.rodriguez@dirtflow.test',
            'principal' => true,
        ]);

        $cliente->telefonos()->create([
            'numero' => '8888-1234',
            'tipo' => 'Celular',
            'principal' => true,
        ]);

        $cliente->direcciones()->create([
            'tipo' => 'Casa',
            'provincia' => 'Cartago',
            'canton' => 'Cartago',
            'distrito' => 'Oriental',
            'detalle' => '100 metros norte del parque central.',
            'principal' => true,
        ]);
    }
}