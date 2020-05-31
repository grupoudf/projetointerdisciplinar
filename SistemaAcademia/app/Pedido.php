<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'Pedido';

    public function AtividadeDoPedido(){
      return $this->hasOne(AtividadesFisicas::class,'id','AtividadeFisicaID');
    }

    public function Usuarios(){
      return $this->hasOne(User::class,'id','UserId');
    }

    public function Candidatos(){

    return $this->hasMany(CandidatosDoPedido::class, 'PedidoID', 'id');
    }

}
