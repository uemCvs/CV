<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model {

	public function vaga()
	    {
	        return $this->belongsToMany('App\Vaga');
	    }
}
