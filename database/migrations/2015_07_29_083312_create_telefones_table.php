<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('telefones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('telefone');
			$table->integer('contacto_id')->unsigned();
			$table->timestamps();
			$table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('telefones');
	}

}
