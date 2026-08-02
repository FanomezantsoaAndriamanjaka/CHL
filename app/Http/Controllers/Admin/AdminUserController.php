<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Afficher le formulaire
     */
    public function createAdmin()
    {
        return view('admin.utilisateurs.create_admin');
    }

    /**
     * Enregistrer un administrateur
     */
    public function storeAdmin(Request $request)
    {
        $request->validate([

            'nom' => 'required|max:255',

            'prenom' => 'required|max:255',

            'email' => 'required|email|unique:users,email',

            'telephone' => 'nullable|max:30',

            'password' => 'required|confirmed|min:8',

        ]);

        User::create([

            'nom' => $request->nom,

            'prenom' => $request->prenom,

            'email' => $request->email,

            'telephone' => $request->telephone,

            'password' => Hash::make($request->password),

            'role' => 'admin',

            'actif' => true,

        ]);

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Nouvel administrateur créé avec succès.');
    }
}