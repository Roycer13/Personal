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
        Schema::create('grados', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('mes');
            $table->string('gestion');
            $table->string('instituto');
            $table->string('ciudad_pais');
            $table->string('folio_g')->nullable();
            //otros grados academicos
            $table->string('titulo1')->nullable();
            $table->string('descripcion1')->nullable();
            $table->string('mes1')->nullable();
            $table->string('gestion1')->nullable();
            $table->string('instituto1')->nullable();
            $table->string('ciudad_pais1')->nullable();
            $table->string('folio_g1')->nullable();
            $table->string('titulo2')->nullable();
            $table->string('descripcion2')->nullable();
            $table->string('mes2')->nullable();
            $table->string('gestion2')->nullable();
            $table->string('instituto2')->nullable();
            $table->string('ciudad_pais2')->nullable();
            $table->string('folio_g2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grados');
    }
};
