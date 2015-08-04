<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilitacao extends Model {

	protected $table = 'habilitacaos';

	public function Curriculo()
	{
			return $this->belongsTo('App\Curriculo');

	}

}
