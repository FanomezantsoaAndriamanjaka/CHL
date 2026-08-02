@extends('admin.layouts.app')


@section('content')


<div class="space-y-8">



{{-- HEADER --}}

<div class="bg-gradient-to-r from-purple-700 to-pink-600 rounded-3xl shadow-xl p-8 text-white">


<h1 class="text-3xl font-bold">

Ajouter un Service 🏥

</h1>


<p class="mt-3 text-purple-100">

Créer une nouvelle prestation pour la clinique.

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







{{-- FORMULAIRE --}}

<div class="bg-white rounded-2xl shadow-lg p-8">



<form method="POST"
action="{{ route('admin.publications.store') }}"
enctype="multipart/form-data">


@csrf






{{-- NOM --}}

<div class="mb-6">


<label class="font-semibold">

Nom du service

</label>


<input
type="text"
name="nom"
value="{{ old('nom') }}"
class="w-full mt-2 rounded-xl border-gray-300"
placeholder="Ex: Consultation générale">


</div>


{{-- CATEGORIE --}}

<div class="mb-6">

<label class="font-semibold">

Catégorie du service

</label>


<select
name="categorie"
class="w-full mt-2 rounded-xl border-gray-300">


<option value="Consultation">

Consultation

</option>


<option value="Hospitalisation">

Hospitalisation

</option>


<option value="Chirurgie">

Chirurgie

</option>


<option value="Gynécologie">

Gynécologie

</option>


<option value="Pédiatrie">

Pédiatrie

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
class="w-full mt-2 rounded-xl border-gray-300"
placeholder="Description du service...">{{ old('description') }}</textarea>


</div>








{{-- PRIX --}}

<div class="mb-6">


<label class="font-semibold">

Prix (Ariary)

</label>


<input
type="number"
name="prix"
value="{{ old('prix') }}"
class="w-full mt-2 rounded-xl border-gray-300"
placeholder="Ex: 50000">


</div>








{{-- IMAGE --}}

<div class="mb-6">


<label class="font-semibold">

Image du service

</label>


<input
type="file"
name="image"
class="w-full mt-2 rounded-xl border-gray-300">


</div>








{{-- PUBLICATION --}}

<div class="mb-6">


<label class="font-semibold">

Publication du service

</label>


<select
name="publie"
class="w-full mt-2 rounded-xl border-gray-300">


<option value="1">

Publié

</option>


<option value="0">

Non publié

</option>


</select>


</div>







{{-- RESERVATION DISPONIBLE --}}


<div class="mb-6">


<label class="font-semibold">

Disponible pour réservation

</label>


<select
name="reservation_disponible"
class="w-full mt-2 rounded-xl border-gray-300">


<option value="1">

Oui

</option>


<option value="0">

Non

</option>


</select>


</div>







{{-- BUTTONS --}}


<div class="flex gap-4">



<a href="{{ route('admin.publications.index') }}"
class="bg-gray-500 hover:bg-gray-600 text-white px-8 py-3 rounded-xl">


Annuler


</a>





<button
class="bg-purple-700 hover:bg-purple-800 text-white px-8 py-3 rounded-xl font-bold">


<i class="fa-solid fa-save mr-2"></i>

Enregistrer


</button>



</div>







</form>


</div>





</div>


@endsection