<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('cpf');
            $table->string('rg');
            $table->string('sexo');
            $table->string('perfil');
            $table->date('data_nascimento');
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
        Schema::drop('participantes');
    }
}
