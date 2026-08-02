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




{{-- =========================
    SERVICES
========================= --}}
<section class="mt-8">

    <div class="p-1">

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">

            @forelse($publications as $publication)
            <div  class="mx-2 p-2  mt-6  border border-green-400 rounded-2xl bg-white">

                <div class="group bg-white overflow-hidden border border-blue-200 shadow-md hover:shadow-2xl transition-all">

                    {{-- IMAGE --}}
                    <div class="relative overflow-hidden">

                        @if($publication->image)

                            <img
                                src="{{ asset('storage/'.$publication->image) }}"
                                alt="{{ $publication->nom }}"
                                class="w-full h-60 object-cover group-hover:scale-110 transition duration-500">

                        @else

                            <div class="h-60 bg-gradient-to-br from-blue-100 to-cyan-100 flex items-center justify-center">

                                <i class="fa-solid fa-hospital text-6xl text-blue-700"></i>

                            </div>

                        @endif

                        {{-- Badge Prix --}}
                        <div class="absolute top-4 right-4">

                            <span class="bg-green-600 text-white px-4 py-2 rounded-full font-bold shadow-lg">

                                {{ number_format($publication->prix,0,',',' ') }} Ar

                            </span>

                        </div>

                    </div>

                    {{-- CONTENU --}}
                    <div class="p-6 flex fix-end flex-col h-full">

                        <h2 class="text-2xl font-bold text-blue-700 group-hover:text-cyan-600 transition">

                            {{ $publication->nom }}

                        </h2>

                        <p class="mt-4 text-gray-600 leading-7 line-clamp-3 min-h-[84px]">

                            {{ Str::limit(strip_tags($publication->description),150) }}

                        </p>

                        {{-- Disponibilité --}}
                        <div class="mt-6">

                            @if($publication->reservation_disponible)

                                <span class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-4 py-2 rounded-full font-semibold text-sm">

                                    <i class="fa-solid fa-circle-check"></i>

                                    Disponible

                                </span>

                            @else

                                <span class="inline-flex items-center gap-2 bg-red-100 text-red-700 px-4 py-2 rounded-full font-semibold text-sm">

                                    <i class="fa-solid fa-circle-xmark"></i>

                                    Indisponible

                                </span>

                            @endif

                        </div>

                        {{-- Boutons --}}
                        <div class="mt-auto pt-8 mb-2 flex gap-3">

                            <a
                                href="{{ route('publications.show',$publication) }}"
                                class="flex-1 text-center bg-blue-700 hover:bg-blue-800 text-white py-3 rounded-xl font-semibold transition">

                                <i class="fa-solid fa-eye mr-2"></i>

                                Détails

                            </a>

                            @if($publication->reservation_disponible)

                                <a
                                    href="{{ route('reservation.create') }}"
                                    class="flex-1 text-center bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold transition">

                                    <i class="fa-solid fa-calendar-check mr-2"></i>

                                    Réserver

                                </a>

                            @else

                                <button
                                    disabled
                                    class="flex-1 bg-gray-300 text-gray-600 py-3 rounded-xl font-semibold cursor-not-allowed">

                                    Indisponible

                                </button>

                            @endif

                        </div>

                    </div>

                </div>
            </div>
            @empty

                <div class="col-span-full">

                    <div class="bg-yellow-50 border border-yellow-300 rounded-3xl p-12 text-center">

                        <i class="fa-solid fa-circle-info text-5xl text-yellow-500 mb-5"></i>

                        <h3 class="text-2xl font-bold text-yellow-700">

                            Aucune publication disponible

                        </h3>

                        <p class="mt-3 text-gray-600">

                            Les services médicaux seront bientôt disponibles.

                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>


@endsection