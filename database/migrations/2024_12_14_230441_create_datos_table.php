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
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellido_pat');
            $table->string('apellido_mat');
            $table->string('estado_civil');
            $table->string('apellido_casada')->nullable();
            $table->string('nacionalidad');
            $table->string('direccion');
            $table->date('fecha_nac');
            $table->string('provincia');
            $table->string('canton');
            $table->string('departamento');
            $table->string('serie_libreta_mil')->nullable();
            $table->string('n_libreta_mil')->nullable();
            $table->string('nro_matricula')->nullable();
            $table->string('tipo_sangre');
            $table->string('ci');
            $table->string('emision');
            $table->string('afp');
            $table->string('n_n_cua');
            $table->string('n_seguro');
            $table->string('telefono')->nullable();
            $table->string('celular');
            $table->string('contacto_emer');
            $table->string('celular_emer');
            $table->string('email');
            $table->string('clave');
            //financiera            
            $table->string('institucion');
            $table->string('n_cuenta');
            //Grado
            $table->unsignedBigInteger('id_grados');
            //cursos especiales
            $table->unsignedBigInteger('id_especialcs');
            //otros cursos
            $table->unsignedBigInteger('id_otrocs');
            //experiencia
            $table->string('desde_mes_e')->nullable();
            $table->string('desde_gestion_e')->nullable();
            $table->string('hasta_mes_e')->nullable();
            $table->string('hasta_gestion_e')->nullable();
            $table->string('cargo_e')->nullable();
            $table->string('nom_empresa_e')->nullable();
            $table->string('tel_empresa_e')->nullable();
            $table->string('motivo_e')->nullable();
            $table->string('folio_e')->nullable();

            $table->unsignedBigInteger('id_identidades');
            $table->unsignedBigInteger('id_documentos');

            $table->foreign('id_grados')->references('id')->on('grados')->onDelete('cascade');
            $table->foreign('id_especialcs')->references('id')->on('especialcs')->onDelete('cascade');
            $table->foreign('id_otrocs')->references('id')->on('otrocs')->onDelete('cascade');
            $table->foreign('id_identidades')->references('id')->on('identidads')->onDelete('cascade');
            $table->foreign('id_documentos')->references('id')->on('documentos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos');
    }
};
