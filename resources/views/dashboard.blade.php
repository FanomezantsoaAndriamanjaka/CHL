@extends('layouts.navbars')

@section('content')

<section class="mx-4 mt-6 mb-6 p-2 rounded-2xl bg-white border border-green-400 shadow-xl overflow-hidden">


    <div class="bg-gradient-to-r from-blue-800 via-blue-700 to-cyan-500 p-8 md:p-12 text-white min-h-96">


        @if(session('success'))

            <div class="mb-6 bg-cyan-500 border border-green-400 text-green-700 px-5 py-4 rounded-lg shadow">

                {{ session('success') }}

            </div>

        @endif



        {{-- PHOTO PROFIL --}}

        <div class="flex justify-center">

            @if(Auth::user()->photo_profil)

                <img 
                    src="{{ asset('storage/'.Auth::user()->photo_profil) }}"
                    alt="Photo profil"
                    class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-xl">

            @else

                <div class="w-32 h-32 rounded-full bg-white flex items-center justify-center border-4 border-white shadow-xl">

                    <i class="fa-solid fa-user text-5xl text-green-600"></i>

                </div>

            @endif

        </div>




        {{-- MESSAGE BIENVENUE --}}

        <div class="text-center text-white mt-6">


            <h1 class="text-3xl font-bold">

                Bienvenue, {{ Auth::user()->nom }} {{ Auth::user()->prenom }}

            </h1>


            <p class="mt-3 text-lg">

                Bienvenue dans votre espace personnel de la CHL

            </p>


        </div>


    </div>

</section>

<section class="mx-4 mt-6 mb-6 rounded-2xl bg-white border border-green-400 shadow-xl overflow-hidden">
   <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-2 mb-2 bg-white mx-2 border border-blue-200 shadow-lg p-2">


        <div class="bg-white rounded-xl border border-blue-100  shadow-md p-4">

            <h2 class="text-xl font-bold text-blue-600">
                📅 Rendez-vous
            </h2>

            <p class="mt-2 text-gray-600">
                Prenez un rendez-vous médical rapidement.
            </p>

            <a href="{{ route('reservation.create') }}"
            class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg">
                Réserver
            </a>

        </div>



        <div class="bg-white rounded-xl border border-blue-100  shadow-md p-4">

            <h2 class="text-xl font-bold text-blue-600">
                📰 Publications
            </h2>

            <p class="mt-2 text-gray-600">
                Consultez les informations et actualités médicales.
            </p>

            <a href="{{ route('publications.index') }}"
            class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg">
                Voir
            </a>

        </div>



        <div class="bg-white rounded-xl border border-blue-100  shadow-md p-4">

            <h2 class="text-xl font-bold text-blue-600">
                👤 Mon compte
            </h2>

            <p class="mt-2 text-gray-600">
                Gérez vos informations personnelles.
            </p>

            <a href="{{ route('profil.index') }}"
            class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg">
                Profil
            </a>

        </div>

        <div class="bg-white rounded-xl border border-blue-100  shadow-md p-4">

            <h2 class="text-xl font-bold text-blue-600">
                📅 Historique
            </h2>

            <p class="mt-2 text-gray-600">
            Jereo ny tantaran'ny fangatahanao
            </p>

            <a href="{{ route('mes.reservations') }}"
            class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-lg">

                📋 Mes réservations

            </a>

        </div>


        <div class="bg-white rounded-xl border border-blue-100  shadow-md p-4">

            <h2 class="text-xl font-bold text-blue-600">
                📄 Mes factures
            </h2>

            <p class="mt-2 text-gray-600">
                Consultez vos factures médicales et le suivi des paiements.
            </p>

            <a href="{{ route('mes.factures') }}"
            class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg">

                📄 Voir mes factures

            </a>

        </div>

        <div class="bg-white rounded-xl border border-blue-100 p-4 shadow-md p-2">

            <h2 class="text-xl font-bold text-blue-600">
                📄 Parametres
            </h2>

            <p class="mt-2 text-gray-600">
                Consultez vos factures médicales et le suivi des paiements.
            </p>

            <a href="#parametres"
            class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg">

                📄 Parametres

            </a>

        </div>



    </div>

</section>
@endsection