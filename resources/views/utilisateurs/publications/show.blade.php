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


<div class="max-w-6xl mx-auto px-6 py-10">

<div class="bg-white rounded-2xl shadow-xl overflow-hidden">

<img
src="{{ asset('storage/'.$publication->image) }}"
class="w-full h-96 object-cover">

<div class="p-10">

<h1 class="text-4xl font-bold text-blue-700">

{{ $publication->nom }}

</h1>

<div class="mt-5 text-gray-700 leading-8">

{!! $publication->description !!}

</div>

<div class="mt-8">

<span class="text-4xl font-bold text-green-600">

{{ number_format($publication->prix,0,',',' ') }} Ar

</span>

</div>





<div class="mt-10 flex gap-4">


    {{-- RESERVATION --}}

    @if($publication->reservation_disponible)


        <a href="{{ route('reservation.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl transition">

            📅 Réserver maintenant

        </a>


    @else


        <button
            disabled
            class="bg-gray-400 text-white px-8 py-3 rounded-xl cursor-not-allowed">

            🔒 Réservation indisponible

        </button>


    @endif



    {{-- RETOUR --}}

    <a href="{{ route('publications.index') }}"
       class="bg-gray-300 hover:bg-gray-400 px-8 py-3 rounded-xl transition">

        ← Retour

    </a>


</div>

</div>

</div>

</div>

@endsection