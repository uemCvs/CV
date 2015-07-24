<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model {

	protected $table = 'estudantes';
	public function utilizador(){
			return $this->belongsTo('\App\User');
	}

}
