<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model {

	public function curso()
    {
        return $this->belongsToMany('App\curso');
    }

}
