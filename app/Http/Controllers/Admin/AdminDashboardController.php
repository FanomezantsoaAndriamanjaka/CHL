<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Facture;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{

    public function index()
    {


        /*
        |--------------------------------------------------------------------------
        | PATIENTS
        |--------------------------------------------------------------------------
        */


        // Nombre total de patients
        $patients = User::where('role', 'patient')
            ->count();



        // Nouveaux patients aujourd'hui
        $nouveauxPatients = User::where('role', 'patient')
            ->whereDate('created_at', today())
            ->count();



        // Patients par mois (Graphique)
        $patientsParMois = User::where('role', 'patient')
            ->select(
                DB::raw('MONTH(created_at) as mois'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();





        /*
        |--------------------------------------------------------------------------
        | RESERVATIONS
        |--------------------------------------------------------------------------
        */


        // Nombre total réservations
        $reservations = Reservation::count();




        // Réservations aujourd'hui
        $reservationsAujourdHui = Reservation::whereDate(
            'date_reception',
            today()
        )
        ->count();





        // Réservations par mois (Graphique)
        $reservationsParMois = Reservation::select(
                DB::raw('MONTH(date_reception) as mois'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy(DB::raw('MONTH(date_reception)'))
            ->orderBy(DB::raw('MONTH(date_reception)'))
            ->get();





        // Dernières réservations
        $dernieresReservations = Reservation::with('user')
            ->latest()
            ->take(5)
            ->get();







        /*
        |--------------------------------------------------------------------------
        | FACTURES
        |--------------------------------------------------------------------------
        */


        // Nombre total factures
        $factures = Facture::count();




        // Factures en attente
        $facturesEnAttente = Facture::where(
            'statut',
            'En attente'
        )
        ->count();





        // Factures par mois (Graphique)
        $facturesParMois = Facture::select(
                DB::raw('MONTH(created_at) as mois'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();







        /*
        |--------------------------------------------------------------------------
        | PUBLICATIONS
        |--------------------------------------------------------------------------
        */


        $publications = Publication::count();







        /*
        |--------------------------------------------------------------------------
        | CONSULTATIONS
        |--------------------------------------------------------------------------
        */


        $consultations = Reservation::select(
                'consultation',
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('consultation')
            ->get();





        $notifications = Notification::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();


        $notificationsCount = Notification::where('user_id', Auth::id())
            ->where('lu', false)
            ->count();

        /*
        |--------------------------------------------------------------------------
        | RETURN DASHBOARD
        |--------------------------------------------------------------------------
        */


        return view(
            'admin.dashboard',
            compact(

                // Patients
                'patients',
                'nouveauxPatients',
                'patientsParMois',


                // Reservations
                'reservations',
                'reservationsAujourdHui',
                'reservationsParMois',
                'dernieresReservations',


                // Factures
                'factures',
                'facturesEnAttente',
                'facturesParMois',


                // Publications
                'publications',
                
                // Notifications
                'notifications',
                'notificationsCount',

                // Consultations
                'consultations'

            )
        );

    }

}