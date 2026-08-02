<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facture;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FactureController extends Controller
{
    /**
     * Liste des factures.
     */
    public function index(Request $request)
    {
        $factures = Facture::with('reservation.user')
            ->when($request->search, function ($query) use ($request) {
                $query->where(
                    'numero_facture',
                    'like',
                    '%' . $request->search . '%'
                );
            })
            ->latest()
            ->paginate(10);

        return view(
            'admin.factures.index',
            compact('factures')
        );
    }

    /**
     * Détail d'une facture.
     */
    public function show(Facture $facture)
    {
        $facture->load('reservation.user');

        return view(
            'admin.factures.show',
            compact('facture')
        );
    }

    /**
     * Enregistrer le paiement.
     */
    public function payer(Facture $facture)
    {
        $facture->update([
            'statut' => 'Payée',
            'date_paiement' => now(),
        ]);

        return back()->with(
            'success',
            'Paiement enregistré avec succès.'
        );
    }

    /**
     * Télécharger la facture en PDF.
     */
    public function pdf(Facture $facture)
    {
        $facture->load('reservation.user');

        $pdf = Pdf::loadView(
            'admin.factures.pdf',
            compact('facture')
        );

        return $pdf->download(
            $facture->numero_facture . '.pdf'
        );
    }
}