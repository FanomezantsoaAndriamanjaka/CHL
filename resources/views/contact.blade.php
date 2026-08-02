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


<section class="mx-4 p-2 mt-6 border border-green-400 rounded-2xl bg-white shadow-xl">


    {{-- HEADER --}}

    <div class="bg-gradient-to-r mb-2 from-blue-700 to-cyan-500 
                rounded-t-xl p-8 text-white border border-blue-400 ">


        <h1 class="text-4xl font-bold">

            📞 Contactez-nous

        </h1>


        <p class="mt-3 text-lg text-blue-100">

            Notre équipe est disponible pour répondre à vos questions.

        </p>


    </div>



    {{-- CONTACT INFO --}}

    <div class="grid grid-cols-1 border border-green-400 rounded-b-xl md:grid-cols-3 gap-6 p-4">



        <div class="bg-blue-50 rounded-2xl p-6 text-center">

            <i class="fa-solid fa-location-dot text-4xl text-blue-700"></i>

            <h2 class="font-bold text-xl mt-4">
                Adresse
            </h2>

            <p class="text-gray-600 mt-2">
                CHL
                <br>
                Toliara Madagascar
            </p>

        </div>




        <div class="bg-green-50 rounded-2xl p-6 text-center">

            <i class="fa-solid fa-phone text-4xl text-green-600"></i>

            <h2 class="font-bold text-xl mt-4">
                Téléphone
            </h2>

            <p class="text-gray-600 mt-2">

                +2634 01 643 82

            </p>

        </div>




        <div class="bg-cyan-50 rounded-2xl p-6 text-center">

            <i class="fa-solid fa-envelope text-4xl text-cyan-600"></i>

            <h2 class="font-bold text-xl mt-4">
                Email
            </h2>

            <p class="text-gray-600 mt-2">

                contact@chl.mg

            </p>

        </div>



    </div>



    {{-- RESEAUX SOCIAUX --}}

    <div class="p-8 border-t">


        <h2 class="text-2xl font-bold text-blue-700 text-center">

            Suivez-nous

        </h2>



        <div class="flex justify-center gap-6 mt-6">


            <a href="#"
            class="text-blue-600 text-3xl">

                <i class="fa-brands fa-facebook"></i>

            </a>



            <a href="#"
            class="text-green-600 text-3xl">

                <i class="fa-brands fa-whatsapp"></i>

            </a>



            <a href="#"
            class="text-red-600 text-3xl">

                <i class="fa-brands fa-youtube"></i>

            </a>



            <a href="#"
            class="text-pink-600 text-3xl">

                <i class="fa-brands fa-instagram"></i>

            </a>


        </div>


    </div>


</section>


@endsection