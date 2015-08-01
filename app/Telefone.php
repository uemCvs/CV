<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model {

	public function contacto(){
			return $this->belongsTo('\App\Contacto');
	}

}
