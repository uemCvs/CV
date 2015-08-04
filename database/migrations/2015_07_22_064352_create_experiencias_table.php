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
			$table->string('cargo')->nullable();
			$table->string('anoIngresso');
			$table->string('anoTermino');
			$table->integer('curriculo_id')->unsigned();
			$table->foreign('curriculo_id')->references('id')->on('curriculos')->onDelete('cascade');
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
