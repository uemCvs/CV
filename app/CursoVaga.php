<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoVaga extends Model {
    protected $table="curso_vagas";

	protected $fillable=["curso_id","vaga_id"];

    public function curso(){
        return $this->belongsTo('\App\Curso','curso_id');
    }
    public function vaga(){
        return $this->belongsTo('\App\Vaga','vaga_id');
    }

}
