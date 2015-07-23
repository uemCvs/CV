<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilitacaosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('habilitacaos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nivel');
			$table->string('anoDeConclusao');
			$table->string('curso');
			$table->date('sisEnsino');
			$table->string('instituicao');	
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
		Schema::drop('habilitacaos');
	}

}
