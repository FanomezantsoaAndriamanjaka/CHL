<?php

namespace App\Http\Controllers\Utilisateurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $user = Auth::user();
    
        return view('dashboard', compact('user'));
    }


    public function logout()
    {
        return view('accueil');
    }





}