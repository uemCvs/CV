<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model {

    //ManyToOne
    public function cursos(){
        return $this->hasMany('App\Curso');}

}
