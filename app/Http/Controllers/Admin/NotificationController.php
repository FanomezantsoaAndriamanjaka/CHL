<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    public function index()
    {

        $notifications = Notification::where('user_id',Auth::id())
            ->latest()
            ->get();


        Notification::where('user_id',Auth::id())
            ->update([
                'lu'=>true
            ]);


        return view(
            'admin.notifications.index',
            compact('notifications')
        );

    }

}