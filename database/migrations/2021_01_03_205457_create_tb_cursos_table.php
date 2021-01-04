<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_curso', function (Blueprint $table) {
            $table->id();
            $table->string('nom_curso');
            $table->integer('horas_duracion');
            $table->date('fec_inicio');
            $table->date('fec_fin');
            $table->string('sede');
            $table->boolean('jornada_diurna')->default(false);
            $table->boolean('jornada_nocturna')->default(false);
            $table->text('descripcion');
            $table->text('url_img');
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
        Schema::dropIfExists('tb_cursos');
    }
}
