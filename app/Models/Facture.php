<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;

    /**
     * Les attributs autorisés
     */
    protected $fillable = [

        'reservation_id',

        'numero_facture',

        'montant',

        'mode_paiement',

        'reference_paiement',

        'date_paiement',

        'statut',

        'pdf',

        'commentaire',

    ];

    /**
     * Les conversions automatiques
     */
    protected function casts(): array
    {
        return [

            'montant' => 'decimal:2',

            'date_paiement' => 'datetime',

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    // Une facture appartient à une réservation
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    // Une facture possède plusieurs paiements
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}