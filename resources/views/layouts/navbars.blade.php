<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CHL — Gestion des Cabinets Médicaux</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ================= FONT AWESOME ================= --}}

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- ================= VITE ================= --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body
    class="bg-gray-50 text-gray-800 min-h-screen"
    x-data="{ open: false }">


    {{-- ========================================================= --}}
    {{-- NAVBAR FIXE --}}
    {{-- ========================================================= --}}

    @php

        $count = 0;

        if (Auth::check()) {

            $count = Auth::user()
                ->notifications()
                ->where('lu', false)
                ->count();

        }

    @endphp


    <header
        class="fixed
               top-0
               left-0
               right-0
               z-50
               bg-white
               shadow-md
               border-b
               border-blue-100">


        {{-- ================= NAVBAR PRINCIPALE ================= --}}

        <div
            class="w-full
                   px-6
                   lg:px-16
                   py-3
                   flex
                   items-center
                   justify-between">


            {{-- ================= LOGO ================= --}}

            <a
                href="{{ route('accueil') }}"
                class="flex items-center gap-3">


                <div
                    class="w-14 h-14
                           rounded-full
                           overflow-hidden
                           border-4 border-blue-600
                           shadow-md
                           ring-4 ring-blue-100">


                    <img
                        src="{{ asset('images/hopital.jpg') }}"
                        alt="CHL"
                        class="w-full h-full object-cover">


                </div>


                <span
                    class="text-xl
                           font-bold
                           text-blue-700
                           uppercase">

                    CHL

                </span>


            </a>



            {{-- ================================================= --}}
            {{-- MENU DESKTOP --}}
            {{-- ================================================= --}}

            <nav
                class="hidden
                       lg:flex
                       items-center
                       gap-8">


                {{-- ACCUEIL --}}

                <a
                    href="{{ route('accueil') }}"
                    class="flex
                           items-center
                           gap-2
                           uppercase
                           text-sm
                           font-semibold
                           tracking-wide
                           text-gray-700
                           hover:text-blue-700
                           hover:border-b-2
                           hover:border-blue-700
                           pb-2
                           px-2
                           transition">


                    <i
                        class="fa-solid fa-house
                               text-blue-600">
                    </i>


                    Accueil

                </a>



                {{-- CONTACT --}}

                <a
                    href="{{ route('contact') }}"
                    class="flex
                           items-center
                           gap-2
                           uppercase
                           text-sm
                           font-semibold
                           tracking-wide
                           text-gray-700
                           hover:text-blue-700
                           hover:border-b-2
                           hover:border-blue-700
                           pb-2
                           px-2
                           transition">


                    <i
                        class="fa-solid fa-phone
                               text-green-600">
                    </i>


                    Contact

                </a>



                {{-- DASHBOARD --}}

                <a
                    href="{{ route('dashboard') }}"
                    class="flex
                           items-center
                           gap-2
                           uppercase
                           text-sm
                           font-semibold
                           tracking-wide
                           text-gray-700
                           hover:text-blue-700
                           hover:border-b-2
                           hover:border-blue-700
                           pb-2
                           px-2
                           transition">


                    <i
                        class="fa-solid fa-chart-line
                               text-blue-600">
                    </i>


                    Dashboard

                </a>



                {{-- NOTIFICATIONS --}}

                <a
                    href="{{ route('mes.notifications') }}"
                    class="relative
                           flex
                           items-center
                           gap-2
                           uppercase
                           text-sm
                           font-semibold
                           tracking-wide
                           text-gray-700
                           hover:text-blue-700
                           hover:border-b-2
                           hover:border-blue-700
                           pb-2
                           px-2
                           transition">


                    <i
                        class="fa-solid fa-bell
                               text-yellow-500">
                    </i>


                    Notifications


                    @if($count)

                        <span
                            class="absolute
                                   -top-3
                                   -right-4
                                   bg-red-600
                                   text-white
                                   text-xs
                                   rounded-full
                                   px-2
                                   py-0.5">


                            {{ $count }}


                        </span>

                    @endif


                </a>



                {{-- DECONNEXION --}}

                <form
                    method="POST"
                    action="{{ route('logout') }}">


                    @csrf


                    <button
                        type="submit"
                        class="flex
                               items-center
                               gap-2
                               uppercase
                               text-sm
                               font-semibold
                               tracking-wide
                               text-red-600
                               hover:text-red-800
                               hover:border-b-2
                               hover:border-red-600
                               pb-2
                               px-2
                               transition">


                        <i
                            class="fa-solid
                                   fa-right-from-bracket">
                        </i>


                        Déconnexion


                    </button>


                </form>


            </nav>



            {{-- ================================================= --}}
            {{-- HAMBURGER MOBILE --}}
            {{-- ================================================= --}}

            <button
                type="button"
                @click="open = !open"
                class="lg:hidden
                       text-3xl
                       text-blue-700
                       focus:outline-none">


                {{-- MENU FERME --}}

                <i
                    x-show="!open"
                    class="fa-solid fa-bars">
                </i>


                {{-- MENU OUVERT --}}

                <i
                    x-show="open"
                    class="fa-solid fa-xmark">
                </i>


            </button>


        </div>



        {{-- ================================================= --}}
        {{-- MENU MOBILE --}}
        {{-- ================================================= --}}

        <div
            x-show="open"
            x-transition
            @click.outside="open = false"
            @keydown.escape.window="open = false"

            class="absolute
                   top-full
                   right-4
                   mt-2
                   w-56
                   bg-white
                   border border-blue-100
                   rounded-xl
                   shadow-xl
                   p-3
                   lg:hidden">


            <div
                class="flex
                       flex-col
                       gap-2">


                {{-- ACCUEIL --}}

                <a
                    href="{{ route('accueil') }}"
                    @click="open = false"
                    class="flex
                           items-center
                           gap-3
                           px-3
                           py-2
                           rounded-lg
                           hover:bg-blue-50
                           transition">


                    <i
                        class="fa-solid fa-house
                               text-blue-700
                               w-5">
                    </i>


                    <span
                        class="uppercase
                               text-sm
                               font-semibold">

                        Accueil

                    </span>


                </a>



                {{-- CONTACT --}}

                <a
                    href="{{ route('contact') }}"
                    @click="open = false"
                    class="flex
                           items-center
                           gap-3
                           px-3
                           py-2
                           rounded-lg
                           hover:bg-blue-50
                           transition">


                    <i
                        class="fa-solid fa-phone
                               text-green-600
                               w-5">
                    </i>


                    <span
                        class="uppercase
                               text-sm
                               font-semibold">

                        Contact

                    </span>


                </a>



                {{-- DASHBOARD --}}

                <a
                    href="{{ route('dashboard') }}"
                    @click="open = false"
                    class="flex
                           items-center
                           gap-3
                           px-3
                           py-2
                           rounded-lg
                           hover:bg-blue-50
                           transition">


                    <i
                        class="fa-solid fa-chart-line
                               text-blue-700
                               w-5">
                    </i>


                    <span
                        class="uppercase
                               text-sm
                               font-semibold">

                        Dashboard

                    </span>


                </a>



                {{-- NOTIFICATIONS --}}

                <a
                    href="{{ route('mes.notifications') }}"
                    @click="open = false"
                    class="flex
                           items-center
                           justify-between
                           px-3
                           py-2
                           rounded-lg
                           hover:bg-blue-50
                           transition">


                    <span
                        class="flex
                               items-center
                               gap-3">


                        <i
                            class="fa-solid fa-bell
                                   text-yellow-500
                                   w-5">
                        </i>


                        <span
                            class="uppercase
                                   text-sm
                                   font-semibold">

                            Notifications

                        </span>


                    </span>


                    @if($count)

                        <span
                            class="bg-red-600
                                   text-white
                                   rounded-full
                                   px-2
                                   py-0.5
                                   text-xs">

                            {{ $count }}

                        </span>

                    @endif


                </a>



                {{-- SEPARATION --}}

                <hr
                    class="my-1">



                {{-- DECONNEXION --}}

                <form
                    method="POST"
                    action="{{ route('logout') }}">


                    @csrf


                    <button
                        type="submit"
                        class="w-full
                               flex
                               items-center
                               gap-3
                               px-3
                               py-2
                               rounded-lg
                               hover:bg-red-50
                               transition">


                        <i
                            class="fa-solid
                                   fa-right-from-bracket
                                   text-red-600
                                   w-5">
                        </i>


                        <span
                            class="uppercase
                                   text-sm
                                   font-semibold">

                            Déconnexion

                        </span>


                    </button>


                </form>


            </div>


        </div>


    </header>



    {{-- ========================================================= --}}
    {{-- BODY / ESPACE CONTENU --}}
    {{-- ========================================================= --}}

    <main
        class="pt-24
               min-h-screen">


        <div
            class="w-full
                   px-4
                   sm:px-6
                   lg:px-8
                   py-6">


            @yield('content')


        </div>


    </main>



    {{-- ========================================================= --}}
    {{-- FOOTER --}}
    {{-- ========================================================= --}}

    <footer
        class="bg-white
               border-t
               border-gray-200
               mt-10
               py-8">


        <div
            class="max-w-7xl
                   mx-auto
                   px-6
                   text-center">


            <p
                class="text-gray-600">

                © {{ date('Y') }}

            </p>


            <p
                class="text-gray-600
                       mt-1">

                GCM - Gestion des Cabinets Médicaux.

            </p>


            <p
                class="text-gray-600
                       mt-1">

                Tous droits réservés.

            </p>


            <p
                class="mt-2
                       text-gray-500
                       text-sm">


                Développé par
                <span class="font-semibold text-blue-600">
                    ANDRIAMANJAKA Fanomezantsoa
                </span>


            </p>


        </div>


    </footer>



</body>

</html>