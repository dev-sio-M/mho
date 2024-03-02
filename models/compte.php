<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Model;

class Compte extends Authenticatable 
{
    protected $table = 'Compte';
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'prenom',
        'login',
        'mdp'
    ];

}
