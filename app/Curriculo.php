<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model {

	public function endereco(){
			return $this->hasOne('\App\Endereco');
	}

	public function estudante(){

			return $this->belongsTo('\App\Estudante');
	}
}
