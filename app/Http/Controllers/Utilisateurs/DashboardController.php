<?php

namespace App\Http\Controllers\Utilisateurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {

        return view('dashboard');

    }


    public function logout()
    {
        return view('accueil');
    }





}