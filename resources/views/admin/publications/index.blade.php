@extends('admin.layouts.app')


@section('content')


<div class="space-y-8">



{{-- HEADER --}}

<div class="bg-gradient-to-r from-purple-700 to-pink-600 rounded-3xl shadow-xl p-8 text-white">


<div class="flex justify-between items-center">


<div>


<h1 class="text-3xl font-bold">

Services de la Clinique 🏥

</h1>


<p class="mt-3 text-purple-100">

Gérez les prestations proposées par la clinique.

</p>


</div>




<a href="{{ route('admin.publications.create') }}"
class="bg-white text-purple-700 px-6 py-3 rounded-xl font-bold">


<i class="fa-solid fa-plus mr-2"></i>

Ajouter


</a>


</div>


</div>








{{-- MESSAGE --}}

@if(session('success'))

<div class="bg-green-100 text-green-700 p-4 rounded-xl">

{{ session('success') }}

</div>

@endif







{{-- SERVICES --}}


<div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">



@forelse($publications as $publication)



<div class="bg-white rounded-2xl shadow-lg overflow-hidden">






{{-- IMAGE --}}


@if($publication->image)


<img src="{{ asset('storage/'.$publication->image) }}"
class="w-full h-48 object-cover">


@else


<div class="h-48 bg-purple-100 flex items-center justify-center">


<i class="fa-solid fa-hospital text-5xl text-purple-700"></i>


</div>


@endif







<div class="p-6">





<h2 class="text-xl font-bold">


{{ $publication->nom }}


</h2>






<p class="text-gray-500 mt-3 line-clamp-3">


{{ $publication->description }}


</p>







<div class="mt-4 flex justify-between items-center">



<span class="font-bold text-purple-700">


{{ number_format($publication->prix,0,',',' ') }}
Ar


</span>






@if($publication->publie)

<span class="bg-green-100 text-green-600 px-3 py-1 rounded-full">
    Publié
</span>

@else

<span class="bg-red-100 text-red-600 px-3 py-1 rounded-full">
    Non publié
</span>

@endif



</div>









{{-- ACTIONS --}}


<div class="flex gap-3 mt-6">





<a href="{{ route('admin.publications.edit',$publication->id) }}"
class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 rounded-lg">


<i class="fa-solid fa-pen"></i>

Modifier


</a>








<form method="POST"
action="{{ route('admin.publications.destroy',$publication->id) }}"
class="flex-1">


@csrf

@method('DELETE')



<button
onclick="return confirm('Supprimer ce service ?')"
class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">


<i class="fa-solid fa-trash"></i>

Supprimer


</button>


</form>





</div>





</div>



</div>




@empty



<div class="col-span-3 bg-white rounded-2xl p-10 text-center text-gray-500">


Aucun service disponible.


</div>



@endforelse





</div>






{{-- PAGINATION --}}


<div>


{{ $publications->links() }}


</div>






</div>


@endsection