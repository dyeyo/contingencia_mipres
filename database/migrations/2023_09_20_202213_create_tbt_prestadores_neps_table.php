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
        Schema::create('tbt_prestadores_neps', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_prestador_o_proveedor')->nullable();
            $table->string('nombre_sucursal')->nullable();
            $table->string('nit_IPS')->nullable();
            $table->string('codigo_habiliacion')->nullable();
            // $table->string('codigo_habiliacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbt_prestadores_neps');
    }
};
