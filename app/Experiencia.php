<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model {

	protected $table = 'experiencias';
	protected $fillable = ['instituicao', 'cargo', 'anoIngresso', 'anoTermino'];
}
