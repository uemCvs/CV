<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class IdiomaVaga extends Model {

    protected $table="idioma_vagas";

    protected $fillable=["idioma_id","vaga_id"];

    public function idioma(){
        return $this->belongsTo('\App\lingua','idioma_id');
    }
    public function vaga(){
        return $this->belongsTo('\App\Vaga','vaga_id');
    }


}
