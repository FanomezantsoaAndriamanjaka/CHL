<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Facture;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    /**
     * Les attributs autorisés
     */
    protected $fillable = [

        'user_id',
        
        'publication_id',

        'consultation',

        'date_reception',

        'date_sortie',

        'heure',

        'contact_urgence',

        'type_chambre',

        'nombre_chambre',

        'description_maladie',

        'montant',

        'statut',

        'commentaire_admin',

    ];

    /**
     * Les conversions automatiques
     */
    protected function casts(): array
    {
        return [

            'date_reception' => 'date',

            'date_sortie' => 'date',

            'montant' => 'decimal:2',

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    // Patient
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Service réservé
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    // Une réservation possède une facture
    public function facture()
    {
        return $this->hasOne(Facture::class);
    }

}