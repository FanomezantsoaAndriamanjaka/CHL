<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminNotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::where('user_id', Auth::id())
            ->latest()
            ->paginate(10);

        return view(
            'admin.notifications.index',
            compact('notifications')
        );
    }

    public function lire(Notification $notification)
    {
        abort_if($notification->user_id != Auth::id(), 403);

        $notification->update([
            'lu' => true
        ]);

        return back()->with(
            'success',
            'Notification marquée comme lue.'
        );
    }

    public function supprimer(Notification $notification)
    {
        abort_if($notification->user_id != auth()->id(), 403);

        $notification->delete();

        return back()->with(
            'success',
            'Notification supprimée avec succès.'
        );
    }


    public function supprimerLues()
    {
        Notification::where('user_id', auth()->id())
            ->where('lu', true)
            ->delete();
    
        return back()->with(
            'success',
            'Toutes les notifications lues ont été supprimées.'
        );
    }
    
}