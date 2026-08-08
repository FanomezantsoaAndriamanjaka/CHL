@extends('layouts.navbars')

@section('content')

<section class="mx-4 mt-6 mb-6 p-2 rounded-2xl bg-white border border-green-400 shadow-xl overflow-hidden">


<div class="pt-24 bg-gradient-to-r from-blue-800 via-blue-700 to-cyan-500 p-8 md:p-12 text-white min-h-96">

@if(session('success'))

    <div class="mb-6 bg-green-50 border border-green-400 text-green-700
                px-5 py-4 rounded-lg shadow">

        <i class="fa-solid fa-circle-check mr-2"></i>

        {{ session('success') }}

    </div>

@endif


{{-- ================= PROFIL ================= --}}

<div class="flex flex-col lg:flex-row items-center gap-8">


    {{-- PHOTO + STATUT --}}
    <div class="relative flex-shrink-0">

        @if($user->photo_profil)

            <img
                src="{{ asset('storage/'.$user->photo_profil) }}"
                alt="{{ $user->nom }}"
                class="w-44 h-44 rounded-full object-cover
                       border-4 border-blue-500 shadow-2xl">

        @else

            <div
                class="w-44 h-44 rounded-full
                       bg-gradient-to-br from-blue-600 to-cyan-500
                       flex items-center justify-center
                       text-7xl text-white shadow-2xl">

                <i class="fa-solid fa-user"></i>

            </div>

        @endif


        {{-- BOUTON STATUT EN LIGNE --}}
        <span
            class="absolute bottom-4 right-4
                   w-5 h-5
                   bg-green-500
                   border-2 border-white
                   rounded-full
                   shadow-md
                   block">
        </span>

    </div>



    {{-- INFORMATIONS UTILISATEUR --}}
    <div class="flex-1 text-center lg:text-left">


        <h2 class="text-4xl font-extrabold text-gray-800">

            {{ $user->nom }} {{ $user->prenom }}

        </h2>


        <p class="text-lg text-white-600 mt-2">

            <i class="fa-solid fa-envelope text-red-400 mr-2"></i>

            {{ $user->email }}

        </p>


        <div class="flex flex-wrap justify-center lg:justify-start gap-3 mt-5">


            {{-- ROLE --}}
            <span
                class="bg-blue-100 text-blue-700
                       px-4 py-2 rounded-full
                       font-semibold">

                <i class="fa-solid fa-user-tag mr-2"></i>

                {{ ucfirst($user->role) }}

            </span>


            {{-- COMPTE ACTIF --}}
            <span
                class="bg-green-100 text-green-700
                       px-4 py-2 rounded-full
                       font-semibold">

                <i class="fa-solid fa-circle-check mr-2"></i>

                Compte actif

            </span>


        </div>


    </div>

</div>

</section>

<div class="grid md:grid-cols-3 gap-6 mx-4 mt-8">


    {{-- RENDEZ-VOUS --}}
    <div class="bg-white rounded-xl border border-blue-100 shadow-md p-4">


        <h2 class="text-xl font-bold text-blue-600 flex items-center gap-3">

            <i class="fa-solid fa-calendar-check text-blue-600"></i>

            Rendez-vous

        </h2>


        <p class="mt-2 text-gray-600">
            Prenez un rendez-vous médical rapidement.
        </p>


        <a href="{{ route('reservation.create') }}"
        class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">

            Réserver

        </a>


    </div>





    {{-- PUBLICATIONS --}}
    <div class="bg-white rounded-xl border border-blue-100 shadow-md p-4">


        <h2 class="text-xl font-bold text-blue-600 flex items-center gap-3">

            <i class="fa-solid fa-newspaper text-blue-600"></i>

            Publications

        </h2>


        <p class="mt-2 text-gray-600">
            Consultez les informations et actualités médicales.
        </p>


        <a href="{{ route('publications.index') }}"
        class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">

            Voir

        </a>


    </div>





    {{-- MON COMPTE --}}
    <div class="bg-white rounded-xl border border-blue-100 shadow-md p-4">


        <h2 class="text-xl font-bold text-blue-600 flex items-center gap-3">

            <i class="fa-solid fa-user text-blue-600"></i>

            Mon compte

        </h2>


        <p class="mt-2 text-gray-600">
            Gérez vos informations personnelles.
        </p>


        <a href="{{ route('profil.index') }}"
        class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">

            Profil

        </a>


    </div>





    {{-- HISTORIQUE --}}
    <div class="bg-white rounded-xl border border-blue-100 shadow-md p-4">


        <h2 class="text-xl font-bold text-blue-600 flex items-center gap-3">

            <i class="fa-solid fa-clock-rotate-left text-blue-600"></i>

            Historique

        </h2>


        <p class="mt-2 text-gray-600">
            Jereo ny tantaran'ny fangatahanao
        </p>


        <a href="{{ route('mes.reservations') }}"
        class="inline-block mt-4 bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition">


            <i class="fa-solid fa-list-check mr-2"></i>

            Mes réservations


        </a>


    </div>





    {{-- FACTURES --}}
    <div class="bg-white rounded-xl border border-blue-100 shadow-md p-4">


        <h2 class="text-xl font-bold text-blue-600 flex items-center gap-3">

            <i class="fa-solid fa-file-invoice-dollar text-blue-600"></i>

            Mes factures

        </h2>


        <p class="mt-2 text-gray-600">

            Consultez vos factures médicales et le suivi des paiements.

        </p>


        <a href="{{ route('mes.factures') }}"
        class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">


            <i class="fa-solid fa-file-pdf mr-2"></i>

            Voir mes factures


        </a>


    </div>





    {{-- PARAMETRES --}}
    <div class="bg-white rounded-xl border border-blue-100 shadow-md p-4">


        <h2 class="text-xl font-bold text-blue-600 flex items-center gap-3">

            <i class="fa-solid fa-gear text-blue-600"></i>

            Paramètres

        </h2>


        <p class="mt-2 text-gray-600">

            Gérez les paramètres de votre compte.

        </p>


        <a href="#parametres"
        class="inline-block mt-4 bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">


            <i class="fa-solid fa-sliders mr-2"></i>

            Paramètres


        </a>


    </div>


</div>
@endsection