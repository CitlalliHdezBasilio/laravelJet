<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('apellidoPaterno',30);
            $table->string('apellidoMaterno',30);
            $table->string('sobrenombre',30)->nullable();
            $table->integer('genero_id')->default(0);
            $table->integer('genero_identifica')->default(0);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('lugar_nacimiento',80)->nullable();
            $table->string('domicilio',80)->nullable();
            $table->integer('originario')->default(0);
            $table->integer('tiempo_residencia')->default(0);
            $table->string('curp',18)->nullable();
            $table->string('rfc',13)->nullable();
            $table->string('clave_elector',18)->nullable();
            $table->integer('numero_emision')->default(0);
            $table->integer('CIC')->default(0);
            $table->integer('OCR')->default(0);
            $table->integer('numero_telefonico')->default(0);
            $table->string('correo_electronico',35)->nullable();
            $table->integer('ocupacion_id')->default(0);
            $table->integer('grado_id')->nullable();
            $table->integer('etnia_id')->nullable();
            $table->integer('grupoad_id')->default(0);
            $table->integer('originario_ambito')->default(0);
            $table->integer('habla_indigena')->default(0);
            $table->integer('vulnerable_id')->default(0);
            $table->integer('diversidad_id')->default(0);
            $table->string('otro_diversidad',40)->nullable();
            $table->integer('privacidad')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
