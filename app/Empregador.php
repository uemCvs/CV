<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Empregador extends Model {


    public function utilizador(){

        return $this->belongsTo('\App\User');
    }

}
