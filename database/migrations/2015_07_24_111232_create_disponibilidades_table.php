<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisponibilidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disponibilidades', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('disp');
            $table->time('tempoInicio')->nullable();
            $table->time('tempoFim')->nullable();
            $table->LongText('descricao')->nullable();

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
		Schema::drop('disponibilidades');
	}

}
