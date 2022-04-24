<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAsignacionIdToFormularios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formularios', function (Blueprint $table) {
            $table->unsignedBigInteger('asignacion_id')->nullable()->after('campania_id');
            $table->foreign('asignacion_id')->references('id')->on('asignaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formularios', function (Blueprint $table) {
            $table->dropForeign(["asignacion_id"]);
            $table->dropColumn("asignacion_id");
        });
    }
}
