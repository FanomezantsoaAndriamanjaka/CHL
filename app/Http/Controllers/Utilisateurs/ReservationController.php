<?php

namespace App\Http\Controllers\Utilisateurs;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Notification;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    /**
     * Formulaire réservation
     */
    public function create()
    {
        $publications = Publication::where('publie', true)
            ->where('reservation_disponible', true)
            ->get();

        return view(
            'utilisateurs.reservations.create',
            compact('publications')
        );
    }



    /**
     * Enregistrer réservation
     */
    public function store(Request $request)
    {

        $request->validate([

            'consultation' => 'required|string',

            'publication_id' => 'required|exists:publications,id',

            'date_reception' => 'required|date',

            'date_sortie' => 'nullable|date',

            'heure' => 'required',

            'contact_urgence' => 'required|string',

            'type_chambre' => 'nullable|string',

            'nombre_chambre' => 'nullable|integer',

            'description_maladie' => 'required|string',

        ]);



        // Service choisi par le patient
        $publication = Publication::findOrFail(
            $request->publication_id
        );




        $reservation = Reservation::create([

            'user_id' => Auth::id(),
        
            'publication_id' => $publication->id,
        
            'consultation' => $request->consultation,
        
            'date_reception' => $request->date_reception,
        
            'date_sortie' => $request->date_sortie,
        
            'heure' => $request->heure,
        
            'contact_urgence' => $request->contact_urgence,
        
            'type_chambre' => $request->type_chambre,
        
            'nombre_chambre' => $request->nombre_chambre,
        
            'description_maladie' => $request->description_maladie,
        
            'montant' => $publication->prix,
        
            'statut' => 'En attente',
        
        ]);
                    // Notification ho an'ny admin rehetra

            $admins = User::where('role','admin')->get();


            foreach($admins as $admin){

                Notification::create([

                    'user_id' => $admin->id,
                
                    'reservation_id' => $reservation->id,
                
                    'titre' => 'Nouvelle réservation',
                
                    'message' =>
                        'Nouvelle réservation de '
                        . Auth::user()->nom
                        . ' '
                        . Auth::user()->prenom,
                
                    'lu' => false,
                
                ]);

            }




        /*
        |--------------------------------------------------------------------------
        | Notification ADMIN
        |--------------------------------------------------------------------------
        */


        $admins = User::where('role','admin')->get();



        foreach($admins as $admin)
        {
            Notification::create([

                'user_id' => $admin->id,
            
                'titre' => 'Nouvelle réservation',
            
                'message' => 
                    'Nouvelle réservation de '
                    .Auth::user()->nom
                    .' '
                    .Auth::user()->prenom,
            
                'lu' => false,
            
            ]);

        }





        return redirect()

            ->route('dashboard')

            ->with(

                'success',

                'Votre réservation a été envoyée avec succès.'

            );

    }






    /**
     * Historique réservations utilisateur
     */
    public function historique()
    {

        $reservations = Reservation::where('user_id', Auth::id())

            ->with('publication')

            ->latest()

            ->get();



        return view(

            'utilisateurs.reservations.historique',

            compact('reservations')

        );

    }







    /**
     * Détail réservation
     */
    public function show($id)
    {
        $reservation = Reservation::where('id',$id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
    
    
        return view(
            'utilisateurs.reservations.show',
            compact('reservation')
        );
    }







    /**
     * Supprimer réservation
     */
    public function destroy($id)
    {

        $reservation = Reservation::where('user_id', Auth::id())

            ->findOrFail($id);



        $reservation->delete();



        return redirect()

            ->back()

            ->with(

                'success',

                'Réservation supprimée avec succès.'

            );

    }


}