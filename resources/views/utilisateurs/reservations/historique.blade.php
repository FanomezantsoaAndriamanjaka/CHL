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

        {{-- RESERVATIONS --}}

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4">
     
            @forelse($reservations as $reservation)



                    <div class="bg-white mt-9 mb-9 rounded-2xl mx-4 p-2 shadow-xl border border-green-400 overflow-hidden hover:shadow-2xl transition duration-300">



                        {{-- CARD HEADER --}}


                        <div class=" border border-blue-100 from-blue-50  bg-gradient-to-r to-cyan-50 p-6 flex flex-col md:flex-row justify-between gap-4">

                         
                                <div class="min-h-4">


                                    <h2 class="text-2xl font-bold text-blue-700">

                                    🏥 {{ $reservation->publication->nom ?? $reservation->consultation }}

                                    </h2>


                                    <p class="text-gray-500 mt-2">

                                    Réservation médicale

                                    </p>


                                </div>




                        </div>




                        <div class="grid grid-cols-1 md:grid-cols-1 border border-blue-50 from-blue-50  bg-white to-cyan-50 p-6 flex flex-col md:flex-row justify-between gap-4">

                         
                                {{-- CONTENU --}}
                                    
                            



                            <div class="bg-slate-50 rounded-2xl p-5">


                                <p class="text-gray-500 text-sm">

                                📅 Date de rendez-vous

                                </p>


                                <p class="font-bold text-gray-800 mt-2">

                                {{ $reservation->date_reception->format('d/m/Y') }}

                                </p>


                            </div>





                            <div class="bg-slate-50 rounded-2xl p-5">


                                <p class="text-gray-500 text-sm">

                                ⏰ Heure

                                </p>


                                <p class="font-bold text-gray-800 mt-2">

                                {{ \Carbon\Carbon::parse($reservation->heure)->format('H:i') }}

                                </p>


                            </div>





                            <div class="bg-slate-50 rounded-2xl p-5">


                                <p class="text-gray-500 text-sm">

                                🛏 Type de chambre

                                </p>


                                <p class="font-bold text-gray-800 mt-2">

                                {{ $reservation->type_chambre ?? 'Aucune' }}

                                </p>


                            </div>





                            <div class="bg-slate-50 rounded-2xl p-5">


                                <p class="text-gray-500 text-sm">

                                🔢 Nombre de chambre

                                </p>


                                <p class="font-bold text-gray-800 mt-2">

                                {{ $reservation->nombre_chambre ?? 0 }}

                                </p>


                            </div>


                    
                            {{-- DESCRIPTION --}}


                            <div class="mt-6 bg-blue-50 border border-blue-100 rounded-2xl p-5">


                                    <h3 class="font-bold text-blue-700 mb-2">

                                    📝 Description du problème

                                    </h3>


                                    <p class="text-gray-700 leading-relaxed">

                                    {{ $reservation->description_maladie }}

                                    </p>


                            </div>


                        </div>

                    <div class="grid grid-cols-2 md:grid-cols-2 border border-blue-50 from-blue-50  bg-white to-cyan-50 p-6 flex flex-col md:flex-row justify-between gap-4">


                            {{-- ACTION --}}


                            <div class="mt-6 flex justify-end">


                                    <a href="{{ route('reservation.show',$reservation->id) }}"

                                    class="px-6 py-3 rounded-xl bg-gradient-to-r from-blue-700 to-cyan-500 text-white font-bold shadow-lg hover:shadow-xl hover:scale-105 transition">


                                    👁 Voir le détail

                                    </a>


                            </div>

                            
                            {{-- STATUT --}}


                            <div class="mt-6 flex justify-end">


                                    @if($reservation->statut == 'Confirmée')

                                    <span class="bg-green-100 text-green-700 px-3 min-h-50 py-1 rounded-full font-bold">
                                        ✅ Confirmée
                                    </span>


                                    @elseif($reservation->statut == 'Refusée')

                                    <span class="bg-green-100 text-red-700 px-3 min-h-50 py-1 rounded-full font-bold">
                                    ❌ Refusée
                                    </span>


                                    @else

                                    <span class="bg-green-100 text-blue-700 px-3 min-h-50 py-1 rounded-full font-bold">
                                        ⏳ En attente
                                    </span>

                                    @endif


                                </div>



                    </div>
            </div>





            @empty



            <div class="bg-white rounded-3xl shadow-xl p-10 text-center">


                    <div class="text-6xl mb-5">

                    📭

                    </div>


                    <h2 class="text-2xl font-bold text-gray-700">

                    Aucune réservation trouvée

                    </h2>


                    <p class="text-gray-500 mt-3">

                    Vous n'avez encore effectué aucune demande de réservation.

                    </p>


            </div>



            @endforelse



</div>


@endsection