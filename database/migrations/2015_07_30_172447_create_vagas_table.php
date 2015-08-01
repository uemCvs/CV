<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vagas', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->string('cursos')->nullable();
            $table->integer('nrVagas')->nullable();
            $table->string('sistemaEnsino')->nullable();
            $table->string('idioma')->nullable();
            $table->string('outroCurso')->nullable();
            $table->string('disponibilidade')->nullable();
            $table->longText('competencia')->nullable();
            $table->longText('condicoesOferecidas')->nullable();

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
		Schema::drop('vagas');
	}

}
