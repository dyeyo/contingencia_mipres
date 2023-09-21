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
        Schema::create('tbm_mapiss_neps', function (Blueprint $table) {
            $table->id();
            $table->string('copdigo')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('tipo_plan')->nullable();
            $table->string('fecha_autorizacion')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbm_mapiss_neps');
    }
};
