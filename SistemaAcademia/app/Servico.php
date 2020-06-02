<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'Servico';


public function Cliente(){
  return $this->hasOne(User::class,'id','UserID');
}

public function Personal(){
  return $this->hasOne(PersonalTrainer::class,'id','PersonalID');
}

public function AtividadeFisica(){
  return $this->hasOne(AtividadesFisicas::class,'id','AtividadeFisicaID');
}

}
