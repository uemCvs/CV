<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referencias', function(Blueprint $table)
		{
			$table->increments('id');
            $table->longText('referencia');
			$table->timestamps();
            $table->integer('curriculo_id')->unsigned();
            $table->foreign('curriculo_id')->references('id')->on('curriculos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('referencias');
	}

}
