<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PublicationController extends Controller
{


    public function index()
    {

        $publications = Publication::latest()
            ->paginate(10);


        return view(
            'admin.publications.index',
            compact('publications')
        );

    }





    public function create()
    {

        return view(
            'admin.publications.create'
        );

    }





    public function store(Request $request)
    {


        $request->validate([

            'nom'=>'required|string',

            'description'=>'required|string',

            'prix'=>'required|numeric',

            'image'=>'nullable|image|max:2048',

            'publie'=>'required',

            'reservation_disponible'=>'required'

        ]);





        $image = null;



        if($request->hasFile('image')){


            $image = $request->file('image')
                ->store('publications','public');


        }


        Publication::create([

            'nom'=>$request->nom,
        
            'slug'=>Str::slug($request->nom),
        
            'categorie'=>$request->categorie,
        
            'description'=>$request->description,
        
            'prix'=>$request->prix,
        
            'image'=>$image,
        
            'publie'=>$request->publie,
        
            'reservation_disponible'=>$request->reservation_disponible,
        
        ]);





        return redirect()

            ->route('admin.publications.index')

            ->with(
                'success',
                'Service ajouté avec succès.'
            );


    }





    public function edit(Publication $publication)
    {

        return view(
            'admin.publications.edit',
            compact('publication')
        );

    }



    public function update(Request $request, Publication $publication)
    {
    
        $request->validate([
    
            'nom' => 'required|string',
    
            'categorie' => 'required|string',
    
            'description' => 'required|string',
    
            'prix' => 'required|numeric',
    
            'image' => 'nullable|image|max:2048',
    
            'publie' => 'required',
    
            'reservation_disponible' => 'required',
    
        ]);
    
    
    
        $image = $publication->image;
    
    
    
        if($request->hasFile('image')){
    
    
            $image = $request->file('image')
                ->store('publications','public');
    
        }
    
    
    
        $publication->update([
    
            'nom' => $request->nom,
    
            'slug' => \Str::slug($request->nom),
    
            'categorie' => $request->categorie,
    
            'description' => $request->description,
    
            'prix' => $request->prix,
    
            'image' => $image,
    
            'publie' => $request->publie,
    
            'reservation_disponible' => $request->reservation_disponible,
    
        ]);
    
    
    
        return redirect()
    
            ->route('admin.publications.index')
    
            ->with(
                'success',
                'Service modifié avec succès.'
            );
    
    }





    public function destroy(Publication $publication)
    {


        $publication->delete();


        return back()

            ->with(
                'success',
                'Service supprimé.'
            );


    }


}