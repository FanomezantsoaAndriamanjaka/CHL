@extends('layouts.app')

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


            <a href="{{ route('register') }}"
            class="bg-white text-blue-700 px-8 py-3 rounded-xl 
                   font-bold shadow-lg hover:scale-105 transition">


                <i class="fa-solid fa-calendar-check mr-2"></i>

                Prendre rendez-vous


            </a>





            <a href="#services"
            class="border-2 border-white px-8 py-3 rounded-xl 
                   font-bold hover:bg-white hover:text-blue-700 transition">


                <i class="fa-solid fa-hospital mr-2"></i>

                Nos services


            </a>



        </div>



    </div>


</section>

<!-- Services -->
<section id="services" class="mx-4 mt-20  border border-green-400 rounded-2xl bg-white">

    <div class="mt-2 mb-2 bg-white mx-2  border border-blue-50  shadow-lg p-8">
        <h2 class="text-3xl font-bold text-center text-blue-700">
            Nos services médicaux
        </h2>


        <div class="grid md:grid-cols-4  text-center gap-6 mt-10">


            <div class="bg-white p-6 rounded-xl shadow">

                <h3 class="font-bold text-blue-600 text-xl">
                    🩺 Médecine générale
                </h3>

                <p class="mt-3 text-gray-600">
                    Consultation et soins médicaux généraux.
                     Prise en charde adaptée aux besoins des patients et son bien être.
                </p>

            </div>



            <div class="bg-white p-6 rounded-xl shadow">

                <h3 class="font-bold text-blue-600 text-xl">
                    👶 Pédiatrie
                </h3>

                <p class="mt-3 text-gray-600">
                    Suivi médical des enfants.
                     Consultation et soins médicaux généraux, chirurgie infantile etc.
                </p>

            </div>



            <div class="bg-white p-6 rounded-xl shadow">

                <h3 class="font-bold text-blue-600 text-xl">
                    🤰 Gynécologie
                </h3>

                <p class="mt-3 text-gray-600">
                    Santé féminine et obstétrique. 
                    Suivie des grossesse, consultations pré-natale et prise en charge de post-partum.
                    Opération césariennne et hospitalisation post-opératoire.
                </p>

            </div>



            <div class="bg-white p-6 rounded-xl shadow">

                <h3 class="font-bold text-blue-600 text-xl">
                    🚑 Urgences
                </h3>

                <p class="mt-3 text-gray-600">
                    Prise en charge rapide des urgences. Ambulance disponibe immédiatemen
                </p>

            </div>


        </div>

    </div>

</section>





<section id="apropos" class="mx-4 mt-6  border border-green-400 rounded-2xl bg-white">
  <!-- DESCRIPTION CABINET MEDICAL -->

<div class="mt-2 mb-2 bg-white mx-2  border border-blue-50  shadow-lg pt-2 pl-8 pr-8 pb-8">

        <div class="mt-2 mb-4 bg-white mx-auto  border border-blue-100 rounded-2xl shadow-lg pt-2">
            <h1 class="text-4xl mt-6 font-bold text-blue-700 text-center mb-6">
                A propos de la CHL Toliara
            </h1>
        </div>
 


        <p class="text-gray-700 text-lg leading-relaxed">
            Bienvenue dans notre cabinet médical situé à 
            <span class="font-bold text-blue-600">
                Toliara, Madagascar
            </span>.
            Notre établissement est un espace dédié à la santé,
            au bien-être et à l'accompagnement personnalisé de chaque patient.
        </p>


            <p class="text-gray-700 text-lg leading-relaxed mt-4">
                Notre mission est d'offrir des soins médicaux de qualité
                dans un environnement professionnel, sécurisé et accueillant.
                Nous plaçons le patient au centre de notre attention afin de
                garantir une prise en charge adaptée à chaque situation.
            </p>


            <p class="text-gray-700 text-lg leading-relaxed mt-4">
                Grâce à une équipe compétente et engagée, notre cabinet accompagne
                les familles, les enfants, les femmes et toutes les personnes ayant
                besoin d'un suivi médical fiable et efficace.
            </p>



            <h2 class="text-2xl font-bold text-cyan-600 mt-8">
                Nos Services Médicaux
            </h2>


            <p class="text-gray-700 mt-3">
                Notre cabinet propose plusieurs services médicaux
                destinés à répondre aux différents besoins de santé :
            </p>


            <ul class="list-disc ml-8 mt-3 text-gray-700 space-y-2">

                <li>
                    <span class="font-bold">
                        Pédiatrie :
                    </span>
                    suivi médical des enfants, contrôle de leur croissance,
                    prévention et traitement des maladies infantiles.
                </li>


                <li>
                    <span class="font-bold">
                        Gynécologie et Obstétrie :
                    </span>
                    consultations gynécologiques, suivi des femmes,
                    accompagnement des grossesses et conseils médicaux
                    pour les futures mamans.
                </li>


                <li>
                    <span class="font-bold">
                        Soins généraux :
                    </span>
                    réalisation de pansements, sutures, soins médicaux
                    courants et prise en charge des différentes urgences.
                </li>


                <li>
                    <span class="font-bold">
                        Urgences médicales et chirurgicales :
                    </span>
                    intervention rapide et adaptée pour les situations
                    nécessitant une prise en charge immédiate.
                </li>


                <li>
                    <span class="font-bold">
                        Pharmacie :
                    </span>
                    disponibilité des médicaments et produits nécessaires
                    pour faciliter le traitement des patients.
                </li>


                <li>
                    <span class="font-bold">
                        Hébergement :
                    </span>
                    solutions de logement confortables proposées aux clients
                    étrangers pendant leur séjour médical à Toliara.
                </li>

            </ul>




            <h2 class="text-2xl font-bold text-cyan-600 mt-8">
                Un Accueil Adapté aux Patients Étrangers
            </h2>


            <p class="text-gray-700 mt-3 leading-relaxed">
                Conscients que certains patients viennent de différents pays,
                nous mettons en place un accompagnement particulier pour les
                visiteurs étrangers.
                Notre objectif est de rendre leur séjour médical plus simple,
                confortable et rassurant.
            </p>


            <p class="text-gray-700 mt-3 leading-relaxed">
                Depuis leur arrivée jusqu'à la fin de leur prise en charge,
                notre équipe reste disponible pour les orienter, les conseiller
                et leur offrir les meilleures conditions possibles.
            </p>




            <h2 class="text-2xl font-bold text-cyan-600 mt-8">
                Notre Équipe
            </h2>


            <p class="text-gray-700 mt-3 leading-relaxed">
                Notre société est composée d'agents compétents,
                respectueux et chaleureux.
                Chaque membre de notre équipe contribue à créer une ambiance
                agréable où les patients se sentent écoutés et en confiance.
            </p>


            <p class="text-gray-700 mt-3 leading-relaxed">
                Nous croyons qu'un bon service médical ne dépend pas seulement
                des équipements et des compétences techniques, mais également
                de la qualité de l'accueil, de l'écoute et du respect envers
                chaque personne.
            </p>




            <h2 class="text-2xl font-bold text-cyan-600 mt-8">
                Notre Engagement
            </h2>


            <p class="text-gray-700 mt-3 leading-relaxed">
                Notre engagement est de fournir des soins accessibles,
                efficaces et humains à tous nos patients.
                Nous travaillons chaque jour pour améliorer la qualité de nos
                services et répondre aux attentes de notre communauté.
            </p>


            <p class="text-blue-700 font-bold text-xl text-center mt-8">
                Votre santé est notre priorité.
            </p>


            <p class="text-gray-600 text-center mt-3 italic">
                Cabinet Médical HL Toliara - Madagascar,
                au service de votre bien-être et de votre santé.
            </p>


</div>
</section>


@endsection