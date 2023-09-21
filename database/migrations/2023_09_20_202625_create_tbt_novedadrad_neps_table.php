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
        Schema::create('tbt_novedadrad_neps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('nin_id')->nullable();
            $table->unsignedBigInteger('estado_nin')->nullable();

            $table->foreign('user_id')->references('id')->on('tbt_servicios_neps');
            $table->foreign('nin_id')->references('id')->on('tbt_servicios_neps');
            $table->foreign('estado_nin')->references('id')->on('tbt_servicios_neps');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbt_novedadrad_neps');
    }
};
