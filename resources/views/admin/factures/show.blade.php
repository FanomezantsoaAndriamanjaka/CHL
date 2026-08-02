@extends('admin.layouts.app')


@section('content')


<div class="space-y-8">



{{-- HEADER --}}

<div class="bg-gradient-to-r from-yellow-500 to-orange-500 rounded-3xl shadow-xl p-8 text-white">


<h1 class="text-3xl font-bold">

Détail Facture 🧾

</h1>


<p class="mt-3 text-yellow-100">

Informations complètes de la facture.

</p>


</div>







{{-- FACTURE INFORMATION --}}

<div class="bg-white rounded-2xl shadow-lg p-8">


<div class="flex justify-between items-center mb-6">


<h2 class="text-2xl font-bold">

{{ $facture->numero_facture }}

</h2>




@if($facture->statut == 'Payée')


<span class="bg-green-100 text-green-700 px-4 py-2 rounded-full">

✅ Payée

</span>


@else


<span class="bg-orange-100 text-orange-700 px-4 py-2 rounded-full">

⏳ En attente

</span>


@endif



</div>






<div class="grid md:grid-cols-3 gap-6">



<div>

<p class="text-gray-500">

Montant

</p>


<p class="text-2xl font-bold text-blue-700">


{{ number_format($facture->montant,0,',',' ') }} Ar


</p>


</div>





<div>


<p class="text-gray-500">

Date création

</p>


<p class="font-semibold">


{{ $facture->created_at->format('d/m/Y') }}


</p>


</div>






<div>


<p class="text-gray-500">

Date paiement

</p>


<p class="font-semibold">


{{ $facture->date_paiement 
? \Carbon\Carbon::parse($facture->date_paiement)->format('d/m/Y')
: 'Non payé'
}}


</p>


</div>



</div>


</div>










{{-- PATIENT --}}

<div class="bg-white rounded-2xl shadow-lg p-8">


<h2 class="text-2xl font-bold mb-6">

👤 Patient

</h2>




@if($facture->reservation && $facture->reservation->user)



<div class="grid md:grid-cols-2 gap-6">



<div>


<p class="text-gray-500">

Nom complet

</p>


<p class="font-bold">


{{ $facture->reservation->user->nom }}

{{ $facture->reservation->user->prenom }}


</p>


</div>





<div>


<p class="text-gray-500">

Email

</p>


<p class="font-semibold">


{{ $facture->reservation->user->email }}


</p>


</div>





<div>


<p class="text-gray-500">

Téléphone

</p>


<p class="font-semibold">


{{ $facture->reservation->user->telephone }}


</p>


</div>



</div>



@endif



</div>









{{-- RESERVATION --}}


<div class="bg-white rounded-2xl shadow-lg p-8">


<h2 class="text-2xl font-bold mb-6">

📅 Réservation associée

</h2>




@if($facture->reservation)



<div class="grid md:grid-cols-2 gap-6">



<div>

<p class="text-gray-500">

Consultation

</p>


<p class="font-bold">


{{ $facture->reservation->consultation }}


</p>


</div>






<div>

<p class="text-gray-500">

Date réception

</p>


<p class="font-bold">


{{ \Carbon\Carbon::parse(
$facture->reservation->date_reception
)->format('d/m/Y') }}


</p>


</div>






<div>

<p class="text-gray-500">

Heure

</p>


<p class="font-bold">


{{ $facture->reservation->heure }}


</p>


</div>



</div>


@endif



</div>








{{-- ACTION --}}

<div class="bg-white rounded-2xl shadow-lg p-8 flex flex-wrap gap-4">


    {{-- TELECHARGER PDF --}}

    <a href="{{ route('admin.factures.pdf',$facture->id) }}"
       class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-xl font-bold">


        <i class="fa-solid fa-file-pdf mr-2"></i>

        Télécharger PDF


    </a>





    {{-- MARQUER PAYEE --}}

    @if($facture->statut != 'Payée')


    <form method="POST"
          action="{{ route('admin.factures.payer',$facture->id) }}">


        @csrf


        <button
        class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl font-bold">


            <i class="fa-solid fa-check mr-2"></i>

            Marquer comme payée


        </button>


    </form>


    @endif



</div>





</div>


@endsection