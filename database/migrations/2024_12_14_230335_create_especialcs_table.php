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
        Schema::create('especialcs', function (Blueprint $table) {
            $table->id();
            $table->string('gesion_mes_ce')->nullable();
            $table->string('evento_ce')->nullable();
            $table->string('duracion_ce')->nullable();
            $table->string('intitucion_ce')->nullable();
            $table->string('folio_ce')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialcs');
    }
};
