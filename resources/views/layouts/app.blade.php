<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>
        {{ config('app.name', 'CHL') }}
    </title>


    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
          rel="stylesheet">


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


          @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body
class="font-sans antialiased bg-gray-100 min-h-screen"
x-data="{open:false}">



{{-- ================= NAVBAR ================= --}}

<nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">


    <div class="w-full px-6 lg:px-16 py-3 flex items-center justify-between">


        {{-- LOGO --}}
        <a href="{{ route('accueil') }}"
           class="flex items-center gap-3">


            <div class="w-14 h-14 rounded-full overflow-hidden 
            border-4 border-blue-600 shadow-lg">


                <img
                src="{{ asset('images/hopital.jpg') }}"
                alt="CHL"
                class="w-full h-full object-cover">


            </div>


            <span class="text-xl font-bold text-blue-700 uppercase">
                CHL
            </span>


        </a>





        {{-- MENU DESKTOP --}}
        <div class="hidden lg:flex items-center gap-8">


            <a href="#accueil"
            class="flex items-center gap-2 uppercase text-sm font-semibold
            tracking-wide text-gray-700
            hover:text-blue-700 hover:border-b-2 
            hover:border-blue-700 pb-2 px-2 transition">


                <i class="fa-solid fa-house text-blue-600"></i>

                Accueil


            </a>





            <a href="{{ route('publications.index') }}"
            class="flex items-center gap-2 uppercase text-sm font-semibold
            tracking-wide text-gray-700
            hover:text-blue-700 hover:border-b-2 
            hover:border-blue-700 pb-2 px-2 transition">


                <i class="fa-solid fa-newspaper text-blue-600"></i>

                Publications


            </a>





            <a href="#services"
            class="flex items-center gap-2 uppercase text-sm font-semibold
            tracking-wide text-gray-700
            hover:text-blue-700 hover:border-b-2 
            hover:border-blue-700 pb-2 px-2 transition">


                <i class="fa-solid fa-book-medical text-green-600"></i>

                Services


            </a>





            <a href="#apropos"
            class="flex items-center gap-2 uppercase text-sm font-semibold
            tracking-wide text-gray-700
            hover:text-blue-700 hover:border-b-2 
            hover:border-blue-700 pb-2 px-2 transition">


                <i class="fa-solid fa-hospital text-cyan-600"></i>

                À propos


            </a>





            <a href="#contact"
            class="flex items-center gap-2 uppercase text-sm font-semibold
            tracking-wide text-gray-700
            hover:text-blue-700 hover:border-b-2 
            hover:border-blue-700 pb-2 px-2 transition">


                <i class="fa-solid fa-phone text-purple-600"></i>

                Contact


            </a>





            @guest


                <a href="{{ route('register') }}"
                class="flex items-center gap-2 uppercase text-sm font-semibold
                tracking-wide text-gray-700
                hover:text-blue-700 hover:border-b-2 
                hover:border-blue-700 pb-2 px-2 transition">


                    <i class="fa-solid fa-user-plus text-blue-600"></i>

                    Inscription


                </a>




                <a href="{{ route('login') }}"
                class="flex items-center gap-2 uppercase text-sm font-semibold
                tracking-wide text-gray-700
                hover:text-blue-700 hover:border-b-2 
                hover:border-blue-700 pb-2 px-2 transition">


                    <i class="fa-solid fa-right-to-bracket text-green-600"></i>

                    Connexion


                </a>




            @else




                <a href="{{ route('dashboard') }}"
                class="flex items-center gap-2 uppercase text-sm font-semibold
                tracking-wide text-gray-700
                hover:text-blue-700 hover:border-b-2 
                hover:border-blue-700 pb-2 px-2 transition">


                    <i class="fa-solid fa-user-circle text-blue-600"></i>

                    Mon compte


                </a>





                <form method="POST" action="{{ route('logout') }}">

                    @csrf


                    <button
                    class="flex items-center gap-2 uppercase text-sm font-semibold
                    tracking-wide text-red-600
                    hover:text-red-800 hover:border-b-2 
                    hover:border-red-600 pb-2 px-2 transition">


                        <i class="fa-solid fa-right-from-bracket"></i>

                        Déconnexion


                    </button>


                </form>



            @endguest



        </div>





        {{-- HAMBURGER MOBILE --}}
        <button
        @click="open=!open"
        class="lg:hidden text-3xl text-blue-700 focus:outline-none">


            <i class="fa-solid fa-bars"></i>


        </button>



    </div>


</nav>


{{-- ================= MENU MOBILE ================= --}}


<div
x-show="open"
x-transition
@click.outside="open=false"

class="fixed top-20 right-4
w-48 bg-white rounded-2xl shadow-xl
border border-blue-200 p-3 lg:hidden z-50">

<div class="flex flex-col gap-1">



<a href="#accueil"
class="mobile-link">

<i class="fa-solid fa-house text-blue-600"></i>

Accueil

</a>

<a href="{{ route('publications.index') }}"
class="mobile-link">

<i class="fa-solid fa-hand text-blue-600"></i>

Publications

</a>


<a href="#services"
class="mobile-link">

<i class="fa-solid fa-book-medical text-green-600"></i>

Services

</a>





<a href="#apropos"
class="mobile-link">

<i class="fa-solid fa-hospital text-cyan-600"></i>

À propos

</a>





<a href="#contact"
class="mobile-link">

<i class="fa-solid fa-phone text-purple-600"></i>

Contact

</a>





<hr class="my-2">





@guest


<a href="{{ route('register') }}"
class="mobile-link">

<i class="fa-solid fa-user-plus text-blue-600"></i>

Inscription

</a>




<a href="{{ route('login') }}"
class="mobile-link">

<i class="fa-solid fa-right-to-bracket text-green-600"></i>

Connexion

</a>



@else



<a href="{{ route('dashboard') }}"
class="mobile-link">

<i class="fa-solid fa-user-circle text-blue-600"></i>

Mon compte

</a>





<form method="POST"
action="{{ route('logout') }}">

@csrf


<button
type="submit"
class="mobile-link w-full text-red-600">


<i class="fa-solid fa-right-from-bracket"></i>

Déconnexion


</button>


</form>



@endguest



</div>


</div>
{{-- ================= CONTENU ================= --}}


<main class="pt-24">

    @yield('content')

</main>





{{-- ================= FOOTER ================= --}}


<footer class="bg-white mx-4 mt-8 mb-6 rounded-3xl shadow-lg border border-blue-100">


<div class="max-w-7xl mx-auto px-6 py-8 text-center">



<h3 class="text-2xl font-bold text-blue-700">

     L'équipe de CHL vous souhaite une bonne santé

</h3>



<p class="mt-3 text-gray-600">

    Votre santé, notre priorité.

</p>





{{-- RESEAUX SOCIAUX --}}


<div class="mt-6 flex flex-wrap justify-center gap-4">



<a href="https://www.facebook.com/VOTRE_PAGE"
target="_blank"
class="footer-social">

<i class="fa-brands fa-facebook text-blue-600"></i>

Facebook

</a>




<a href="https://wa.me/261XXXXXXXXX"
target="_blank"
class="footer-social">

<i class="fa-brands fa-whatsapp text-green-600"></i>

WhatsApp

</a>





<a href="mailto:contact@chl.com"
class="footer-social">

<i class="fa-solid fa-envelope text-red-600"></i>

Email

</a>





<a href="https://www.instagram.com/VOTRE_COMPTE"
target="_blank"
class="footer-social">

<i class="fa-brands fa-instagram text-pink-600"></i>

Instagram

</a>





<a href="https://www.youtube.com/"
target="_blank"
class="footer-social">

<i class="fa-brands fa-youtube text-red-600"></i>

YouTube

</a>





<a href="https://www.linkedin.com/"
target="_blank"
class="footer-social">

<i class="fa-brands fa-linkedin text-blue-700"></i>

LinkedIn

</a>




</div>



</div>






<div class="border-t border-gray-200 py-5 text-center text-sm text-gray-500">


© {{ date('Y') }}

Site Web officiel de CHL.


<br>


Développé par ANDRIAMANJAKA Fanomezantsoa


</div>



</footer>





</body>

</html>
