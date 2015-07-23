<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('qualificoes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nomeCurso');
			$table->string('instituicao');
			$table->string('anoConclusao');
			$table->binary('certificado')->nullable();
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
		Schema::drop('qualificoes');
	}

}
