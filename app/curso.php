<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

    public function vaga()
    {
        return $this->belongsToMany('App\Vaga');
    }

}

