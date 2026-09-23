<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        PaymentMethod::create([
            'nombre' => 'Tarjeta',
            'descripcion' => 'Pago mediante tarjeta de crédito o débito.',
        ]);

        PaymentMethod::create([
            'nombre' => 'SINPE Móvil',
            'descripcion' => 'Pago mediante SINPE Móvil.',
        ]);

        PaymentMethod::create([
            'nombre' => 'Transferencia bancaria',
            'descripcion' => 'Pago mediante transferencia bancaria.',
        ]);
    }
}