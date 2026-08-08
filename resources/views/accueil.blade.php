@extends('layouts.app')

@section('content')




{{-- HERO SECTION --}}
<section class="mx-2 mt-10  border border-green-400 rounded-xl bg-white">

    <div class="relative h-96 min-h-screen rounded-xl overflow-hidden">

        {{-- IMAGE BACKGROUND --}}
        <img
            src="{{ asset('images/clinique.jpg') }}"
            alt="CHL Toliara"
            class="absolute inset-0 w-full h-full rounded-xl object-cover"
        >

        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-black/20"></div>


        {{-- CONTENU --}}
        <div class="relative z-10 min-h-screen flex flex-col
            items-center justify-start
            px-6 pt-24 md:pt-32 text-white">


            {{-- TITRE --}}
            <div class="text-center">

                <h1 class="text-5xl md:text-7xl font-extrabold">
                    CHL
                </h1>

                <p class="mt-6 text-lg md:text-2xl text-white max-w-4xl mx-auto">

                    Votre centre médical de confiance pour des soins de qualité,
                    un accompagnement personnalisé et une prise en charge adaptée
                    à vos besoins.

                </p>

            </div>


            {{-- BOUTONS --}}
            <div class="mt-10 flex flex-wrap justify-center gap-5">

                <a href="#"
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

    </div>

</section>

<!-- Services -->
<section class="mx-2 mt-20  border border-green-400 rounded-2xl bg-white">

<div id="services" class="scroll-mt-28 mt-2 mb-2 bg-white mx-2 border border-blue-200 shadow-lg pl-2 pr-2 pb-2 pt-8"> 
        <h2 class="text-2xl font-bold text-center text-green-700">
            Nos services médicaux
        </h2>


        <div class="grid md:grid-cols-4  text-center gap-6 mt-10">


            <div class="bg-white p-2 rounded-xl shadow">

                <h3 class="font-bold text-blue-600 text-xl">
                    🩺 Médecine générale
                </h3>

                <p class="mt-3 text-gray-600">
                    Consultation et soins médicaux généraux.
                     Prise en charde adaptée aux besoins des patients et son bien être.
                </p>

            </div>



            <div class="bg-white p-2 rounded-xl shadow">

                <h3 class="font-bold text-blue-600 text-xl">
                    👶 Pédiatrie
                </h3>

                <p class="mt-3 text-gray-600">
                    Suivi médical des enfants.
                     Consultation et soins médicaux généraux, chirurgie infantile etc.
                </p>

            </div>



            <div class="bg-white p-2 rounded-xl shadow">

                <h3 class="font-bold text-blue-600 text-xl">
                    🤰 Gynécologie
                </h3>

                <p class="mt-3 text-gray-600">
                    Santé féminine et obstétrique. 
                    Suivie des grossesse, consultations pré-natale et prise en charge de post-partum.
                    Opération césariennne et hospitalisation post-opératoire.
                </p>

            </div>



            <div class="bg-white p-2 rounded-xl shadow">

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





<section class="mx-2 mt-6  border border-green-400 rounded-2xl bg-white">
  <!-- DESCRIPTION CABINET MEDICAL -->

<div class="mt-2 mb-2 bg-white mx-2  border border-blue-200  shadow-lg pt-2 pl-2 pr-2 pb-8">

        <div id="apropos"
        class="scroll-mt-28 mt-2 mb-4 bg-white mx-auto border border-blue-50 rounded-2xl shadow-lg pt-2">

            <h1 class="text-2xl mt-6 font-bold text-blue-700 text-center mb-6">
                Qui est CHL ?
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


{{-- ========================================================= --}}
{{-- CONTACT SECTION --}}
{{-- ========================================================= --}}

<section id="contact" class="mx-2 mt-20 bg-white scroll-mt-28 border border-green-400 p-2 rounded-2xl bg-white">
 
   


        {{-- ================================================= --}}
        {{-- TITRE PRINCIPAL --}}
        {{-- ================================================= --}}

        <div class="text-center border p-6 border-blue-50 rounded-2xl mb-8">

            <div class="flex justify-center mb-4">

                <div class="w-16 h-16 rounded-full
                            bg-gradient-to-br from-blue-600 to-cyan-500
                            flex items-center justify-center
                            shadow-lg">

                    <i class="fa-solid fa-address-book
                              text-white text-2xl"></i>

                </div>

            </div>


            <h1 class="text-2xl md:text-4xl lg:text-5xl
                       font-bold text-blue-800">

                Contact et Adresse

            </h1>


            <div class="w-24 h-1
                        bg-gradient-to-r from-blue-600 to-cyan-500
                        rounded-full mx-auto mt-4">
            </div>


            <p class="text-gray-600 text-base md:text-lg
                      max-w-3xl mx-auto mt-5">

                Notre équipe est à votre disposition pour répondre à vos
                questions et vous accompagner dans vos démarches médicales.

            </p>

        </div>



        {{-- ================================================= --}}
        {{-- CONTENU PRINCIPAL --}}
        {{-- ================================================= --}}

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">


            {{-- ================================================= --}}
            {{-- COLONNE GAUCHE : INFORMATIONS --}}
            {{-- ================================================= --}}

            <div
                class="lg:col-span-1
                       bg-white
                       rounded-3xl
                       border border-blue-50
                       shadow-xl
                       pb-2
                       overflow-hidden">


                {{-- HEADER INFORMATIONS --}}

                <div
                    class="bg-gradient-to-r
                           from-blue-700
                           to-cyan-50
                           py-6 px-2
                           text-white">

                    <div class="flex items-center gap-4">

                        <div
                            class="w-12 h-12
                                   bg-white/20
                                   rounded-xl
                                   flex items-center justify-center">

                            <i class="fa-solid fa-circle-info text-xl"></i>

                        </div>


                        <div>

                            <h2 class="text-xl font-bold">
                                Nos informations
                            </h2>

                            <p class="text-blue-100 text-sm mt-1">
                                Nous contacter
                            </p>

                        </div>

                    </div>

                </div>



                {{-- INFORMATIONS --}}

                <div class="p-2 mx-2 space-y-6">


                    {{-- ADRESSE --}}

                    <div class="flex items-start gap-4">

                        <div
                            class="w-11 h-11 shrink-0
                                   rounded-xl
                                   bg-blue-100
                                   flex items-center justify-center">

                            <i class="fa-solid fa-location-dot
                                      text-blue-600 text-lg"></i>

                        </div>


                        <div>

                            <p class="font-bold text-gray-800">
                                Siège de la CHL
                            </p>

                            <p class="text-gray-600 mt-1">
                                Toliara, Madagascar
                            </p>

                        </div>

                    </div>



                    {{-- TELEPHONE --}}

                    <div class="flex items-start gap-4">

                        <div
                            class="w-11 h-11 shrink-0
                                   rounded-xl
                                   bg-green-100
                                   flex items-center justify-center">

                            <i class="fa-solid fa-phone
                                      text-green-600 text-lg"></i>

                        </div>


                        <div>

                            <p class="font-bold text-gray-800">
                                Téléphone
                            </p>

                            <p class="text-gray-500 text-sm mt-1 mb-2">
                                Contactez-nous pour vos rendez-vous
                            </p>


                            <div class="space-y-1">

                                <a
                                    href="tel:+261340164382"
                                    class="block text-blue-700
                                           hover:text-blue-900
                                           hover:underline transition">

                                    <i class="fa-solid fa-phone text-xs mr-2"></i>
                                    +261 34 01 643 82

                                </a>


                                <a
                                    href="tel:+261330164382"
                                    class="block text-blue-700
                                           hover:text-blue-900
                                           hover:underline transition">

                                    <i class="fa-solid fa-phone text-xs mr-2"></i>
                                    +261 33 01 643 82

                                </a>


                                <a
                                    href="tel:+261320164382"
                                    class="block text-blue-700
                                           hover:text-blue-900
                                           hover:underline transition">

                                    <i class="fa-solid fa-phone text-xs mr-2"></i>
                                    +261 32 01 643 82

                                </a>

                            </div>

                        </div>

                    </div>



                    {{-- EMAIL --}}

                    <div class="flex items-start gap-4">

                        <div
                            class="w-11 h-11 shrink-0
                                   rounded-xl
                                   bg-red-100
                                   flex items-center justify-center">

                            <i class="fa-solid fa-envelope
                                      text-red-500 text-lg"></i>

                        </div>


                        <div>

                            <p class="font-bold text-gray-800">
                                Email
                            </p>

                            <a
                                href="mailto:contact@chl-toliara.com"
                                class="text-blue-700
                                       hover:text-blue-900
                                       hover:underline
                                       break-all
                                       transition">

                                contact@chl-toliara.com

                            </a>

                        </div>

                    </div>



                    {{-- HORAIRES --}}

                    <div class="flex items-start gap-4">

                        <div
                            class="w-11 h-11 shrink-0
                                   rounded-xl
                                   bg-yellow-100
                                   flex items-center justify-center">

                            <i class="fa-solid fa-clock
                                      text-yellow-600 text-lg"></i>

                        </div>


                        <div>

                            <p class="font-bold text-gray-800">
                                Horaires d'ouverture
                            </p>

                            <p class="text-gray-600 mt-1 leading-relaxed">

                                Lundi - Samedi :
                                <span class="font-semibold text-gray-800">
                                    7j/7 et 24h/24
                                </span>

                                <br>

                                Dimanche :
                                <span class="text-gray-500">
                                    ouvert sans médecins traitants
                                </span>

                            </p>

                        </div>

                    </div>



                    {{-- PETIT MESSAGE --}}

                    <div
                        class="mt-6
                               bg-gradient-to-r
                               from-blue-50
                               to-cyan-50
                               border border-blue-100
                               rounded-2xl
                               p-5">

                        <div class="flex items-start gap-3">

                            <i class="fa-solid fa-heart-pulse
                                      text-blue-600 text-xl mt-1"></i>

                            <p class="text-gray-600 text-sm leading-relaxed">

                                Votre santé est notre priorité.
                                N'hésitez pas à nous contacter pour toute
                                information complémentaire.

                            </p>

                        </div>

                    </div>


                </div>

            </div>




            {{-- ================================================= --}}
            {{-- COLONNE DROITE : FORMULAIRE --}}
            {{-- ================================================= --}}

            <section
                id="contact-form"
                class="lg:col-span-2
                       bg-white
                       rounded-3xl
                       border border-blue-100
                       shadow-xl
                       overflow-hidden">


                {{-- HEADER FORMULAIRE --}}

                <div
                class="bg-gradient-to-r
                           from-blue-700
                           to-cyan-500
                           px-6 py-5
                           text-white">


                    <div class="flex items-center gap-4">


                        <div
                            class="w-14 h-14
                                   shrink-0
                                   rounded-2xl
                                   bg-white/20
                                   flex items-center justify-center">

                            <i class="fa-solid fa-paper-plane
                                      text-2xl"></i>

                        </div>


                        <div>

                            <h2 class="text-2xl md:text-3xl font-extrabold">

                                Envoyez-nous un message

                            </h2>


                            <p class="text-blue-100 text-sm md:text-base mt-1">

                                Notre équipe vous répondra dans les meilleurs
                                délais.

                            </p>

                        </div>


                    </div>

                </div>




                {{-- CONTENU FORMULAIRE --}}

                <div class="p-6 md:p-10">


                    {{-- SUCCESS --}}

                    @if(session('success'))

                        <div
                            class="mb-6
                                   bg-green-50
                                   border border-green-300
                                   text-green-700
                                   px-5 py-4
                                   rounded-xl
                                   shadow-sm">

                            <i class="fa-solid fa-circle-check mr-2"></i>

                            {{ session('success') }}

                        </div>

                    @endif



                    {{-- ERREURS --}}

                    @if($errors->any())

                        <div
                            class="mb-6
                                   bg-red-50
                                   border border-red-300
                                   text-red-700
                                   px-5 py-4
                                   rounded-xl
                                   shadow-sm">

                            <p class="font-bold mb-2">

                                <i class="fa-solid
                                          fa-triangle-exclamation mr-2"></i>

                                Veuillez corriger les erreurs suivantes :

                            </p>


                            <ul class="list-disc ml-6 text-sm space-y-1">

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif



                    {{-- FORMULAIRE --}}

                    <form
                        action="{{ route('contact.message.store') }}"
                        method="POST"
                        class="w-full">

                        @csrf



                        {{-- NOM + EMAIL --}}

                        <div
                            class="grid grid-cols-1 md:grid-cols-2
                                   gap-6">


                            {{-- NOM --}}

                            <div>

                                <label
                                    class="block text-gray-700
                                           font-semibold mb-2">

                                    <i class="fa-solid fa-user
                                              text-blue-600 mr-2"></i>

                                    Nom complet

                                </label>


                                <input
                                    type="text"
                                    name="nom"
                                    value="{{ old('nom') }}"
                                    required
                                    placeholder="Votre nom complet"
                                    class="w-full
                                           bg-gray-50
                                           border border-blue-200
                                           rounded-xl
                                           px-4 py-3
                                           focus:bg-white
                                           focus:ring-2
                                           focus:ring-blue-400
                                           focus:border-blue-400
                                           outline-none
                                           transition">

                            </div>



                            {{-- EMAIL --}}

                            <div>

                                <label
                                    class="block text-gray-700
                                           font-semibold mb-2">

                                    <i class="fa-solid fa-envelope
                                              text-red-500 mr-2"></i>

                                    Adresse email

                                </label>


                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    placeholder="exemple@email.com"
                                    class="w-full
                                           bg-gray-50
                                           border border-blue-200
                                           rounded-xl
                                           px-4 py-3
                                           focus:bg-white
                                           focus:ring-2
                                           focus:ring-blue-400
                                           focus:border-blue-400
                                           outline-none
                                           transition">

                            </div>



                            {{-- TELEPHONE --}}

                            <div>

                                <label
                                    class="block text-gray-700
                                           font-semibold mb-2">

                                    <i class="fa-solid fa-phone
                                              text-green-600 mr-2"></i>

                                    Téléphone

                                    <span
                                        class="text-gray-400
                                               text-sm font-normal">

                                        (facultatif)

                                    </span>

                                </label>


                                <input
                                    type="text"
                                    name="telephone"
                                    value="{{ old('telephone') }}"
                                    placeholder="+261 04 643 82"
                                    class="w-full
                                           bg-gray-50
                                           border border-blue-200
                                           rounded-xl
                                           px-4 py-3
                                           focus:bg-white
                                           focus:ring-2
                                           focus:ring-blue-400
                                           focus:border-blue-400
                                           outline-none
                                           transition">

                            </div>



                            {{-- SUJET --}}

                            <div>

                                <label
                                    class="block text-gray-700
                                           font-semibold mb-2">

                                    <i class="fa-solid fa-tag
                                              text-yellow-500 mr-2"></i>

                                    Sujet

                                    <span
                                        class="text-gray-400
                                               text-sm font-normal">

                                        (facultatif)

                                    </span>

                                </label>


                                <input
                                    type="text"
                                    name="sujet"
                                    value="{{ old('sujet') }}"
                                    placeholder="Sujet de votre message"
                                    class="w-full
                                           bg-gray-50
                                           border border-blue-200
                                           rounded-xl
                                           px-4 py-3
                                           focus:bg-white
                                           focus:ring-2
                                           focus:ring-blue-400
                                           focus:border-blue-400
                                           outline-none
                                           transition">

                            </div>


                        </div>



                        {{-- MESSAGE --}}

                        <div class="mt-6">

                            <label
                                class="block text-gray-700
                                       font-semibold mb-2">

                                <i class="fa-solid fa-message
                                          text-cyan-600 mr-2"></i>

                                Votre message

                            </label>


                            <textarea
                                name="message"
                                rows="7"
                                required
                                placeholder="Écrivez votre message ici..."
                                class="w-full
                                       bg-gray-50
                                       border border-blue-200
                                       rounded-xl
                                       px-4 py-3
                                       focus:bg-white
                                       focus:ring-2
                                       focus:ring-blue-400
                                       focus:border-blue-400
                                       outline-none
                                       resize-none
                                       transition">{{ old('message') }}</textarea>

                        </div>



                        {{-- BOUTON --}}

                        <div class="flex justify-center mt-7">

                            <button
                                type="submit"
                                class="inline-flex items-center
                                       justify-center
                                       bg-gradient-to-r
                                       from-blue-700
                                       to-cyan-500
                                       hover:from-blue-800
                                       hover:to-cyan-600
                                       text-white
                                       px-10 py-3.5
                                       rounded-xl
                                       font-bold
                                       shadow-lg
                                       hover:shadow-xl
                                       hover:-translate-y-0.5
                                       transition duration-300">

                                <i class="fa-solid fa-paper-plane mr-2"></i>

                                Envoyer le message

                            </button>

                        </div>


                    </form>

                </div>

            </section>


        </div>


  

</section>



@endsection