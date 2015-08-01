<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class disponibilidade extends Model
{

    protected $fillable = ['disp', 'tempoInicio', 'tempoFim', 'descricao'];

    public function Curriculo()
    {
        return $this->belongsTo('App\Curriculo');

    }
}
