<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curriculos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('estudante_id')->unsigned();
			$table->timestamps();
			$table->foreign('estudante_id')->references('id')->on('estudantes')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('curriculos');
	}

}
