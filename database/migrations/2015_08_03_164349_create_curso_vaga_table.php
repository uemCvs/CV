<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoVagaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso_vaga', function(Blueprint $table)
		{

		$table->integer('curso_id')->unsigned();
		$table->integer('vaga_id')->unsigned();
		$table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
		$table->foreign('vaga_id')->references('id')->on('vagas')->onDelete('cascade');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('curso_vaga');
	}

}
