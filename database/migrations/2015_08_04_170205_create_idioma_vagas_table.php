<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomaVagasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idioma_vagas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('idioma_id')->unsigned();
            $table->integer('vaga_id')->unsigned();
            $table->foreign('idioma_id')->references('id')->on('linguas')->onDelete('cascade');
            $table->foreign('vaga_id')->references('id')->on('vagas')->onDelete('cascade');
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
		Schema::drop('idioma_vagas');
	}

}
