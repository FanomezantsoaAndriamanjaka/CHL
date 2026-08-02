@extends('admin.layouts.app')


@section('content')


<div class="space-y-8">



{{-- HEADER --}}

<div class="bg-gradient-to-r from-blue-700 to-cyan-600 rounded-3xl shadow-xl p-8 text-white">


<h1 class="text-3xl font-bold">

Gestion des Réservations 📅

</h1>


<p class="mt-3 text-blue-100">

Consultez et traitez les demandes des patients.

</p>


</div>









{{-- MESSAGE SUCCESS --}}

@if(session('success'))

<div class="bg-green-100 text-green-700 p-4 rounded-xl">

{{ session('success') }}

</div>

@endif







{{-- TABLEAU --}}


<div class="bg-white rounded-2xl shadow-lg overflow-hidden">



<div class="p-6 border-b">


<h2 class="text-2xl font-bold">

Liste des réservations

</h2>


</div>







<div class="overflow-x-auto">


<table class="min-w-full">



<thead class="bg-gray-100">


<tr>


<th class="px-6 py-4 text-left">
Patient
</th>


<th class="px-6 py-4 text-left">
Consultation
</th>


<th class="px-6 py-4 text-left">
Date
</th>


<th class="px-6 py-4 text-left">
Statut
</th>


<th class="px-6 py-4 text-center">
Actions
</th>


</tr>


</thead>






<tbody>


@forelse($reservations as $reservation)



<tr class="border-b hover:bg-blue-50 transition">





{{-- PATIENT --}}

<td class="px-6 py-4">


<div class="font-bold">

@if($reservation->user)

{{ $reservation->user->nom }}
{{ $reservation->user->prenom }}

@else

{{ $reservation->nom }}
{{ $reservation->prenom }}

@endif


</div>



<div class="text-sm text-gray-500">

@if($reservation->user)

{{ $reservation->user->email }}

@endif

</div>


</td>







{{-- CONSULTATION --}}

<td class="px-6 py-4">


{{ $reservation->consultation }}


</td>







{{-- DATE --}}

<td class="px-6 py-4">


{{ \Carbon\Carbon::parse($reservation->date_reception)->format('d/m/Y') }}


</td>








{{-- STATUT --}}

<td class="px-6 py-4">


@if($reservation->statut == 'Confirmée')


<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

✅ Confirmée

</span>



@elseif($reservation->statut == 'Refusée')


<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">

❌ Refusée

</span>



@else


<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">

⏳ En attente

</span>



@endif


</td>









{{-- ACTIONS --}}

<td class="px-6 py-4">


<div class="flex justify-center gap-2">





{{-- VOIR --}}

<a href="{{ route('admin.reservations.show',$reservation->id) }}"
class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">


<i class="fa-solid fa-eye"></i>


</a>









{{-- ACCEPTER --}}

@if($reservation->statut == 'En attente')


<form method="POST"
action="{{ route('admin.reservations.accepter',$reservation->id) }}">


@csrf


<button
class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">


<i class="fa-solid fa-check"></i>


</button>


</form>









{{-- REFUSER --}}


<form method="POST"
action="{{ route('admin.reservations.refuser',$reservation->id) }}">


@csrf


<button
class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">


<i class="fa-solid fa-xmark"></i>


</button>


</form>


@endif





</div>


</td>






</tr>



@empty


<tr>


<td colspan="5"
class="text-center py-10 text-gray-500">


Aucune réservation disponible.


</td>


</tr>


@endforelse



</tbody>


</table>


</div>







<div class="p-6">


{{ $reservations->links() }}


</div>



</div>




</div>



@endsection