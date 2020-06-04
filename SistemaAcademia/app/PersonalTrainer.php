<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PersonalTrainer extends Authenticatable
{
    // Definindo qual tabela esse model irá se conectar
    protected $table = 'PersonalTrainer';
    // Definindo guard
    protected $guard = 'PersonalTrainer';
    // Definindo campos como "preenchiveis"
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['nascimento'];

    public function AtividadeDoPersonal(){
      return $this->hasOne(AtividadesFisicas::class,'id','AtividadeFisicaID');
    }

    public function Servicos(){
      return $this->hasMany(Servico::class,'PersonalId','id');
    }

    public function TipoUsuario(){
      return $this->hasOne(Privilegios::class,'id','privilegios');
    }
}
