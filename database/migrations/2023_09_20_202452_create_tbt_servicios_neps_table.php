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
        Schema::create('tbt_servicios_neps', function (Blueprint $table) {
            $table->id();
            $table->string('nin_id')->nullable();
            $table->string('no_mipres')->nullable();
            $table->string('fecha_ordenamiento')->nullable();
            $table->string('codigo_habilitacion')->nullable();
            $table->string('nit_ips_prescriptora')->nullable();
            $table->string('doc_prof_en_salud')->nullable();
            $table->string('tipo_doc')->nullable();
            $table->string('no_idenficacion_afiliado')->nullable();
            $table->string('cod_enfermedad_huerfana')->nullable();
            $table->string('nombre_enfermedad_huerfana')->nullable();
            $table->string('cod_dx_principal')->nullable();
            $table->string('tipo_tecnologia')->nullable();
            $table->string('indicacion')->nullable();
            $table->string('idips')->nullable();
            $table->string('estado')->nullable();
            $table->string('ncargue')->nullable();
            $table->unsignedBigInteger('user_dig_id')->nullable();
            $table->unsignedBigInteger('user_adui_id')->nullable();

            $table->foreign('user_dig_id')->references('id')->on('users');
            $table->foreign('user_adui_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbt_servicios_neps');
    }
};
