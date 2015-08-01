<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {

	public function email(){
	  	return $this->hasMany('\App\Email');
	}

	public function telefone(){
	  	return $this->hasMany('\App\Telefone');
	}

}
