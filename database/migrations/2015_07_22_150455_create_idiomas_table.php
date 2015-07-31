<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idiomas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->String('lingua');
            $table->String('dominioEsc');
            $table->String('dominioFala');
            $table->String('dominioLei');
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
		Schema::drop('idiomas');
	}

}
