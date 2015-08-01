<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model {

    protected $table = 'enderecos';


		public function curriculo(){
				return $this->belongsTo('\App\Curriculo');
		}

		public function utilizador(){
				return $this->belongsTo('\App\User');
		}
	}
