<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class referencia extends Model {

    public function Curriculo()
    {
        return $this->belongsTo('App\Curriculo');

    }

}
