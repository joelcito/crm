<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creador_id')->nullable();
            $table->foreign('creador_id')->references('id')->on('users');
            $table->unsignedBigInteger('modificador_id')->nullable();
            $table->foreign('modificador_id')->references('id')->on('users');
            $table->unsignedBigInteger('eliminador_id')->nullable();
            $table->foreign('eliminador_id')->references('id')->on('users');
            $table->unsignedBigInteger('componente_id')->nullable();
            $table->foreign('componente_id')->references('id')->on('componentes');
            $table->unsignedBigInteger('respuesta_id')->nullable();
            $table->foreign('respuesta_id')->references('id')->on('respuestas');
            // $table->unsignedBigInteger('asignacion_id')->nullable();
            // $table->foreign('asignacion_id')->references('id')->on('asignaciones');
            $table->unsignedBigInteger('campania_id')->nullable();
            $table->foreign('campania_id')->references('id')->on('campanias');
            $table->string('requirido',1)->nullable();
            $table->text('pregunta')->nullable();
            $table->text('nombre')->nullable();
            $table->string('estado')->nullable();
            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('formularios');
    }
}
