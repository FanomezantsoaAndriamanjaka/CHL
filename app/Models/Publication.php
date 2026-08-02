<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory;

    /**
     * Les attributs autorisés
     */
    protected $fillable = [
 
        'nom',
        'slug',
        'categorie',
        'description',
        'image',
        'prix',
        'reservation_disponible',
        'publie',

    ];

    /**
     * Les conversions automatiques
     */
    protected function casts(): array
    {
        return [

            'prix' => 'decimal:2',

            'reservation_disponible' => 'boolean',

            'publie' => 'boolean',

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    // Une publication peut avoir plusieurs réservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}