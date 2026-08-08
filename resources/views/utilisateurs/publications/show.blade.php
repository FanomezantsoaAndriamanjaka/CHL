@extends('layouts.navbars')

@section('content')

{{-- ========================================================= --}}
{{-- HERO SECTION --}}
{{-- ========================================================= --}}

<div class="bg-gradient-to-r pt-9 from-blue-800 via-blue-700 to-cyan-500
            rounded-3xl mx-4  p-8 md:p-12 text-white">


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

{{-- LOGO --}}
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
    <div class="mt-10 mx-4 flex flex-wrap justify-center gap-4">

    <a
        href="{{ route('reservation.create') }}"
        class="bg-white text-blue-700 px-8 py-3 rounded-xl
               font-bold shadow-lg hover:scale-105 transition">

        <i class="fa-solid fa-calendar-check mr-2"></i>

        Prendre rendez-vous

    </a>

    <a
        href="{{ route('publications.index') }}"
        class="border-2 border-white px-8 py-3 rounded-xl
               font-bold hover:bg-white hover:text-blue-700 transition">

        <i class="fa-solid fa-hospital mr-2"></i>

        Nos services

    </a>

    </div>


</div>

{{-- ========================================================= --}}
{{-- DETAIL PUBLICATION --}}
{{-- ========================================================= --}}

<div class="mt-10">


<div class="grid grid-cols-1 lg:grid-cols-3 mx-4 gap-8 items-start">


    {{-- ================================================= --}}
    {{-- COLONNE GAUCHE : DETAIL --}}
    {{-- ================================================= --}}

    <div
        class="lg:col-span-2
               bg-white
               rounded-3xl
               border-2 border-blue-100
               shadow-xl
               overflow-hidden">

        {{-- IMAGE --}}
        @if($publication->image)

            <div class="relative
                        h-72
                        sm:h-96
                        lg:h-[460px]
                        overflow-hidden">

                <img
                    src="{{ asset('storage/'.$publication->image) }}"
                    alt="{{ $publication->nom }}"
                    class="w-full h-full object-cover">

                {{-- Overlay --}}
                <div
                    class="absolute inset-0
                           bg-gradient-to-t
                           from-black/60
                           via-transparent
                           to-transparent">
                </div>

                {{-- Nom sur l'image --}}
                <div
                    class="absolute bottom-0 left-0 right-0
                           p-6 md:p-8">

                    <span
                        class="inline-flex items-center gap-2
                               bg-blue-600/90
                               text-white
                               px-4 py-2
                               rounded-full
                               text-sm
                               font-semibold
                               mb-3">

                        <i class="fa-solid fa-stethoscope"></i>

                        Service médical

                    </span>

                    <h2
                        class="text-3xl md:text-4xl
                               font-extrabold
                               text-white">

                        {{ $publication->nom }}

                    </h2>

                </div>

            </div>

        @else

            <div
                class="h-72 sm:h-96 lg:h-[460px]
                       bg-gradient-to-br
                       from-blue-100
                       to-cyan-100
                       flex items-center justify-center">

                <i
                    class="fa-solid fa-hospital
                           text-8xl
                           text-blue-500/50">
                </i>

            </div>

        @endif


        {{-- DESCRIPTION --}}
        <div class="p-6 md:p-10">

            <div class="flex items-center gap-3 mb-6">

                <div
                    class="w-12 h-12
                           rounded-xl
                           bg-blue-100
                           text-blue-700
                           flex items-center justify-center">

                    <i class="fa-solid fa-circle-info text-xl"></i>

                </div>

                <div>

                    <p
                        class="text-sm
                               text-gray-400
                               font-semibold
                               uppercase
                               tracking-wide">

                        Présentation

                    </p>

                    <h3
                        class="text-2xl
                               font-bold
                               text-gray-800">

                        À propos de ce service

                    </h3>

                </div>

            </div>


            <div
                class="prose
                       prose-blue
                       max-w-none
                       text-gray-600
                       leading-8">

                {!! $publication->description !!}

            </div>

        </div>

    </div>



    {{-- ================================================= --}}
    {{-- COLONNE DROITE : INFORMATIONS --}}
    {{-- ================================================= --}}

    <div
        class="lg:col-span-1
               bg-gradient-to-br
               from-blue-50
               via-white
               to-cyan-50
               rounded-3xl
               border-2 border-blue-100
               shadow-xl
               p-6 md:p-7
               lg:sticky lg:top-6">


        {{-- TITRE --}}
        <div class="text-center mb-7">

            <div
                class="w-14 h-14
                       mx-auto
                       rounded-2xl
                       bg-gradient-to-br
                       from-blue-600
                       to-cyan-500
                       text-white
                       flex items-center justify-center
                       shadow-lg">

                <i class="fa-solid fa-clipboard-list text-2xl"></i>

            </div>

            <h3
                class="mt-4
                       text-2xl
                       font-extrabold
                       text-blue-800">

                Informations

            </h3>

            <div
                class="w-16 h-1
                       bg-gradient-to-r
                       from-blue-600
                       to-cyan-500
                       rounded-full
                       mx-auto
                       mt-3">
            </div>

        </div>


        {{-- NOM DU SERVICE --}}
        <div
            class="bg-white
                   rounded-2xl
                   border border-blue-100
                   p-4
                   mb-4
                   shadow-sm">

            <div class="flex items-center gap-3">

                <div
                    class="w-10 h-10
                           rounded-xl
                           bg-blue-100
                           text-blue-700
                           flex items-center justify-center
                           shrink-0">

                    <i class="fa-solid fa-hospital"></i>

                </div>

                <div class="min-w-0">

                    <p class="text-xs text-gray-400 font-semibold">
                        SERVICE
                    </p>

                    <p
                        class="font-bold
                               text-gray-800
                               truncate">

                        {{ $publication->nom }}

                    </p>

                </div>

            </div>

        </div>


        {{-- PRIX --}}
        <div
            class="bg-white
                   rounded-2xl
                   border border-green-100
                   p-5
                   mb-4
                   shadow-sm">

            <div class="flex items-center justify-between">

                <div class="flex items-center gap-3">

                    <div
                        class="w-11 h-11
                               rounded-xl
                               bg-green-100
                               text-green-600
                               flex items-center justify-center">

                        <i class="fa-solid fa-money-bill-wave"></i>

                    </div>

                    <div>

                        <p class="text-xs text-gray-400 font-semibold">
                            TARIF
                        </p>

                        <p class="text-sm text-gray-500">
                            Prix du service
                        </p>

                    </div>

                </div>

            </div>

            <div
                class="mt-4
                       text-center
                       bg-green-50
                       border border-green-200
                       rounded-xl
                       py-3">

                <span
                    class="text-2xl
                           md:text-3xl
                           font-extrabold
                           text-green-700">

                    {{ number_format($publication->prix,0,',',' ') }} Ar

                </span>

            </div>

        </div>


        {{-- DISPONIBILITE --}}
        <div
            class="bg-white
                   rounded-2xl
                   border border-gray-100
                   p-5
                   mb-6
                   shadow-sm">

            <p
                class="text-xs
                       text-gray-400
                       font-semibold
                       mb-3">

                DISPONIBILITÉ

            </p>

            @if($publication->reservation_disponible)

                <div
                    class="flex items-center gap-3
                           bg-green-50
                           border border-green-200
                           text-green-700
                           rounded-xl
                           px-4 py-3
                           font-bold">

                    <i class="fa-solid fa-circle-check text-xl"></i>

                    <span>
                        Réservation disponible
                    </span>

                </div>

            @else

                <div
                    class="flex items-center gap-3
                           bg-red-50
                           border border-red-200
                           text-red-700
                           rounded-xl
                           px-4 py-3
                           font-bold">

                    <i class="fa-solid fa-circle-xmark text-xl"></i>

                    <span>
                        Réservation indisponible
                    </span>

                </div>

            @endif

        </div>


        {{-- BOUTON RESERVATION --}}
        <div class="space-y-3">

            @if($publication->reservation_disponible)

                @auth

                    <a
                        href="{{ route('reservation.create') }}"
                        class="w-full
                               inline-flex
                               items-center
                               justify-center
                               gap-2
                               bg-green-600
                               hover:bg-green-700
                               text-white
                               px-6 py-3.5
                               rounded-xl
                               font-bold
                               shadow-lg
                               hover:shadow-xl
                               hover:scale-[1.02]
                               transition duration-300">

                        <i class="fa-solid fa-calendar-check"></i>

                        Réserver maintenant

                    </a>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="w-full
                               inline-flex
                               items-center
                               justify-center
                               gap-2
                               bg-blue-700
                               hover:bg-blue-800
                               text-white
                               px-6 py-3.5
                               rounded-xl
                               font-bold
                               shadow-lg
                               hover:shadow-xl
                               hover:scale-[1.02]
                               transition duration-300">

                        <i class="fa-solid fa-right-to-bracket"></i>

                        Se connecter pour réserver

                    </a>

                @endauth

            @else

                <button
                    disabled
                    class="w-full
                           inline-flex
                           items-center
                           justify-center
                           gap-2
                           bg-gray-300
                           text-gray-600
                           px-6 py-3.5
                           rounded-xl
                           font-bold
                           cursor-not-allowed">

                    <i class="fa-solid fa-lock"></i>

                    Réservation indisponible

                </button>

            @endif


            {{-- RETOUR --}}
            <a
                href="{{ route('publications.index') }}"
                class="w-full
                       inline-flex
                       items-center
                       justify-center
                       gap-2
                       bg-white
                       text-blue-700
                       border-2 border-blue-200
                       hover:bg-blue-700
                       hover:text-white
                       hover:border-blue-700
                       px-6 py-3.5
                       rounded-xl
                       font-bold
                       transition duration-300">

                <i class="fa-solid fa-arrow-left"></i>

                Retour aux services

            </a>

        </div>


        {{-- CONTACT --}}
        <div
            class="mt-6
                   pt-6
                   border-t border-blue-100
                   text-center">

            <p class="text-sm text-gray-500">
                Une question concernant ce service ?
            </p>

            <a
                href="{{ route('contact') }}"
                class="inline-flex
                       items-center
                       gap-2
                       mt-3
                       text-blue-700
                       hover:text-cyan-600
                       font-bold
                       transition">

                <i class="fa-solid fa-headset"></i>

                Nous contacter

            </a>

        </div>

    </div>

    </div>


</div>


@endsection
