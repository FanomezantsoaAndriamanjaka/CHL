<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Afficher le formulaire d'inscription
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Enregistrer un nouvel utilisateur
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'nom' => 'required|string|max:255',

            'prenom' => 'required|string|max:255',

            'email' => 'required|email|unique:users,email',

            'telephone' => 'nullable|string|max:30',

            'sexe' => 'nullable|in:Homme,Femme',

            'date_naissance' => 'nullable|date',

            'lieu_naissance' => 'nullable|string|max:255',

            'nationalite' => 'nullable|string|max:255',

            'adresse' => 'nullable|string',

            'ville' => 'nullable|string|max:255',

            'pays' => 'nullable|string|max:255',

            'profession' => 'nullable|string|max:255',

            'langue' => 'nullable|string|max:255',

            'password' => [
                'required',
                'confirmed',
                Rules\Password::defaults(),
            ],

        ]);


        $user = User::create([

            'nom' => $request->nom,

            'prenom' => $request->prenom,

            'email' => $request->email,

            'telephone' => $request->telephone,

            'sexe' => $request->sexe,

            'date_naissance' => $request->date_naissance,

            'lieu_naissance' => $request->lieu_naissance,

            'nationalite' => $request->nationalite,

            'adresse' => $request->adresse,

            'ville' => $request->ville,

            'pays' => $request->pays ?? 'Madagascar',

            'profession' => $request->profession,

            'langue' => $request->langue ?? 'Français',

            'password' => Hash::make($request->password),

            'role' => 'patient',

            'actif' => true,

        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard')
            ->with('success', 'Bienvenue sur la Clinique Hadassah Liantsoa.');
    }
}