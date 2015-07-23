<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('apelido');
			$table->string('outrosNomes');
			$table->date('dataNascimento');
			$table->string('nrEstudante');
			$table->string('curso');
			$table->string('nivel');
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
		Schema::drop('estudantes');
	}

}
