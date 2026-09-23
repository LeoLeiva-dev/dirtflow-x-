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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();

            $table->foreignId('persona_id')
                ->constrained('personas')
                ->restrictOnDelete();

            $table->string('tipo')->nullable();
            $table->string('provincia');
            $table->string('canton');
            $table->string('distrito');
            $table->text('detalle');

            $table->boolean('principal')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direcciones');
    }
};
