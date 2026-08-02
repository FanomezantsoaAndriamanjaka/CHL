<?php

namespace App\Http\Controllers\Utilisateurs;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    /**
     * Liste des notifications patient
     */
    public function index()
    {
        $notifications = Notification::where('user_id', Auth::id())
            ->latest()
            ->paginate(10);


        return view(
            'utilisateurs.notifications.index',
            compact('notifications')
        );
    }



    /**
     * Lire une notification
     */
    public function lire($id)
    {

        $notification = Notification::where('user_id', Auth::id())
            ->findOrFail($id);



        // Marquer comme lue
        $notification->update([
            'lu' => true
        ]);



        // Raha mifandray amin'ny réservation ilay notification
        if($notification->reservation_id)
        {

            return redirect()->route(
                'reservation.show',
                $notification->reservation_id
            );

        }



        return back();

    }



    /**
     * Supprimer notification
     */
    public function supprimerNotification($id)
    {

        $notification = Notification::where('user_id', Auth::id())
            ->findOrFail($id);


        $notification->delete();


        return back()->with(
            'success',
            'Notification supprimée.'
        );

    }



    /**
     * Supprimer toutes les notifications lues
     */
    public function supprimerNotificationsLues()
    {

        Notification::where('user_id', Auth::id())
            ->where('lu', true)
            ->delete();


        return back()->with(
            'success',
            'Toutes les notifications lues ont été supprimées.'
        );

    }

}