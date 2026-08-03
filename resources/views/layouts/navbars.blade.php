<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHL - Santé Plus</title>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

      @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
class="bg-gray-100 flex flex-col min-h-screen"
x-data="{ open:false }">


<nav class="sticky top-0 bg-white/90 backdrop-blur-lg shadow-lg z-50 border-b border-blue-100">

@php
    $count = 0;

    if(Auth::check()) {

        $count = Auth::user()
                    ->notifications()
                    ->where('lu', false)
                    ->count();

    }
@endphp

<div class="max-w-7xl mx-auto px-4">


<div class="flex items-center justify-between h-20">



    {{-- LOGO --}}

    <a href="{{ route('accueil') }}"
    class="flex items-center gap-3">


    <div class="w-14 h-14 rounded-full overflow-hidden 
    border-4 border-blue-600 shadow-md ring-4 ring-blue-100">


    <img
    src="{{ asset('images/hopital.jpg') }}"
    alt="CHL"
    class="w-full h-full object-cover">


</div>



<div class="hidden md:block">


<h1 class="font-bold text-blue-700 text-xl">

CHL

</h1>

</div>


</a>





{{-- MENU DESKTOP --}}

<div class="hidden lg:flex items-center gap-2">



<a href="{{ route('accueil') }}"
class="flex items-center gap-2 px-4 py-2 rounded-xl
text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">


<i class="fa-solid fa-house"></i>

Accueil


</a>





<a href="{{ route('contact') }}"
class="flex items-center gap-2 px-4 py-2 rounded-xl
text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">


<i class="fa-solid fa-phone"></i>

Contact


</a>





<a href="{{ route('dashboard') }}"
class="flex items-center gap-2 px-4 py-2 rounded-xl
text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">


<i class="fa-solid fa-chart-line"></i>

Dashboard


</a>






<a href="{{ route('mes.notifications') }}"
class="relative flex items-center gap-2 px-4 py-2 rounded-xl
text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">


<i class="fa-solid fa-bell"></i>


Notifications



@if($count)

<span class="absolute -top-1 -right-1 
bg-red-600 text-white text-xs 
rounded-full px-2 py-0.5">

{{ $count }}

</span>

@endif


</a>





<form method="POST"
action="{{ route('logout') }}">

@csrf


<button
class="flex items-center gap-2 px-4 py-2 rounded-xl
text-gray-700 hover:bg-red-50 hover:text-red-600 transition">


<i class="fa-solid fa-right-from-bracket"></i>


Déconnexion


</button>


</form>



</div>





{{-- HAMBURGER MOBILE --}}


<button
@click="open=!open"
class="lg:hidden text-3xl text-blue-700">


<i class="fa-solid"
:class="open ? 'fa-xmark':'fa-bars'"></i>


</button>



</div>


</div>


</nav>

        {{-- MENU MOBILE --}}
<div
    x-show="open"
    x-transition
    @click.outside="open=false"

    class="absolute right-2 top-20 w-48 bg-white border border-blue-100 rounded-xl shadow-xl p-2 lg:hidden">


    <div class="flex flex-col gap-1">


        <a href="/accueil"
        class="flex items-center gap-3 px-3 py-2 rounded-lg
        hover:bg-blue-50 hover:border-blue-400 border border-transparent transition">


            <i class="fa-solid fa-house text-blue-700 w-5"></i>

            Accueil

        </a>




        <a href="{{ route('contact') }}"
        class="flex items-center gap-3 px-3 py-2 rounded-lg
        hover:bg-blue-50 hover:border-blue-400 border border-transparent transition">


            <i class="fa-solid fa-phone text-green-600 w-5"></i>

            Contact

        </a>





        <a href="{{ route('dashboard') }}"
        class="flex items-center gap-3 px-3 py-2 rounded-lg
        hover:bg-blue-50 hover:border-blue-400 border border-transparent transition">


            <i class="fa-solid fa-chart-line text-blue-700 w-5"></i>

            Dashboard

        </a>





        <a href="{{ route('mes.notifications') }}"
        class="flex items-center justify-between px-3 py-2 rounded-lg
        hover:bg-blue-50 hover:border-blue-400 border border-transparent transition">


            <span class="flex items-center gap-3">


                <i class="fa-solid fa-bell text-yellow-500 w-5"></i>


                Notification


            </span>



            @if($count)

                <span class="bg-red-600 text-white rounded-full px-2 text-xs">

                    {{ $count }}

                </span>

            @endif


        </a>




        <hr class="my-1">





        <form method="POST"
              action="{{ route('logout') }}">

            @csrf


            <button
            class="w-full flex items-center gap-3 px-3 py-2 rounded-lg
            hover:bg-red-50 hover:border-red-400 border border-transparent transition">


                <i class="fa-solid fa-right-from-bracket text-red-600 w-5"></i>


                Déconnexion


            </button>


        </form>



    </div>


</div>
</nav>

<main class="flex-1">

    @yield('content')

</main>

<footer class="bg-gray-200 mx-4 rounded-2xl border-t pt-6 mb-6 mt-6">

    <div class="max-w-7xl mx-auto px-4 py-6 text-center text-sm text-gray-700">

        © {{ date('d/m/Y') }}

        GCM - Gestion des Cabinets Médicaux.

        Tous droits réservés.

        <br>

        Développé par ANDRIAMANJAKA Fanomezantsoa

    </div>

</footer>

</body>
</html>