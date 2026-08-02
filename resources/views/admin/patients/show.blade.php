@extends('admin.layouts.app')


@section('content')


<div class="space-y-8">



{{-- HEADER --}}

<div class="bg-gradient-to-r from-blue-700 to-cyan-600 rounded-3xl p-8 text-white">


<h1 class="text-3xl font-bold">

Profil Patient 👤

</h1>


<p class="text-blue-100 mt-2">

Informations détaillées du patient

</p>


</div>






{{-- PROFIL --}}

<div class="bg-white rounded-2xl shadow-lg p-8">


<div class="flex flex-col md:flex-row gap-8">



@if($patient->photo_profil)


<img src="{{ asset('storage/'.$patient->photo_profil) }}"
class="w-40 h-40 rounded-full object-cover">


@else


<div class="w-40 h-40 rounded-full bg-blue-100 flex items-center justify-center">


<i class="fa-solid fa-user text-5xl text-blue-700"></i>


</div>


@endif





<div>


<h2 class="text-3xl font-bold">

{{ $patient->nom }}
{{ $patient->prenom }}

</h2>


<p class="text-gray-500 mt-2">

Patient enregistré le
{{ $patient->created_at->format('d/m/Y') }}

</p>


</div>



</div>







<div class="grid md:grid-cols-2 gap-6 mt-8">


<div>

<label class="font-bold">
Email
</label>

<p>
{{ $patient->email }}
</p>

</div>



<div>

<label class="font-bold">
Téléphone
</label>

<p>
{{ $patient->telephone ?? 'Non renseigné' }}
</p>

</div>




<div>

<label class="font-bold">
Adresse
</label>

<p>
{{ $patient->adresse ?? 'Non renseignée' }}
</p>

</div>



<div>

<label class="font-bold">
Ville
</label>

<p>
{{ $patient->ville ?? 'Non renseignée' }}
</p>

</div>


</div>


</div>







{{-- HISTORIQUE RESERVATIONS --}}


<div class="bg-white rounded-2xl shadow-lg overflow-hidden">


<div class="p-6 border-b">


<h2 class="text-2xl font-bold">

Historique des réservations 📋

</h2>


</div>




<table class="min-w-full">


<thead class="bg-gray-100">


<tr>


<th class="px-6 py-4">
Service
</th>


<th class="px-6 py-4">
Date
</th>


<th class="px-6 py-4">
Statut
</th>


</tr>


</thead>



<tbody>


@forelse($reservations as $reservation)



<tr class="border-b">


<td class="px-6 py-4">

{{ $reservation->consultation }}

</td>



<td class="px-6 py-4">

{{ \Carbon\Carbon::parse($reservation->date_reception)->format('d/m/Y') }}

</td>



<td class="px-6 py-4">


{{ $reservation->statut }}


</td>


</tr>



@empty


<tr>

<td colspan="3"
class="text-center py-8">


Aucune réservation.


</td>

</tr>


@endforelse



</tbody>


</table>


</div>





</div>


@endsection