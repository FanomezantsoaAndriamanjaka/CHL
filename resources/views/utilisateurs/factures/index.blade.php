@extends('layouts.navbars')

@section('content')

{{-- HERO SECTION --}}

<section class="mx-4 mt-6 mb-6 rounded-3xl bg-white border border-blue-100 shadow-xl overflow-hidden">


    <div class="bg-gradient-to-r from-blue-800 via-blue-700 to-cyan-500 
                rounded-3xl p-8 md:p-12 text-white">



        {{-- TITRE --}}

        <div class="text-center">


            <h1 class="text-5xl md:text-6xl font-extrabold">

                CHL

            </h1>


            <p class="mt-4 text-lg md:text-xl text-blue-100 max-w-3xl mx-auto">

                Votre centre médical de confiance pour des soins de qualité,
                un accompagnement personnalisé et une prise en charge adaptée
                à vos besoins.

            </p>


        </div>





        {{-- LOGO / IMAGE CENTRALE --}}


        <div class="flex justify-center mt-10">


            <div class="w-44 h-44 md:w-52 md:h-52 
                        rounded-full bg-white 
                        shadow-2xl 
                        border-8 border-blue-100 
                        overflow-hidden">


                <img
                    src="{{ asset('images/hopital.jpg') }}"
                    alt="CHL"
                    class="w-full h-full object-cover">


            </div>


        </div>






        {{-- BOUTONS --}}


        <div class="mt-10 flex flex-wrap justify-center gap-4">


            <p href="{{ route('register') }}"
            class="bg-white text-blue-700 px-8 py-3 rounded-xl 
                   font-bold shadow-lg hover:scale-105 transition">


                <i class="fa-solid fa-calendar-check mr-2"></i>

                Prendre rendez-vous


</p>





            <p href="#services"
            class="border-2 border-white px-8 py-3 rounded-xl 
                   font-bold hover:bg-white hover:text-blue-700 transition">


                <i class="fa-solid fa-hospital mr-2"></i>

                Profitez les services


            </p>



        </div>



    </div>


</section>


<div class="max-w-7xl mx-auto px-6 py-10">


<div class="bg-gradient-to-r from-blue-600 to-cyan-500 
rounded-2xl p-8 text-white shadow-lg mb-8">


<h1 class="text-3xl font-bold">
📄 Mes factures
</h1>


<p class="mt-2">
Consultez vos factures médicales.
</p>


</div>



@if($factures->count())


<div class="grid md:grid-cols-2 gap-6">


@foreach($factures as $facture)


<div class="bg-white rounded-xl shadow-lg p-6 border">


<div class="flex justify-between">


<h2 class="font-bold text-xl text-blue-700">

{{ $facture->numero_facture }}

</h2>


<span class="bg-orange-100 text-orange-700 
px-3 py-1 rounded-full text-sm">

{{ $facture->statut }}

</span>


</div>



<hr class="my-4">



<p>
🏥 Service :
<strong>
{{ $facture->reservation->publication->nom ?? 'Consultation' }}
</strong>
</p>



<p class="mt-2">
📅 Date :

{{ $facture->created_at->format('d/m/Y') }}

</p>



<p class="mt-2 text-xl font-bold text-green-600">

💰
{{ number_format($facture->montant,0,',',' ') }}
Ar

</p>



<a href="{{ route('mes.factures.show',$facture->id) }}"
class="inline-block mt-5 bg-blue-600 text-white 
px-5 py-2 rounded-lg">

Voir détail

</a>


</div>


@endforeach


</div>


<div class="mt-8">

{{ $factures->links() }}

</div>



@else


<div class="bg-gray-100 p-8 rounded-xl text-center">

<p class="text-xl">

📭 Aucune facture disponible.

</p>

</div>


@endif


</div>


@endsection