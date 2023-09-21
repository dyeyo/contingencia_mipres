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
        Schema::create('tbt_detalle_servicios_neps', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_mapiss')->nullable();
            $table->string('cant_mensual_servicio')->nullable();
            $table->string('no_mese_entrega_posf')->nullable();
            $table->string('causal_dev')->nullable();
            $table->string('obs_operador')->nullable();
            $table->unsignedBigInteger('tbt_servicios_neps_id')->nullable();

            $table->foreign('tbt_servicios_neps_id')->references('id')->on('tbt_servicios_neps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbt_detalle_servicios_neps');
    }
};
