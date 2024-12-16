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
        Schema::create('otrocs', function (Blueprint $table) {
            $table->id();
            $table->string('gesion_mes_co')->nullable();
            $table->string('evento_co')->nullable();
            $table->string('duracion_co')->nullable();
            $table->string('intitucion_co')->nullable();
            $table->string('folio_co')->nullable();
            //idioma
            $table->string('idioma')->nullable();
            $table->string('institucion_i')->nullable();
            $table->string('lectura')->nullable();
            $table->string('escritura')->nullable();
            $table->string('conversacion')->nullable();
            $table->string('folio_i')->nullable();
            
            //Conocimiento
            $table->string('curso_c')->nullable();
            $table->string('nivel_cono')->nullable();
            $table->string('folio_c')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otrocs');
    }
};
