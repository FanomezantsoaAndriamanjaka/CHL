@extends('layouts.navbars')

@section('content')

<section class="mx-4 mt-6 mb-6 p-2 rounded-2xl bg-white border border-green-400 shadow-xl overflow-hidden">


    <div class="bg-gradient-to-r from-blue-800 via-blue-700 to-cyan-500 p-8 md:p-12 text-white min-h-96">


        {{-- ================= MESSAGE SUCCESS ================= --}}

        @if(session('success'))

        <div class="mb-8 rounded-2xl border border-green-200 bg-gradient-to-r from-green-50 to-emerald-50 p-5 shadow-lg">

            <div class="flex items-center gap-4">

                <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center text-3xl">

                    ✅

                </div>

                <div>

                    <h3 class="text-xl font-bold text-green-800">

                        Profil mis à jour

                    </h3>

                    <p class="text-green-700">

                        {{ session('success') }}

                    </p>

                </div>

            </div>

        </div>

        @endif


        {{-- ================= CARTE PRINCIPALE ================= --}}


            {{-- HEADER --}}

            <div class=" bg-gradient-to-r from-blue-100 via-blue-700 to-cyan-600 px-8 py-12 rounded overflow-hidden">

                    <div class=" z-10 flex flex-col lg:flex-row items-center justify-between gap-6">

                            <div>

                                <h1 class="text-4xl font-semibold text-white flex items-center gap-3">
                                <i class="fa-solid fa-book text-red"></i>
                                    Mon Profil

                                </h1>

                                <p class="mt-3 text-blue-100 text-lg">

                                    Consultez et gérez vos informations personnelles.

                                </p>

                            </div>

                            <div class="hidden lg:flex items-center justify-center w-24 h-24 rounded-full bg-white/20 backdrop-blur-sm text-5xl">

                                🩺

                            </div>

                    </div>

            </div>

       

            {{-- CONTENU --}}

            <div class="p-8 lg:p-10">

                {{-- PHOTO + IDENTITÉ --}}

                <div class="flex flex-col lg:flex-row items-center gap-8">

                    <div class="relative">

                        @if($user->photo_profil)

                            <img
                                src="{{ asset('storage/'.$user->photo_profil) }}"
                                alt="{{ $user->nom }}"
                                class="w-44 h-44 rounded-full object-cover border-4 border-blue-500 shadow-2xl">

                            @else

                                <div class="w-44 h-44 rounded-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-7xl text-white shadow-2xl">

                                    👤

                                </div>

                            @endif

                            <div class="absolute bottom-3 right-3 w-6 h-6 bg-green-500 border-3 border-white rounded-full">
                                
                            </div>

                    </div>

                    <div class="flex-1 text-center lg:text-left">

                        <h2 class="text-4xl font-extrabold text-gray-800">

                            {{ $user->nom }} {{ $user->prenom }}

                        </h2>

                        <p class="text-lg text-white mt-2">
                        <i class="fa-solid fa-envelope"></i>
                            {{ $user->email }}

                        </p>

                        <div class="flex flex-wrap justify-center lg:justify-start gap-3 mt-5">

                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-semibold">

                                👤 {{ $user->role }}

                            </span>

                            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full font-semibold">

                                ✔ Compte actif

                            </span>

                        </div>

                    </div>

                </div>

</section>



<hr class="my-10 mx-4 border-gray-400">

<section class="mx-4 mt-6 mb-6 p-2 rounded-2xl bg-white border border-green-400 shadow-xl overflow-hidden">


    <div class=" from-blue-800 via-blue-700 to-cyan-500 p-8 md:p-12 border border-blue-100  text-white min-h-96">


                {{-- ================= INFORMATIONS PERSONNELLES ================= --}}

        <h3 class="text-2xl font-bold text-gray-800 mb-8 flex text-center gap-3">

            📋 Informations personnelles

        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">


            {{-- Sexe --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">👤 Sexe</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->sexe ?: 'Non renseigné' }}

                </p>

            </div>


            {{-- Date de naissance --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">🎂 Date de naissance</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->date_naissance ?: 'Non renseignée' }}

                </p>

            </div>


            {{-- Lieu de naissance --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">📍 Lieu de naissance</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->lieu_naissance ?: 'Non renseigné' }}

                </p>

            </div>


            {{-- Nationalité --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">🌍 Nationalité</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->nationalite ?: 'Non renseignée' }}

                </p>

            </div>


            {{-- Téléphone --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">📞 Téléphone</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->telephone ?: 'Non renseigné' }}

                </p>

            </div>


            {{-- Adresse --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">🏠 Adresse</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->adresse ?: 'Non renseignée' }}

                </p>

            </div>


            {{-- Ville --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">🏙️ Ville</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->ville ?: 'Non renseignée' }}

                </p>

            </div>


            {{-- Pays --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">🌎 Pays</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->pays ?: 'Non renseigné' }}

                </p>

            </div>


            {{-- Profession --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">💼 Profession</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->profession ?: 'Non renseignée' }}

                </p>

            </div>


            {{-- Langue --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">🗣️ Langue</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->langue ?: 'Non renseignée' }}

                </p>

            </div>


            {{-- CIN --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">🪪 CIN</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->cin ?: 'Non renseigné' }}

                </p>

            </div>


            {{-- Passeport --}}

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 hover:shadow-lg transition">

                <p class="text-sm text-gray-500">🛂 Passeport</p>

                <p class="mt-2 text-lg font-bold text-gray-800">

                    {{ $user->passeport ?: 'Non renseigné' }}

                </p>

            </div>

        </div>

        {{-- ================= ACTIONS ================= --}}

        <div class="mt-10 border-t border-gray-200 pt-8">

            <div class="flex flex-col lg:flex-row items-center justify-between gap-6">

                {{-- MESSAGE --}}

                <div class="flex items-center gap-4">

                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center text-3xl">

                        💙

                    </div>

                    <div>

                        <h3 class="text-xl font-bold text-gray-800">

                            CHL

                        </h3>

                        <p class="text-gray-500">

                            Vous pouvez modifier vos informations personnelles à tout moment.

                        </p>

                    </div>

                </div>


                {{-- BOUTONS --}}

                <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">


                    <a href="{{ route('dashboard') }}"
                    class="px-8 py-3 rounded-xl bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold transition text-center shadow">

                        ⬅ Retour

                    </a>


                    <a href="{{ route('profil.edit') }}"
                    class="px-8 py-3 rounded-xl bg-gradient-to-r from-blue-700 via-blue-600 to-cyan-500 text-white font-bold shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300 text-center">

                        ✏ Modifier

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

@endsection

