<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->string('website');
            $table->string('local');
            $table->dateTime('data_inicio');
            $table->dateTime('data_termino');
            $table->dateTime('data_inicio_inscricao');
            $table->dateTime('data_termino_inscricao');
            $table->dateTime('data_inicio_submissao');
            $table->dateTime('data_termino_submissao');
            $table->decimal('taxa_professor', 6, 2);
            $table->decimal('taxa_estudante', 6, 2);
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
        Schema::dropIfExists('eventos');
    }
}
