<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Publication;

class ReservationController extends Controller
{

    /**
     * Liste des réservations
     */
    public function index()
    {
        $reservations = Reservation::latest()->get();

        return view('admin.reservations.index', compact('reservations'));
    }


    /**
     * Détail réservation admin
     */
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view(
            'admin.reservations.show',
            compact('reservation')
        );
    }

    public function create()
    {

        $publications = Publication::where('statut','Actif')
            ->get();


        return view(
            'reservations.create',
            compact('publications')
        );

    }
}