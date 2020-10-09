<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_models', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('sigla', 100)->nullable();
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('curso');
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
        Schema::dropIfExists('turma_models');
    }
}
