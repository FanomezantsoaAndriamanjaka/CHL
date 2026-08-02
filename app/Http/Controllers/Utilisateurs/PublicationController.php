<?php

namespace App\Http\Controllers\Utilisateurs;

use App\Http\Controllers\Controller;
use App\Models\Publication;

class PublicationController extends Controller
{

    /**
     * Liste des publications
     */
    public function index()
    {

        $publications = Publication::where('publie',true)
                        ->latest()
                        ->get();

        return view(
            'utilisateurs.publications.index',
            compact('publications')
        );

    }


    /**
     * Détail publication
     */
    public function show(Publication $publication)
    {

        return view(
            'utilisateurs.publications.show',
            compact('publication')
        );

    }

}