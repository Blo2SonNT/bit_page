<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrecioToTbCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_curso', function (Blueprint $table) {
            $table->float('precio', 12, 2)->unsigned()->nullable()->after('nom_curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_curso', function (Blueprint $table) {
            $table->dropColumn('precio');
        });
    }
}
