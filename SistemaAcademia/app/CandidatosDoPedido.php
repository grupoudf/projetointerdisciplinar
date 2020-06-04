<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidatosDoPedido extends Model
{

  protected $table = 'CandidadosDoPedido';
  public $timestamps = false;

  public function Personal(){
    return $this->hasMany(PersonalTrainer::class, 'id', 'PersonalID');
  }
}
