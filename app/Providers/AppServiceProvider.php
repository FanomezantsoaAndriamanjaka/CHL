<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        View::composer(
            'admin.partials.navbar',
            function ($view) {
        
                $notifications = collect();
        
                $notificationCount = 0;
        
        
                if (Auth::check()) {
        
                    $notifications = Notification::where('user_id', Auth::id())
                        ->latest()
                        ->take(5)
                        ->get();
        
        
                    $notificationCount = Notification::where('user_id', Auth::id())
                        ->where('lu', false)
                        ->count();
        
                }
        
        
                $view->with([
                    'notifications' => $notifications,
                    'notificationCount' => $notificationCount
                ]);
        
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
