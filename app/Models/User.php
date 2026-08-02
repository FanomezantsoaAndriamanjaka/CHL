<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Les attributs autorisés en Mass Assignment
     */
    protected $fillable = [

        'nom',
    
        'prenom',
    
        'sexe',
    
        'date_naissance',
    
        'lieu_naissance',
    
        'nationalite',
    
        'telephone',
    
        'email',
    
        'adresse',
    
        'ville',
    
        'pays',
    
        'photo_profil',
    
        'cin',
    
        'photo_cin',
    
        'passeport',
    
        'photo_passeport',
    
        'profession',
    
        'langue',
    
        'password',
    
        'role',
    
        'actif',
    
    ];

    /**
     * Les attributs cachés
     */
    protected $hidden = [

        'password',
        'remember_token',

    ];

    /**
     * Les conversions automatiques
     */
    protected function casts(): array
    {
        return [

            'email_verified_at' => 'datetime',

            'password' => 'hashed',

            'date_naissance' => 'date',

            'actif' => 'boolean',

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    // Un utilisateur possède plusieurs réservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    // Un utilisateur possède plusieurs notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

}