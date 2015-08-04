<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{


    public function estudante()
    {

        return $this->belongsTo('\App\Estudante');
    }

    public function disponibilidade()
    {
        return $this->hasMany('App\disponibilidade');
    }

    public function Idioma()
    {
        return $this->hasMany('App\Idioma');
    }

    public function OutraQualificacao()
    {
        return $this->hasMany('App\OutraQualificacao');
    }

    public function referencia()
    {
        return $this->hasMany('App\referencia');

    }

    public function HabilitacaoIntelectual()
    {
        return $this->hasMany('App\HabilitacaoIntelectual');

    }

    public function habilitacao(){
  	  	return $this->hasMany('\App\Habilitacao');
  	}

  	public function experiencia(){
  	  	return $this->hasMany('\App\Experiencia');
  	}
}
