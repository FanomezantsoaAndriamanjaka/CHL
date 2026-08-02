@extends('admin.layouts.app')

@section('content')


<div class="space-y-8">


{{-- HEADER --}}
<div class="bg-gradient-to-r from-blue-700 to-cyan-600 rounded-3xl shadow-xl p-8 text-white">


    <h1 class="text-3xl font-bold">
        Gestion des Patients 👥
    </h1>


    <p class="mt-3 text-blue-100">
        Consultez et gérez les patients enregistrés dans la clinique.
    </p>


</div>





{{-- RECHERCHE --}}

<div class="bg-white rounded-2xl shadow-lg p-6">


<form method="GET"
      action="{{ route('admin.patients.index') }}"
      class="flex flex-col md:flex-row gap-4">


    <input 
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Rechercher un patient..."
        class="flex-1 rounded-xl border-gray-300 focus:ring-blue-500 focus:border-blue-500"
    >



    <button
        type="submit"
        class="bg-blue-700 hover:bg-blue-800 text-white px-8 py-3 rounded-xl font-semibold">


        <i class="fa-solid fa-search mr-2"></i>

        Rechercher

    </button>



</form>


</div>







{{-- TABLE PATIENTS --}}

<div class="bg-white rounded-2xl shadow-lg overflow-hidden">


<div class="p-6 border-b">


<h2 class="text-2xl font-bold text-gray-800">

Liste des patients

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
Téléphone
</th>


<th class="px-6 py-4 text-left">
Email
</th>


<th class="px-6 py-4 text-left">
Inscription
</th>


<th class="px-6 py-4 text-center">
Action
</th>


</tr>


</thead>





<tbody>


@forelse($patients as $patient)



<tr class="border-b hover:bg-blue-50 transition">





{{-- PATIENT --}}

<td class="px-6 py-4">


<div class="flex items-center gap-4">


@if($patient->photo_profil)


<img src="{{ asset('storage/'.$patient->photo_profil) }}"
     class="w-12 h-12 rounded-full object-cover">


@else


<div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">


<i class="fa-solid fa-user text-blue-700 text-xl"></i>


</div>


@endif





<div>


<p class="font-bold text-gray-800">

{{ $patient->nom }}
{{ $patient->prenom }}

</p>


<p class="text-sm text-gray-500">

Patient

</p>


</div>


</div>


</td>







{{-- TELEPHONE --}}

<td class="px-6 py-4">


{{ $patient->telephone ?? 'Non renseigné' }}


</td>








{{-- EMAIL --}}

<td class="px-6 py-4">


{{ $patient->email }}


</td>








{{-- DATE --}}

<td class="px-6 py-4">


{{ $patient->created_at->format('d/m/Y') }}


</td>








{{-- ACTION --}}

<td class="px-6 py-4 text-center">


<a href="{{ route('admin.patients.show',$patient->id) }}"
   class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">


<i class="fa-solid fa-eye mr-2"></i>

Voir


</a>


</td>





</tr>




@empty


<tr>


<td colspan="5"
    class="text-center py-10 text-gray-500">


Aucun patient trouvé.


</td>


</tr>


@endforelse





</tbody>


</table>


</div>







{{-- PAGINATION --}}

<div class="p-6">


{{ $patients->links() }}


</div>



</div>





</div>


@endsection