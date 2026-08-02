@extends('admin.layouts.app')


@section('content')


<div class="space-y-8">



{{-- HEADER --}}

<div class="bg-gradient-to-r from-blue-700 to-cyan-600 rounded-3xl shadow-xl p-8 text-white">


<h1 class="text-3xl font-bold">

Détail de la réservation 📋

</h1>


<p class="mt-3 text-blue-100">

Informations complètes de la demande patient.

</p>


</div>








{{-- INFORMATIONS PATIENT --}}


<div class="bg-white rounded-2xl shadow-lg p-8">


<h2 class="text-2xl font-bold mb-6">

👤 Informations Patient

</h2>




<div class="grid md:grid-cols-2 gap-6">



<div>

<p class="text-gray-500">
Nom complet
</p>


<p class="font-bold text-lg">

@if($reservation->user)

{{ $reservation->user->nom }}
{{ $reservation->user->prenom }}

@else

{{ $reservation->nom }}
{{ $reservation->prenom }}

@endif


</p>


</div>





<div>

<p class="text-gray-500">
Email
</p>


<p class="font-semibold">

@if($reservation->user)

{{ $reservation->user->email }}

@else

{{ $reservation->email }}

@endif


</p>


</div>







<div>

<p class="text-gray-500">
Téléphone
</p>


<p class="font-semibold">


@if($reservation->user)

{{ $reservation->user->telephone }}

@else

{{ $reservation->telephone }}

@endif


</p>


</div>





<div>

<p class="text-gray-500">
Contact urgence
</p>


<p class="font-semibold">

{{ $reservation->contact_urgence ?? 'Non renseigné' }}

</p>


</div>



</div>


</div>









{{-- DETAILS RESERVATION --}}



<div class="bg-white rounded-2xl shadow-lg p-8">


<h2 class="text-2xl font-bold mb-6">

🩺 Informations médicales

</h2>




<div class="grid md:grid-cols-2 gap-6">





<div>


<p class="text-gray-500">

Consultation

</p>


<p class="font-bold">

{{ $reservation->consultation }}

</p>


</div>







<div>


<p class="text-gray-500">

Date réception

</p>


<p class="font-bold">


{{ \Carbon\Carbon::parse($reservation->date_reception)->format('d/m/Y') }}


</p>


</div>







<div>


<p class="text-gray-500">

Heure

</p>


<p class="font-bold">


{{ $reservation->heure }}

</p>


</div>







<div>


<p class="text-gray-500">

Type chambre

</p>


<p class="font-bold">


{{ $reservation->type_chambre ?? 'Aucune' }}


</p>


</div>







<div>


<p class="text-gray-500">

Nombre chambre

</p>


<p class="font-bold">


{{ $reservation->nombre_chambre ?? '-' }}


</p>


</div>







<div>


<p class="text-gray-500">

Statut

</p>



@if($reservation->statut == 'Confirmée')


<span class="bg-green-100 text-green-700 px-4 py-2 rounded-full">

✅ Confirmée

</span>



@elseif($reservation->statut == 'Refusée')


<span class="bg-red-100 text-red-700 px-4 py-2 rounded-full">

❌ Refusée

</span>



@else


<span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full">

⏳ En attente

</span>


@endif


</div>



</div>






<div class="mt-8">


<p class="text-gray-500">

Description du problème

</p>


<div class="mt-2 bg-gray-100 rounded-xl p-5">


{{ $reservation->description_maladie ?? 'Aucune description' }}


</div>


</div>




</div>









{{-- ACTIONS --}}


@if($reservation->statut == 'En attente')



<div class="bg-white rounded-2xl shadow-lg p-8">


<h2 class="text-xl font-bold mb-5">

Décision administrative

</h2>




<div class="flex gap-4">





<form action="{{ route('admin.reservations.accepter', $reservation->id) }}"
      method="POST"
      class="inline">

    @csrf

    <button type="submit"
            class="bg-green-600 text-white px-4 py-2 rounded-lg">

        Accepter

    </button>

</form>







<form action="{{ route('admin.reservations.refuser', $reservation->id) }}"
      method="POST"
      class="inline">

    @csrf

    <button type="submit"
            class="bg-red-600 text-white px-4 py-2 rounded-lg">

        Refuser

    </button>

</form>





</div>


</div>


@endif







</div>


@endsection