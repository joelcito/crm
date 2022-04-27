<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPreguntaIdToValorCombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valor_combos', function (Blueprint $table) {
            $table->unsignedBigInteger('pregunta_id')->nullable()->after('eliminador_id');
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valor_combos', function (Blueprint $table) {
            $table->dropForeign(["pregunta_id"]);
            $table->dropColumn("pregunta_id");
        });
    }
}
