@extends('admin.layouts.app')


@section('content')


<div class="space-y-8">



{{-- HEADER --}}

<div class="bg-gradient-to-r from-purple-700 to-pink-600 rounded-3xl shadow-xl p-8 text-white">


<h1 class="text-3xl font-bold">

Modifier le Service ✏️

</h1>


<p class="mt-3 text-purple-100">

Mettre à jour les informations du service.

</p>


</div>








{{-- ERREURS --}}

@if($errors->any())

<div class="bg-red-100 text-red-700 p-5 rounded-xl">


<ul>

@foreach($errors->all() as $error)

<li>
{{ $error }}
</li>

@endforeach

</ul>


</div>

@endif







<div class="bg-white rounded-2xl shadow-lg p-8">


<form method="POST"
action="{{ route('admin.publications.update',$publication->id) }}"
enctype="multipart/form-data">


@csrf

@method('PUT')






{{-- NOM --}}

<div class="mb-6">


<label class="font-semibold">

Nom du service

</label>


<input
type="text"
name="nom"
value="{{ old('nom',$publication->nom) }}"
class="w-full mt-2 rounded-xl border-gray-300">


</div>


{{-- CATEGORIE --}}

<div class="mb-6">

<label class="font-semibold">

Catégorie

</label>


<select
name="categorie"
class="w-full mt-2 rounded-xl border-gray-300">


<option value="">
-- Choisir --
</option>


<option value="Consultation"
{{ old('categorie',$publication->categorie)=='Consultation'?'selected':'' }}>
Consultation
</option>


<option value="Hospitalisation"
{{ old('categorie',$publication->categorie)=='Hospitalisation'?'selected':'' }}>
Hospitalisation
</option>


<option value="Chirurgie"
{{ old('categorie',$publication->categorie)=='Chirurgie'?'selected':'' }}>
Chirurgie
</option>


<option value="Gynécologie"
{{ old('categorie',$publication->categorie)=='Gynécologie'?'selected':'' }}>
Gynécologie
</option>


</select>


</div>








{{-- DESCRIPTION --}}

<div class="mb-6">


<label class="font-semibold">

Description

</label>


<textarea
name="description"
rows="5"
class="w-full mt-2 rounded-xl border-gray-300">{{ old('description',$publication->description) }}</textarea>


</div>








{{-- PRIX --}}

<div class="mb-6">


<label class="font-semibold">

Prix (Ariary)

</label>


<input
type="number"
name="prix"
value="{{ old('prix',$publication->prix) }}"
class="w-full mt-2 rounded-xl border-gray-300">


</div>









{{-- IMAGE ACTUELLE --}}

@if($publication->image)


<div class="mb-6">


<p class="font-semibold mb-2">

Image actuelle

</p>



<img src="{{ asset('storage/'.$publication->image) }}"
class="w-40 h-40 rounded-xl object-cover">


</div>


@endif







{{-- NOUVELLE IMAGE --}}

<div class="mb-6">


<label class="font-semibold">

Changer l'image

</label>


<input
type="file"
name="image"
class="w-full mt-2 rounded-xl border-gray-300">


</div>








{{-- PUBLICATION --}}

<div class="mb-6">

            <label class="font-semibold">

            Publication

            </label>


            <select
            name="publie"
            class="w-full mt-2 rounded-xl border-gray-300">


            <option value="1"
            {{ old('publie',$publication->publie)==1?'selected':'' }}>
            Publié
            </option>


            <option value="0"
            {{ old('publie',$publication->publie)==0?'selected':'' }}>
            Non publié
            </option>


            </select>

</div>



{{-- RESERVATION --}}

<div class="mb-6">

    <label class="font-semibold">

    Réservation disponible

    </label>


    <select
    name="reservation_disponible"
    class="w-full mt-2 rounded-xl border-gray-300">


    <option value="1"
    {{ old('reservation_disponible',$publication->reservation_disponible)==1?'selected':'' }}>
    Oui
    </option>


    <option value="0"
    {{ old('reservation_disponible',$publication->reservation_disponible)==0?'selected':'' }}>
    Non
    </option>


    </select>


</div>











<div class="flex gap-4">



<a href="{{ route('admin.publications.index') }}"
class="bg-gray-500 hover:bg-gray-600 text-white px-8 py-3 rounded-xl">


Annuler


</a>






<button
class="bg-purple-700 hover:bg-purple-800 text-white px-8 py-3 rounded-xl font-bold">


<i class="fa-solid fa-rotate mr-2"></i>

Mettre à jour


</button>




</div>





</form>


</div>






</div>


@endsection