<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OutraQualificacao extends Model {

	protected $table = 'outra_Qualificacaos';
    public function Curriculo()
    {
        return $this->belongsTo('App\Curriculo');

    }


}
