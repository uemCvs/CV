<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutraQualificacaosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outra_qualificacaos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nomeCurso');
            $table->string('nomeInstituicao');
            $table->string('anoConclusao');
            $table->timestamps();
		});
	}

	/**m
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('outra_qualificacaos');
	}

}
