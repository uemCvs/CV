<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experiencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('instituicao');
			$table->string('cargo');
			$table->string('anoIngresso');
			$table->string('anoTermino');
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
		Schema::drop('experiencias');
	}

}
