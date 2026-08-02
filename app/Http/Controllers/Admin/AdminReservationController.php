<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Facture;
use App\Models\Notification;
use Carbon\Carbon;

class AdminReservationController extends Controller
{
    /**
     * Liste des réservations
     */
    public function index()
    {
        $reservations = Reservation::with('user')
            ->latest()
            ->paginate(10);

        return view(
            'admin.reservations.index',
            compact('reservations')
        );
    }

    /**
     * Détails d'une réservation
     */
    public function show(Reservation $reservation)
    {
        return view(
            'admin.reservations.show',
            compact('reservation')
        );
    }

    /**
     * Accepter une réservation
     */
    public function accepter(Reservation $reservation)
    {
        // Mise à jour du statut
        $reservation->update([
            'statut' => 'Confirmée',
        ]);

        // Création automatique de la facture
        Facture::firstOrCreate(

            [
                'reservation_id' => $reservation->id,
            ],

            [
                'numero_facture' => 'FAC-' . date('Ymd') . '-' . $reservation->id,
                'montant'         => $reservation->montant ?? 0,
                'statut'          => 'En attente',
            ]

        );

        // Notification patient
        Notification::create([

            'user_id'        => $reservation->user_id,

            'reservation_id' => $reservation->id,

            'titre'          => 'Réservation confirmée',

            'message'        =>
                'Votre réservation pour "' .
                $reservation->consultation .
                '" prévue le ' .
                Carbon::parse($reservation->date_reception)->format('d/m/Y') .
                ' à ' .
                Carbon::parse($reservation->heure)->format('H:i') .
                ' a été confirmée.',

            'lu' => false,

        ]);

        return back()->with(
            'success',
            'Réservation acceptée avec succès.'
        );
    }

    /**
     * Refuser une réservation
     */
    public function refuser(Reservation $reservation)
    {
        // Mise à jour du statut
        $reservation->update([
            'statut' => 'Refusée',
        ]);

        // Notification patient
        Notification::create([

            'user_id'        => $reservation->user_id,

            'reservation_id' => $reservation->id,

            'titre'          => 'Réservation refusée',

            'message'        =>
                'Votre réservation pour "' .
                $reservation->consultation .
                '" prévue le ' .
                Carbon::parse($reservation->date_reception)->format('d/m/Y') .
                ' à ' .
                Carbon::parse($reservation->heure)->format('H:i') .
                ' a été refusée.',

            'lu' => false,

        ]);

        return back()->with(
            'success',
            'Réservation refusée.'
        );
    }
}