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
}
