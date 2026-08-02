<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Tsy connecté
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Tsy administrateur
        if (Auth::user()->role !== 'admin') {

            abort(403, 'Accès interdit.');

        }

        return $next($request);
    }
}