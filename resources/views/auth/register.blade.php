@extends('layouts.app')

@section('content')


<div class="min-h-screen bg-gradient-to-br from-slate-100 via-blue-50 to-cyan-100 py-12">


    <div class="max-w-6xl mx-auto px-4">


        {{-- CARTE PRINCIPALE --}}

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-blue-100">



            {{-- HEADER --}}

            <div class="relative overflow-hidden bg-gradient-to-r from-blue-800 via-blue-700 to-cyan-500">


                <div class="absolute inset-0 opacity-10">

                    <div class="absolute -top-20 -left-20 w-72 h-72 bg-white rounded-full"></div>

                    <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-300 rounded-full"></div>

                </div>



                <div class="relative px-10 py-12">


                    <div class="flex flex-col md:flex-row items-center justify-between">


                        <div>


                            <span class="bg-white/20 text-white px-4 py-1 rounded-full text-sm">

                                Nouveau Patient

                            </span>



                            <h1 class="text-4xl md:text-5xl font-extrabold text-white mt-5">

                                CHL

                            </h1>



                            <p class="text-blue-100 mt-3 text-lg">

                                Formulaire officiel d'inscription des patients

                            </p>


                        </div>




                        <div class="mt-8 md:mt-0">


                            <div class="w-36 h-36 rounded-full bg-white shadow-2xl 
                                        flex items-center justify-center 
                                        border-8 border-blue-100">


                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-20 h-20 text-blue-700"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">


                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1.5"
                                          d="M15.75 6.75a3.75 3.75 0 11-7.5 0
                                             3.75 3.75 0 017.5 0zm4.5
                                             13.5a8.25 8.25 0 10-16.5
                                             0"/>


                                </svg>


                            </div>


                        </div>


                    </div>


                </div>


            </div>





            {{-- CONTENU FORMULAIRE --}}


            <div class="p-10">


                <form method="POST"
                      action="{{ route('register') }}"
                      enctype="multipart/form-data">


                    @csrf





                    {{-- ===========================
                         BLOC 1
                    INFORMATIONS PERSONNELLES
                    ============================ --}}



                    <div>


                        <div class="mb-10">


                            <h2 class="text-3xl font-bold text-blue-800">

                                👤 Informations personnelles

                            </h2>



                            <p class="text-gray-500 mt-2">

                                Merci de remplir soigneusement les informations ci-dessous.

                            </p>


                        </div>






                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">





                            {{-- NOM --}}


                            <div>


                                <label class="block mb-2 text-sm font-semibold text-gray-700">

                                    Nom <span class="text-red-600">*</span>

                                </label>



                                <input
                                    type="text"
                                    name="nom"
                                    value="{{ old('nom') }}"
                                    required
                                    class="w-full rounded-xl border-gray-300 
                                           focus:border-blue-600 
                                           focus:ring-blue-600 shadow-sm">



                                @error('nom')

                                    <p class="mt-2 text-red-600 text-sm">

                                        {{ $message }}

                                    </p>

                                @enderror


                            </div>






                            {{-- PRENOM --}}


                            <div>


                                <label class="block mb-2 text-sm font-semibold text-gray-700">

                                    Prénom <span class="text-red-600">*</span>

                                </label>



                                <input
                                    type="text"
                                    name="prenom"
                                    value="{{ old('prenom') }}"
                                    required
                                    class="w-full rounded-xl border-gray-300 
                                           focus:border-blue-600 
                                           focus:ring-blue-600 shadow-sm">



                                @error('prenom')

                                    <p class="mt-2 text-red-600 text-sm">

                                        {{ $message }}

                                    </p>

                                @enderror


                            </div>







                            {{-- SEXE --}}


                            <div>


                                <label class="block mb-2 text-sm font-semibold text-gray-700">

                                    Sexe

                                </label>



                                <select
                                    name="sexe"
                                    class="w-full rounded-xl border-gray-300 
                                           focus:border-blue-600 
                                           focus:ring-blue-600 shadow-sm">


                                    <option value="">
                                        Sélectionner
                                    </option>


                                    <option value="Homme"
                                        {{ old('sexe') == 'Homme' ? 'selected' : '' }}>

                                        Homme

                                    </option>


                                    <option value="Femme"
                                        {{ old('sexe') == 'Femme' ? 'selected' : '' }}>

                                        Femme

                                    </option>


                                </select>


                            </div>






                            {{-- DATE NAISSANCE --}}


                            <div>


                                <label class="block mb-2 text-sm font-semibold text-gray-700">

                                    Date de naissance

                                </label>



                                <input
                                    type="date"
                                    name="date_naissance"
                                    value="{{ old('date_naissance') }}"
                                    class="w-full rounded-xl border-gray-300 
                                           focus:border-blue-600 
                                           focus:ring-blue-600 shadow-sm">


                            </div>






                            {{-- LIEU NAISSANCE --}}


                            <div>


                                <label class="block mb-2 text-sm font-semibold text-gray-700">

                                    Lieu de naissance

                                </label>



                                <input
                                    type="text"
                                    name="lieu_naissance"
                                    value="{{ old('lieu_naissance') }}"
                                    placeholder="Ex: Toliara"
                                    class="w-full rounded-xl border-gray-300 
                                           focus:border-blue-600 
                                           focus:ring-blue-600 shadow-sm">


                            </div>






                            {{-- NATIONALITE --}}


                            <div>


                                <label class="block mb-2 text-sm font-semibold text-gray-700">

                                    Nationalité

                                </label>



                                <input
                                    type="text"
                                    name="nationalite"
                                    value="{{ old('nationalite','Malagasy') }}"
                                    class="w-full rounded-xl border-gray-300 
                                           focus:border-blue-600 
                                           focus:ring-blue-600 shadow-sm">


                            </div>




                        </div>


                    </div>




                    {{-- ===========================
        BLOC 2
    IDENTITÉ ET DOCUMENTS
=========================== --}}


<div class="mt-14">


    <div class="border-l-4 border-blue-600 pl-4 mb-8">


        <h2 class="text-2xl font-bold text-gray-800">

            📄 Identité et documents

        </h2>



        <p class="text-gray-500 mt-1">

            Ajoutez vos informations d'identité et vos documents officiels.

        </p>


    </div>





    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">





        {{-- CIN --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🪪 Numéro CIN

            </label>



            <input
                type="text"
                name="cin"
                value="{{ old('cin') }}"
                placeholder="Ex: 101 234 567 890"
                class="w-full rounded-xl border-gray-300 
                       focus:border-blue-600 
                       focus:ring-blue-600 shadow-sm">



            @error('cin')

                <p class="mt-2 text-red-600 text-sm">

                    {{ $message }}

                </p>

            @enderror


        </div>






        {{-- PASSEPORT --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🌍 Numéro passeport

            </label>



            <input
                type="text"
                name="passeport"
                value="{{ old('passeport') }}"
                placeholder="Numéro du passeport"
                class="w-full rounded-xl border-gray-300 
                       focus:border-blue-600 
                       focus:ring-blue-600 shadow-sm">



            @error('passeport')

                <p class="mt-2 text-red-600 text-sm">

                    {{ $message }}

                </p>

            @enderror


        </div>






        {{-- PHOTO PROFIL --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                📷 Photo de profil

            </label>



            <input
                type="file"
                name="photo_profil"
                accept="image/*"
                class="w-full rounded-xl border-gray-300 
                       focus:border-blue-600 
                       focus:ring-blue-600 shadow-sm">



            @error('photo_profil')

                <p class="mt-2 text-red-600 text-sm">

                    {{ $message }}

                </p>

            @enderror



            <p class="text-gray-400 text-sm mt-2">

                Format accepté : JPG, PNG (max 2Mo)

            </p>


        </div>







        {{-- PHOTO CIN --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🪪 Photo CIN

            </label>



            <input
                type="file"
                name="photo_cin"
                accept="image/*"
                class="w-full rounded-xl border-gray-300 
                       focus:border-blue-600 
                       focus:ring-blue-600 shadow-sm">



            @error('photo_cin')

                <p class="mt-2 text-red-600 text-sm">

                    {{ $message }}

                </p>

            @enderror


        </div>







        {{-- PHOTO PASSEPORT --}}


        <div class="md:col-span-2">


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🌐 Photo passeport

            </label>



            <input
                type="file"
                name="photo_passeport"
                accept="image/*"
                class="w-full rounded-xl border-gray-300 
                       focus:border-blue-600 
                       focus:ring-blue-600 shadow-sm">



            @error('photo_passeport')

                <p class="mt-2 text-red-600 text-sm">

                    {{ $message }}

                </p>

            @enderror


        </div>



    </div>


</div>


{{-- ===========================
        BLOC 3
        COORDONNÉES
=========================== --}}


<div class="mt-14">


    <div class="border-l-4 border-cyan-600 pl-4 mb-8">


        <h2 class="text-2xl font-bold text-gray-800">

            📞 Coordonnées

        </h2>



        <p class="text-gray-500 mt-1">

            Informations de contact du patient.

        </p>


    </div>





    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">





        {{-- TELEPHONE --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                📱 Téléphone <span class="text-red-600">*</span>

            </label>



            <input
                type="text"
                name="telephone"
                value="{{ old('telephone') }}"
                placeholder="+261 34 12 345 67"
                required
                class="w-full rounded-xl border-gray-300
                       focus:border-cyan-600
                       focus:ring-cyan-600 shadow-sm">



            @error('telephone')

                <p class="mt-2 text-red-600 text-sm">

                    {{ $message }}

                </p>

            @enderror


        </div>







        {{-- EMAIL --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                📧 Adresse e-mail <span class="text-red-600">*</span>

            </label>



            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="nom@email.com"
                required
                class="w-full rounded-xl border-gray-300
                       focus:border-cyan-600
                       focus:ring-cyan-600 shadow-sm">



            @error('email')

                <p class="mt-2 text-red-600 text-sm">

                    {{ $message }}

                </p>

            @enderror


        </div>







        {{-- ADRESSE --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🏠 Adresse

            </label>



            <input
                type="text"
                name="adresse"
                value="{{ old('adresse') }}"
                placeholder="Adresse complète"
                class="w-full rounded-xl border-gray-300
                       focus:border-cyan-600
                       focus:ring-cyan-600 shadow-sm">


        </div>







        {{-- VILLE --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🏙️ Ville

            </label>



            <input
                type="text"
                name="ville"
                value="{{ old('ville') }}"
                placeholder="Ex: Toliara"
                class="w-full rounded-xl border-gray-300
                       focus:border-cyan-600
                       focus:ring-cyan-600 shadow-sm">


        </div>







        {{-- PAYS --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🌍 Pays

            </label>



            <input
                type="text"
                name="pays"
                value="{{ old('pays','Madagascar') }}"
                class="w-full rounded-xl border-gray-300
                       focus:border-cyan-600
                       focus:ring-cyan-600 shadow-sm">


        </div>





    </div>


</div>


{{-- ===========================
        BLOC 4
 INFORMATIONS COMPLÉMENTAIRES
        + SÉCURITÉ
=========================== --}}



<div class="mt-14">



    {{-- INFORMATIONS COMPLEMENTAIRES --}}


    <div class="border-l-4 border-cyan-600 pl-4 mb-8">


        <h2 class="text-2xl font-bold text-gray-800">

            💼 Informations complémentaires

        </h2>



        <p class="text-gray-500 mt-1">

            Quelques informations supplémentaires pour compléter votre dossier.

        </p>


    </div>






    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">





        {{-- PROFESSION --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                💼 Profession

            </label>



            <input
                type="text"
                name="profession"
                value="{{ old('profession') }}"
                placeholder="Votre profession"
                class="w-full rounded-xl border-gray-300
                       focus:border-cyan-600
                       focus:ring-cyan-600 shadow-sm">


        </div>







        {{-- LANGUE --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🌍 Langue

            </label>



            <select
                name="langue"
                class="w-full rounded-xl border-gray-300
                       focus:border-cyan-600
                       focus:ring-cyan-600 shadow-sm">


                <option value="Français"
                    {{ old('langue') == 'Français' ? 'selected' : '' }}>

                    Français

                </option>



                <option value="Malagasy"
                    {{ old('langue') == 'Malagasy' ? 'selected' : '' }}>

                    Malagasy

                </option>



                <option value="English"
                    {{ old('langue') == 'English' ? 'selected' : '' }}>

                    English

                </option>


            </select>


        </div>




    </div>




</div>






{{-- ===========================
        SÉCURITÉ DU COMPTE
=========================== --}}



<div class="mt-14">



    <div class="border-l-4 border-red-600 pl-4 mb-8">


        <h2 class="text-2xl font-bold text-gray-800">

            🔐 Sécurité du compte

        </h2>



        <p class="text-gray-500 mt-1">

            Choisissez un mot de passe sécurisé pour protéger votre compte.

        </p>


    </div>






    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">





        {{-- PASSWORD --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🔒 Mot de passe <span class="text-red-600">*</span>

            </label>



            <input
                type="password"
                name="password"
                required
                class="w-full rounded-xl border-gray-300
                       focus:border-red-600
                       focus:ring-red-600 shadow-sm">



            @error('password')

                <p class="mt-2 text-red-600 text-sm">

                    {{ $message }}

                </p>

            @enderror


        </div>







        {{-- CONFIRMATION PASSWORD --}}


        <div>


            <label class="block mb-2 text-sm font-semibold text-gray-700">

                🔑 Confirmer le mot de passe <span class="text-red-600">*</span>

            </label>



            <input
                type="password"
                name="password_confirmation"
                required
                class="w-full rounded-xl border-gray-300
                       focus:border-red-600
                       focus:ring-red-600 shadow-sm">


        </div>





    </div>



</div>


{{-- ===========================
        BLOC 5
 ACTIONS + FOOTER
=========================== --}}



<div class="mt-14">



    <div class="text-center">





        {{-- BOUTON CREATION COMPTE --}}


        <button
            type="submit"
            class="w-full md:w-2/3
                   bg-gradient-to-r from-cyan-600 to-blue-700
                   text-white font-bold text-lg
                   py-4 rounded-2xl
                   shadow-lg
                   hover:shadow-xl
                   hover:scale-[1.02]
                   transition duration-300">


            ✅ Créer mon compte


        </button>







        {{-- LIEN LOGIN --}}


        <p class="mt-6 text-gray-600">


            Vous avez déjà un compte ?



            <a
                href="{{ route('login') }}"
                class="text-cyan-600 font-bold
                       hover:text-blue-700
                       transition">


                Se connecter


            </a>


        </p>




    </div>



</div>






{{-- ===========================
        FOOTER FORMULAIRE
=========================== --}}



<div class="mt-16 pt-8 border-t text-center">





    <div class="flex justify-center gap-5 text-3xl mb-5">


        <span>
            🏥
        </span>


        <span>
            ❤️
        </span>


        <span>
            🔒
        </span>


    </div>






    <p class="text-gray-500 text-sm max-w-xl mx-auto">


        Vos informations personnelles sont protégées
        et utilisées uniquement dans le cadre de votre suivi médical.


    </p>





</div>





{{-- FERMETURE FORMULAIRE --}}


</form>



</div>


</div>


@endsection








