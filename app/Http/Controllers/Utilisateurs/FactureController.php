<?php

namespace App\Http\Controllers\Utilisateurs;

use App\Http\Controllers\Controller;
use App\Models\Facture;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class FactureController extends Controller
{


    /**
     * Liste des factures utilisateur
     */
    public function index()
    {

        $factures = Facture::whereHas('reservation', function($query){

            $query->where('user_id', Auth::id());

        })
        ->with([
            'reservation.publication'
        ])
        ->latest()
        ->paginate(10);


        return view(
            'utilisateurs.factures.index',
            compact('factures')
        );

    }



    /**
     * Détail facture
     */
    public function show($id)
    {

        $facture = Facture::whereHas('reservation', function($query){

            $query->where('user_id', Auth::id());

        })
        ->with([
            'reservation.publication'
        ])
        ->findOrFail($id);



        return view(
            'utilisateurs.factures.show',
            compact('facture')
        );

    }

        public function pdf($id)
    {

        $facture = Facture::whereHas('reservation', function($query){

            $query->where('user_id', auth()->id());

        })
        ->with([
            'reservation.publication',
            'reservation.user'
        ])
        ->findOrFail($id);



        $pdf = Pdf::loadView(
            'utilisateurs.factures.pdf',
            compact('facture')
        )
        ->setPaper('A4', 'portrait');



        return $pdf->download(
            'Facture-'.$facture->numero_facture.'.pdf'
        );

    }


}