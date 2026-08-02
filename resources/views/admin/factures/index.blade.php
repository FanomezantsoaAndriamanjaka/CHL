@extends('admin.layouts.app')


@section('content')


<div class="space-y-8">



{{-- HEADER --}}

<div class="bg-gradient-to-r from-yellow-500 to-orange-500 rounded-3xl shadow-xl p-8 text-white">


<h1 class="text-3xl font-bold">

Gestion des Factures 🧾

</h1>


<p class="mt-3 text-yellow-100">

Suivez les factures et les paiements des patients.

</p>


</div>









{{-- MESSAGE --}}

@if(session('success'))

<div class="bg-green-100 text-green-700 p-4 rounded-xl">

{{ session('success') }}

</div>

@endif







{{-- RECHERCHE --}}

<div class="bg-white rounded-2xl shadow-lg p-6">


<form method="GET"
action="{{ route('admin.factures.index') }}"
class="flex flex-col md:flex-row gap-4">



<input
type="text"
name="search"
value="{{ request('search') }}"
placeholder="Rechercher numéro facture..."
class="flex-1 rounded-xl border-gray-300">



<button
class="bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-3 rounded-xl font-semibold">


<i class="fa-solid fa-search mr-2"></i>

Rechercher


</button>



</form>


</div>








{{-- TABLE FACTURES --}}


<div class="bg-white rounded-2xl shadow-lg overflow-hidden">



<div class="p-6 border-b">


<h2 class="text-2xl font-bold">

Liste des factures

</h2>


</div>








<div class="overflow-x-auto">


<table class="min-w-full">



<thead class="bg-gray-100">


<tr>


<th class="px-6 py-4 text-left">
Numéro
</th>


<th class="px-6 py-4 text-left">
Patient
</th>


<th class="px-6 py-4 text-left">
Montant
</th>


<th class="px-6 py-4 text-left">
Statut
</th>


<th class="px-6 py-4 text-center">
Action
</th>


</tr>


</thead>






<tbody>


@forelse($factures as $facture)



<tr class="border-b hover:bg-yellow-50 transition">






{{-- NUMERO --}}

<td class="px-6 py-4 font-bold">


{{ $facture->numero_facture }}


</td>








{{-- PATIENT --}}

<td class="px-6 py-4">


@if($facture->reservation && $facture->reservation->user)


{{ $facture->reservation->user->nom }}

{{ $facture->reservation->user->prenom }}


@else


Patient inconnu


@endif


</td>








{{-- MONTANT --}}

<td class="px-6 py-4 font-semibold">


{{ number_format($facture->montant,0,',',' ') }}

Ar


</td>








{{-- STATUT --}}

<td class="px-6 py-4">


@if($facture->statut == 'Payée')


<span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">


✅ Payée


</span>



@else


<span class="bg-orange-100 text-orange-700 px-4 py-2 rounded-full text-sm">


⏳ En attente


</span>



@endif



</td>








{{-- ACTION --}}

<td class="px-6 py-4 text-center">


<a href="{{ route('admin.factures.show',$facture->id) }}"
class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">


<i class="fa-solid fa-eye"></i>

Voir


</a>


</td>




</tr>




@empty


<tr>


<td colspan="5"
class="text-center py-10 text-gray-500">


Aucune facture disponible.


</td>


</tr>


@endforelse





</tbody>


</table>


</div>







<div class="p-6">


{{ $factures->links() }}


</div>





</div>






</div>


@endsection