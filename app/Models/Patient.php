<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Patient extends Authenticatable
{

    protected $fillable = [

        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'lieu_naissance',
        'nationalite',
        'cin',
        'passeport',
        'photo_profil',
        'adresse',
        'ville',
        'pays',
        'telephone',
        'email',
        'password',
        'profession',
        'langue',
        'photo_cin',
        'photo_passeport'

    ];



    protected $hidden = [

        'password'

    ];


    public function patient()
    {
        return $this->hasOne(Patient::class);
    }



}