@extends('layouts.navbars')

@section('content')

{{-- ========================================================= --}}
{{-- PAGE PRINCIPALE : 2PX SEULEMENT SUR MOBILE --}}
{{-- ========================================================= --}}

<div class="w-full px-[2px] md:px-4 overflow-x-hidden">

    {{-- ========================================================= --}}
    {{-- HERO SECTION --}}
    {{-- ========================================================= --}}

    <div class="w-full
                bg-gradient-to-r
                from-blue-800 via-blue-700 to-cyan-500
                rounded-2xl md:rounded-3xl
                pt-9 pb-6
                text-white
                overflow-hidden">

        {{-- TITRE --}}
        <div class="text-center px-2 md:px-6">

            <h1 class="text-5xl md:text-6xl font-extrabold">
                CHL
            </h1>

            <p class="mt-4 text-lg md:text-xl text-blue-100
                      max-w-3xl mx-auto">

                Votre centre médical de confiance pour des soins de qualité,
                un accompagnement personnalisé et une prise en charge adaptée
                à vos besoins.

            </p>

        </div>


        {{-- LOGO --}}
        <div class="flex justify-center mt-10">

            <div class="w-44 h-44 md:w-52 md:h-52
                        rounded-full
                        bg-white
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
        <div class="mt-10
                    px-2 md:px-6
                    flex flex-col sm:flex-row
                    justify-center
                    gap-4">

            <a
                href="{{ route('reservation.create') }}"
                class="w-full sm:w-auto
                       bg-white
                       text-blue-700
                       px-6 md:px-8 py-3
                       rounded-xl
                       font-bold
                       shadow-lg
                       hover:scale-105
                       transition
                       text-center">

                <i class="fa-solid fa-calendar-check mr-2"></i>

                Prendre rendez-vous

            </a>


            <a
                href="{{ route('publications.index') }}"
                class="w-full sm:w-auto
                       border-2 border-white
                       px-6 md:px-8 py-3
                       rounded-xl
                       font-bold
                       hover:bg-white
                       hover:text-blue-700
                       transition
                       text-center">

                <i class="fa-solid fa-hospital mr-2"></i>

                Nos services

            </a>

        </div>

    </div>


    {{-- ========================================================= --}}
    {{-- ESPACE ENTRE HERO ET ARTICLE --}}
    {{-- ========================================================= --}}

    <div class="mt-6 md:mt-10"></div>


    {{-- ========================================================= --}}
    {{-- CONTENU PRINCIPAL --}}
    {{-- ========================================================= --}}

    <div class="w-full
                grid
                grid-cols-1
                lg:grid-cols-3
                gap-4 md:gap-8
                items-start">


        {{-- ===================================================== --}}
        {{-- ARTICLE / DETAIL PUBLICATION --}}
        {{-- ===================================================== --}}

        <div
            class="w-full
                   min-w-0
                   lg:col-span-2
                   bg-white
                   rounded-2xl md:rounded-3xl
                   border-2 border-blue-100
                   shadow-xl
                   overflow-hidden">


            {{-- ================================================= --}}
            {{-- IMAGE --}}
            {{-- ================================================= --}}

            @if($publication->image)

                <div class="relative
                            w-full
                            h-64
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


                    {{-- TITRE SUR IMAGE --}}
                    <div
                        class="absolute
                               bottom-0
                               left-0
                               right-0
                               p-3 md:p-8">

                        <span
                            class="inline-flex
                                   items-center
                                   gap-2
                                   bg-blue-600/90
                                   text-white
                                   px-3 md:px-4
                                   py-2
                                   rounded-full
                                   text-xs md:text-sm
                                   font-semibold
                                   mb-3">

                            <i class="fa-solid fa-stethoscope"></i>

                            Service médical

                        </span>


                        <h2
                            class="text-2xl md:text-4xl
                                   font-extrabold
                                   text-white
                                   break-words">

                            {{ $publication->nom }}

                        </h2>

                    </div>

                </div>

            @else

                <div
                    class="w-full
                           h-64
                           sm:h-96
                           lg:h-[460px]
                           bg-gradient-to-br
                           from-blue-100
                           to-cyan-100
                           flex items-center justify-center">

                    <i
                        class="fa-solid fa-hospital
                               text-7xl md:text-8xl
                               text-blue-500/50">
                    </i>

                </div>

            @endif


            {{-- ================================================= --}}
            {{-- DESCRIPTION --}}
            {{-- ================================================= --}}

            <div class="w-full
                        px-2 md:px-10
                        py-6 md:py-10">


                {{-- TITRE PRESENTATION --}}
                <div class="flex items-center gap-3 mb-6">

                    <div
                        class="w-11 h-11 md:w-12 md:h-12
                               rounded-xl
                               bg-blue-100
                               text-blue-700
                               flex items-center justify-center
                               shrink-0">

                        <i class="fa-solid fa-circle-info text-xl"></i>

                    </div>


                    <div class="min-w-0">

                        <p
                            class="text-xs md:text-sm
                                   text-gray-400
                                   font-semibold
                                   uppercase
                                   tracking-wide">

                            Présentation

                        </p>


                        <h3
                            class="text-xl md:text-2xl
                                   font-bold
                                   text-gray-800
                                   break-words">

                            À propos de ce service

                        </h3>

                    </div>

                </div>


                {{-- DESCRIPTION --}}
                <div
                    class="prose
                           prose-blue
                           max-w-none
                           w-full
                           text-gray-600
                           leading-8
                           break-words
                           overflow-hidden">

                    {!! $publication->description !!}

                </div>

            </div>

        </div>



        {{-- ===================================================== --}}
        {{-- COLONNE INFORMATIONS --}}
        {{-- ===================================================== --}}

        <div
            class="w-full
                   min-w-0
                   lg:col-span-1
                   bg-gradient-to-br
                   from-blue-50
                   via-white
                   to-cyan-50
                   rounded-2xl md:rounded-3xl
                   border-2 border-blue-100
                   shadow-xl
                   p-2 md:p-7
                   lg:sticky
                   lg:top-6">


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


            {{-- ================================================= --}}
            {{-- SERVICE --}}
            {{-- ================================================= --}}

            <div
                class="bg-white
                       rounded-2xl
                       border border-blue-100
                       p-3 md:p-4
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
                                   break-words">

                            {{ $publication->nom }}

                        </p>

                    </div>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- PRIX --}}
            {{-- ================================================= --}}

            <div
                class="bg-white
                       rounded-2xl
                       border border-green-100
                       p-3 md:p-5
                       mb-4
                       shadow-sm">

                <div class="flex items-center gap-3">

                    <div
                        class="w-11 h-11
                               rounded-xl
                               bg-green-100
                               text-green-600
                               flex items-center justify-center
                               shrink-0">

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


                <div
                    class="mt-4
                           text-center
                           bg-green-50
                           border border-green-200
                           rounded-xl
                           py-3
                           overflow-hidden">

                    <span
                        class="text-xl md:text-3xl
                               font-extrabold
                               text-green-700
                               break-words">

                        {{ number_format($publication->prix,0,',',' ') }} Ar

                    </span>

                </div>

            </div>


            {{-- ================================================= --}}
            {{-- DISPONIBILITE --}}
            {{-- ================================================= --}}

            <div
                class="bg-white
                       rounded-2xl
                       border border-gray-100
                       p-3 md:p-5
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
                               px-3 md:px-4
                               py-3
                               font-bold">

                        <i
                            class="fa-solid
                                   fa-circle-check
                                   text-xl
                                   shrink-0">
                        </i>

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
                               px-3 md:px-4
                               py-3
                               font-bold">

                        <i
                            class="fa-solid
                                   fa-circle-xmark
                                   text-xl
                                   shrink-0">
                        </i>

                        <span>
                            Réservation indisponible
                        </span>

                    </div>

                @endif

            </div>


            {{-- ================================================= --}}
            {{-- BOUTONS --}}
            {{-- ================================================= --}}

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
                                   px-4 md:px-6
                                   py-3.5
                                   rounded-xl
                                   font-bold
                                   shadow-lg
                                   hover:shadow-xl
                                   hover:scale-[1.02]
                                   transition
                                   duration-300
                                   text-center">

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
                                   px-4 md:px-6
                                   py-3.5
                                   rounded-xl
                                   font-bold
                                   shadow-lg
                                   hover:shadow-xl
                                   hover:scale-[1.02]
                                   transition
                                   duration-300
                                   text-center">

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
                               px-4 md:px-6
                               py-3.5
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
                           px-4 md:px-6
                           py-3.5
                           rounded-xl
                           font-bold
                           transition
                           duration-300
                           text-center">

                    <i class="fa-solid fa-arrow-left"></i>

                    Retour aux services

                </a>

            </div>


            {{-- ================================================= --}}
            {{-- CONTACT --}}
            {{-- ================================================= --}}

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
