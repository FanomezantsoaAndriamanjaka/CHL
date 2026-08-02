<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    /**
     * Les attributs autorisés
     */
    protected $fillable = [

        'facture_id',

        'montant',

        'methode',

        'reference',

        'date_paiement',

        'statut',

        'observation',

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

    // Un paiement appartient à une facture
    public function facture()
    {
        return $this->belongsTo(Facture::class);
    }
}