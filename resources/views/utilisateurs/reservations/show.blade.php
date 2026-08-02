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

{{-- CONTENU --}}


<div class="mt-10 bg-white rounded-3xl shadow-2xl mx-4 border border-blue-100 p-8">



<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">



{{-- NUMERO --}}

<div class="bg-blue-50 border border-blue-100 rounded-2xl p-6">

<p class="text-gray-500">

🔢 Numéro réservation

</p>

<h3 class="text-xl font-bold text-blue-700 mt-2">

#{{ $reservation->id }}

</h3>

</div>





{{-- SERVICE --}}

<div class="bg-cyan-50 border border-cyan-100 rounded-2xl p-6">

<p class="text-gray-500">

🏥 Service

</p>

<h3 class="text-xl font-bold text-cyan-700 mt-2">

{{ $reservation->publication->nom ?? $reservation->consultation }}

</h3>

</div>





{{-- STATUT --}}

<div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">

<p class="text-gray-500 mb-3">

📌 Statut

</p>


@if($reservation->statut == 'Confirmée')

<span class="bg-green-100 text-green-700 px-4 py-2 rounded-full font-bold">

    ✅ Confirmée

</span>


@elseif($reservation->statut == 'Refusée')


<span class="bg-red-100 text-red-700 px-4 py-2 rounded-full font-bold">

    ❌ Refusée

</span>


@else


<span class="bg-orange-100 text-orange-700 px-4 py-2 rounded-full font-bold">

    ⏳ En attente

</span>


@endif


</div>





{{-- DATE --}}

<div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">

<p class="text-gray-500">

📅 Date rendez-vous

</p>

<h3 class="text-lg font-bold mt-2">

{{ $reservation->date_reception->format('d/m/Y') }}

</h3>

</div>





{{-- HEURE --}}

<div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">

<p class="text-gray-500">

⏰ Heure

</p>

<h3 class="text-lg font-bold mt-2">

{{ \Carbon\Carbon::parse($reservation->heure)->format('H:i') }}

</h3>

</div>





{{-- CHAMBRE --}}

<div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">

<p class="text-gray-500">

🛏 Type chambre

</p>

<h3 class="text-lg font-bold mt-2">

{{ $reservation->type_chambre ?? 'Aucune' }}

</h3>

</div>





{{-- NOMBRE CHAMBRE --}}

<div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">

<p class="text-gray-500">

🛌 Nombre chambre

</p>

<h3 class="text-lg font-bold mt-2">

{{ $reservation->nombre_chambre ?? '-' }}

</h3>

</div>




{{-- CONTACT --}}

<div class="bg-slate-50 border border-slate-200 rounded-2xl p-6">

<p class="text-gray-500">

📞 Contact urgence

</p>

<h3 class="text-lg font-bold mt-2">

{{ $reservation->contact_urgence }}

</h3>

</div>



</div>






{{-- DESCRIPTION --}}


<div class="mt-8 bg-blue-50 border border-blue-100 rounded-2xl p-6">


<h2 class="text-xl font-bold text-blue-700 mb-3">

📝 Description du problème

</h2>


<p class="text-gray-700 leading-relaxed">

{{ $reservation->description_maladie }}

</p>


</div>







{{-- RETOUR --}}


<div class="mt-8 flex justify-end">


<a href="{{ route('mes.reservations') }}"

class="px-8 py-3 rounded-xl bg-gradient-to-r from-blue-700 to-cyan-500 text-white font-bold shadow-lg hover:shadow-xl hover:scale-105 transition">


⬅ Retour aux réservations

</a>


</div>



</div>



</div>


</div>


@endsection