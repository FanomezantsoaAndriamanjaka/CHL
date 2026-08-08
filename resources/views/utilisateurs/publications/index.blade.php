<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CHL — Nos services</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- Tailwind / Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="mx-4 mt-20  border border-green-400 rounded-2xl bg-white">


{{-- ========================================================= --}}
{{-- CONTENEUR PRINCIPAL --}}
{{-- ========================================================= --}}

<div class="scroll-mt-28 mt-2 mb-2 bg-white mx-2 border border-blue-50 shadow-lg p-8">       <h2 class="text-3xl font-bold text-center text-blue-700">
  


    {{-- ========================================================= --}}
    {{-- BOUTON RETOUR --}}
    {{-- ========================================================= --}}

    <div class="mb-6">

        <a
            href="{{ url()->previous() }}"
            class="inline-flex items-center gap-2
                   bg-white
                   text-blue-700
                   border border-blue-200
                   px-5 py-2.5
                   rounded-xl
                   font-semibold
                   shadow-sm
                   hover:bg-blue-700
                   hover:text-white
                   hover:border-blue-700
                   transition duration-300">

            <i class="fa-solid fa-arrow-left"></i>

            Retour

        </a>

    </div>



    {{-- ========================================================= --}}
    {{-- HERO SECTION --}}
    {{-- ========================================================= --}}

    <section
        class="relative overflow-hidden
               bg-gradient-to-br
               from-blue-900
               via-blue-700
               to-cyan-500
               rounded-3xl
               shadow-2xl
               mb-10">


        {{-- Décorations --}}

        <div
            class="absolute -top-20 -right-20
                   w-72 h-72
                   bg-cyan-400/20
                   rounded-full
                   blur-3xl">
        </div>


        <div
            class="absolute -bottom-24 -left-20
                   w-80 h-80
                   bg-blue-400/20
                   rounded-full
                   blur-3xl">
        </div>



        <div
            class="relative z-10
                   px-6 py-12
                   md:px-12 md:py-14
                   lg:px-16">


            <div
                class="flex flex-col
                       lg:flex-row
                       items-center
                       justify-between
                       gap-10">


                {{-- TEXTE --}}

                <div
                    class="text-center
                           lg:text-left
                           max-w-3xl">


                    <div
                        class="inline-flex items-center gap-2
                               bg-white/10
                               border border-white/20
                               backdrop-blur-sm
                               text-blue-100
                               px-4 py-2
                               rounded-full
                               text-sm
                               font-semibold
                               mb-5">

                        <i class="fa-solid fa-hospital"></i>

                        Centre Hospitalier CHL

                    </div>



                    <h1
                        class="text-5xl
                               md:text-6xl
                               lg:text-7xl
                               font-extrabold
                               text-white
                               tracking-tight">

                        CHL

                    </h1>



                    <h2
                        class="mt-3
                               text-2xl
                               md:text-3xl
                               font-bold
                               text-cyan-100">

                        Nos services médicaux

                    </h2>



                    <p
                        class="mt-5
                               text-base
                               md:text-lg
                               text-blue-100
                               leading-8
                               max-w-2xl">

                        Découvrez nos différents services médicaux et
                        bénéficiez d'une prise en charge professionnelle,
                        personnalisée et adaptée à vos besoins.

                    </p>



                    {{-- CTA --}}

                    <div
                        class="mt-8
                               flex flex-wrap
                               justify-center
                               lg:justify-start
                               gap-4">


                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2
                                   bg-white
                                   text-blue-700
                                   px-7 py-3.5
                                   rounded-xl
                                   shadow-xl
                                   hover:bg-blue-50
                                   hover:scale-105
                                   transition duration-300">

                            <i class="fa-solid fa-phone"></i>

                            Nous contacter

                        </a>


                        @guest

                            <a
                                href="{{ route('register') }}"
                                class="inline-flex items-center gap-2
                                       border-2 border-white
                                       text-white
                                       px-7 py-3.5
                                       rounded-xl
                                       hover:bg-white
                                       hover:text-blue-700
                                       transition duration-300">

                                <i class="fa-solid fa-user-plus"></i>

                                Créer un compte

                            </a>

                        @else

                            <a
                                href="{{ route('reservation.create') }}"
                                class="inline-flex items-center gap-2
                                       bg-green-500
                                       text-white
                                       px-7 py-3.5
                                       rounded-xl
                                       font-bold
                                       shadow-lg
                                       hover:bg-green-600
                                       hover:scale-105
                                       transition duration-300">

                                <i class="fa-solid fa-calendar-check"></i>

                                Prendre rendez-vous

                            </a>

                        @endguest


                    </div>


                </div>



                {{-- LOGO --}}

                <div class="shrink-0">


                    <div
                        class="w-40 h-40
                               md:w-52 md:h-52
                               rounded-full
                               bg-white
                               p-2
                               shadow-2xl
                               ring-8 ring-white/10">


                        <div
                            class="w-full h-full
                                   rounded-full
                                   overflow-hidden
                                   border-4 border-blue-100">


                            <img
                                src="{{ asset('images/hopital.jpg') }}"
                                alt="CHL"
                                class="w-full h-full object-cover">


                        </div>

                    </div>


                </div>


            </div>

        </div>

    </section>



    {{-- ========================================================= --}}
    {{-- TITRE SERVICES --}}
    {{-- ========================================================= --}}

    <div class="text-center mb-10">


        <div
            class="inline-flex items-center justify-center
                   w-14 h-14
                   rounded-2xl
                   bg-blue-100
                   text-blue-700
                   mb-4">

            <i class="fa-solid fa-stethoscope text-2xl"></i>

        </div>


        <h2
            class="text-3xl
                   md:text-4xl
                   font-extrabold
                   text-gray-800">

            Découvrez nos services

        </h2>


        <div
            class="w-20 h-1
                   bg-gradient-to-r
                   from-blue-600
                   to-cyan-500
                   rounded-full
                   mx-auto
                   mt-4">
        </div>


        <p
            class="mt-4
                   text-gray-500
                   max-w-2xl
                   mx-auto">

            Une offre de soins pensée pour vous accompagner
            avec professionnalisme et attention.

        </p>

    </div>



    {{-- ========================================================= --}}
    {{-- SERVICES --}}
    {{-- ========================================================= --}}

<div
    class="grid
           grid-cols-1
           md:grid-cols-2
           lg:grid-cols-3
           xl:grid-cols-4
           gap-6">

        @forelse($publications as $publication)


            {{-- CARTE --}}

            <article
                class="group
                    bg-white
                    rounded-2xl
                    overflow-hidden
                    border-2 border-blue-200
                    ring-2 ring-cyan-100
                    ring-offset-2
                    shadow-lg
                    min-h-[560px]
                    flex flex-col
                    hover:shadow-2xl
                    hover:-translate-y-1
                    hover:border-blue-400
                    hover:ring-cyan-200
                    transition-all
                    duration-300">


                    {{-- IMAGE --}}

                    <div
                        class="relative
                            h-80
                            sm:h-96
                            overflow-hidden
                            bg-gradient-to-br
                            from-blue-100
                            to-cyan-100">

                        @if($publication->image)

                            <img
                                src="{{ asset('storage/'.$publication->image) }}"
                                alt="{{ $publication->nom }}"
                                class="w-full h-full
                                    object-cover
                                    group-hover:scale-110
                                    transition duration-700">

                        @else

                            <div
                                class="w-full h-full
                                    flex items-center
                                    justify-center">

                                <i
                                    class="fa-solid fa-hospital
                                        text-6xl
                                        text-blue-500/60">
                                </i>

                            </div>

                        @endif

                   



                    {{-- Overlay --}}

                    <div
                        class="absolute inset-0
                               bg-gradient-to-t
                               from-black/40
                               via-transparent
                               to-transparent
                               opacity-0
                               group-hover:opacity-100
                               transition duration-300">
                    </div>



                    {{-- PRIX --}}

                    <div
                        class="absolute
                               top-4
                               right-4">


                        <span
                            class="inline-flex
                                   items-center
                                   bg-green-600
                                   text-white
                                   px-4 py-2
                                   rounded-full
                                   text-sm
                                   font-bold
                                   shadow-lg">

                            {{ number_format($publication->prix, 0, ',', ' ') }} Ar

                        </span>


                    </div>


                </div>



                {{-- CONTENU --}}

                <div
                    class="p-5
                        flex
                        flex-col
                        flex-1">


                    <h3
                        class="text-xl
                               font-bold
                               text-blue-800
                               group-hover:text-cyan-600
                               transition">

                        {{ $publication->nom }}

                    </h3>



                    <p
                        class="mt-3
                               text-gray-600
                               leading-7
                               text-sm
                               line-clamp-3
                               min-h-[84px]">

                        {{ Str::limit(strip_tags($publication->description), 150) }}

                    </p>



                    {{-- DISPONIBILITE --}}

                    <div class="mt-4">


                        @if($publication->reservation_disponible)

                            <span
                                class="inline-flex
                                       items-center
                                       gap-2
                                       bg-green-50
                                       text-green-700
                                       border border-green-200
                                       px-3 py-1.5
                                       rounded-full
                                       text-xs
                                       font-bold">

                                <i class="fa-solid fa-circle-check"></i>

                                Disponible

                            </span>

                        @else

                            <span
                                class="inline-flex
                                       items-center
                                       gap-2
                                       bg-red-50
                                       text-red-700
                                       border border-red-200
                                       px-3 py-1.5
                                       rounded-full
                                       text-xs
                                       font-bold">

                                <i class="fa-solid fa-circle-xmark"></i>

                                Indisponible

                            </span>

                        @endif


                    </div>



                    {{-- BOUTONS --}}

                    <div
                        class="grid
                               grid-cols-2
                               gap-3
                               mt-6">


                        <a
                            href="{{ route('publications.show', $publication) }}"
                            class="inline-flex
                                   items-center
                                   justify-center
                                   gap-2
                                   bg-blue-700
                                   hover:bg-blue-800
                                   text-white
                                   py-2.5
                                   rounded-xl
                                   text-sm
                                   font-bold
                                   transition">

                            <i class="fa-solid fa-eye"></i>

                            Détails

                        </a>



                        @if($publication->reservation_disponible)


                            @auth

                                <a
                                    href="{{ route('reservation.create') }}"
                                    class="inline-flex
                                           items-center
                                           justify-center
                                           gap-2
                                           bg-green-600
                                           hover:bg-green-700
                                           text-white
                                           py-2.5
                                           rounded-xl
                                           text-sm
                                           font-bold
                                           transition">

                                    <i class="fa-solid fa-calendar-check"></i>

                                    Réserver

                                </a>


                            @else


                                <a
                                    href="{{ route('login') }}"
                                    class="inline-flex
                                           items-center
                                           justify-center
                                           gap-2
                                           bg-green-600
                                           hover:bg-green-700
                                           text-white
                                           py-2.5
                                           rounded-xl
                                           text-sm
                                           font-bold
                                           transition">

                                    <i class="fa-solid fa-right-to-bracket"></i>

                                    Se connecter

                                </a>


                            @endauth


                        @else


                            <button
                                type="button"
                                disabled
                                class="inline-flex
                                       items-center
                                       justify-center
                                       gap-2
                                       bg-gray-200
                                       text-gray-500
                                       py-2.5
                                       rounded-xl
                                       text-sm
                                       font-bold
                                       cursor-not-allowed">

                                <i class="fa-solid fa-ban"></i>

                                Indisponible

                            </button>


                        @endif


                    </div>


                </div>


            </article>


        @empty


            {{-- AUCUNE PUBLICATION --}}

            <div class="col-span-full">


                <div
                    class="bg-white
                           border border-yellow-200
                           rounded-3xl
                           shadow-md
                           p-12
                           text-center">


                    <div
                        class="w-20 h-20
                               mx-auto
                               rounded-full
                               bg-yellow-50
                               flex items-center
                               justify-center
                               mb-5">


                        <i
                            class="fa-solid fa-circle-info
                                   text-4xl
                                   text-yellow-500">
                        </i>


                    </div>


                    <h3
                        class="text-2xl
                               font-bold
                               text-gray-800">

                        Aucune publication disponible

                    </h3>


                    <p class="mt-3 text-gray-500">

                        Les services médicaux seront bientôt disponibles.

                    </p>


                </div>


            </div>


        @endforelse


    </div>

</div>


{{-- ================= FOOTER ================= --}}


<footer class="bg-white mx-4 mt-8 mb-6 rounded-3xl shadow-lg border border-blue-100">


<div class="max-w-7xl mx-auto px-6 py-8 text-center">




<p class="flex items-center justify-center gap-2 text-gray-600 font-medium">

    <i class="fa-solid fa-heart-pulse text-red-500"></i>

    L'équipe de CHL vous souhaite une bonne santé

</p>


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

