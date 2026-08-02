<?php

namespace App\Http\Controllers\Utilisateurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        return view('utilisateurs.profil.index', [
            'user' => Auth::user()
        ]);
    }

    public function edit()
    {
        return view('utilisateurs.profil.edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {

        $user = Auth::user();

        $request->validate([

            'nom'=>'required',

            'prenom'=>'required',

            'telephone'=>'nullable',

            'adresse'=>'nullable',

            'ville'=>'nullable',

            'profession'=>'nullable',

            'langue'=>'nullable',
            
            'photo_profil' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:10240',

        ]);

        if($request->hasFile('photo_profil'))
        {

            if($user->photo_profil){

                Storage::disk('public')->delete($user->photo_profil);

            }

            $user->photo_profil=$request
                ->file('photo_profil')
                ->store('profils','public');

        }

        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->telephone=$request->telephone;
        $user->adresse=$request->adresse;
        $user->ville=$request->ville;
        $user->profession=$request->profession;
        $user->langue=$request->langue;

        $user->save();

        return redirect()
        ->route('profil.index')
        ->with('success', 'Profil mis à jour avec succès.');

    }
}