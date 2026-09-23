<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')
                ->unique()
                ->constrained('orders')
                ->cascadeOnDelete();

            $table->string('provincia');
            $table->string('canton');
            $table->string('distrito');
            $table->text('detalle');

            $table->string('transportista')->nullable();
            $table->string('numero_guia')->nullable();

            $table->string('estado')->default('pendiente');

            $table->timestamp('enviado_at')->nullable();
            $table->timestamp('entregado_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
