@extends('layouts.navbars')

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


            <p href="{{ route('register') }}"
            class="bg-white text-blue-700 px-8 py-3 rounded-xl 
                   font-bold shadow-lg hover:scale-105 transition">


                <i class="fa-solid fa-calendar-check mr-2"></i>

                Prendre rendez-vous


</p>





            <p href="#services"
            class="border-2 border-white px-8 py-3 rounded-xl 
                   font-bold hover:bg-white hover:text-blue-700 transition">


                <i class="fa-solid fa-hospital mr-2"></i>

                Profitez les services


            </p>



        </div>



    </div>


</section>

           
    <div class="p-6 lg:p-10 mb-2">

        @if(session('success'))

            <div
                class="mb-8 rounded-2xl border border-green-200 bg-green-50 p-5">

                <div class="flex items-center gap-3">

                    <div
                        class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-xl">

                        ✅

                    </div>

                    <div>

                        <h3 class="font-bold text-green-700">

                            Réservation enregistrée

                        </h3>

                        <p class="text-green-600">

                            {{ session('success') }}

                        </p>

                    </div>

                </div>

            </div>

        @endif
    </div>

<section class="mx-4 mt-20  border border-green-400 rounded-2xl bg-white">

    <div class="mt-2 mb-2 bg-white mx-2  border border-blue-200  shadow-lg p-2">
 

            <div class="mt-2 mb-4 bg-white mx-auto  border border-blue-100 rounded-2xl shadow-lg pt-2">
                <h1 class="text-4xl mt-6 font-bold text-blue-700 text-center mb-6">
                    Formulaire de reservatin
                </h1>
            </div>

 
            <form method="POST"
                            action="{{ route('reservation.store') }}">

                            @csrf

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-7">
                        <!-- ================= SERVICE ================= -->
  
     
              <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg transition duration-300">

                                <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                                🏥 Service à réserver

                                </label>

                                <select
                                    name="publication_id"
                                required
                                class="w-full rounded-xl border-gray-300 focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition">

                                <option value="">
                                    -- Choisir un service --
                                </option>

                                @foreach($publications as $publication)

                                    <option value="{{ $publication->id }}">

                                        {{ $publication->nom }}

                                    </option>

                                @endforeach

                                </select>

                                @error('publication_id')

                                    <p class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </p>

                                @enderror

                    </div>

                    <!-- ================= INFORMATIONS CONSULTATION ================= -->

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg transition duration-300">

                            <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                            👨‍⚕️ Motif de consultation

                            </label>


                            <input
                            type="text"
                            name="consultation"
                            value="{{ old('consultation') }}"
                            required
                            placeholder="Ex : Consultation médicale, contrôle, suivi..."
                            class="w-full rounded-xl border-gray-300 focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition">


                            <p class="text-sm text-gray-500 mt-2">

                            Précisez le motif ou la raison de votre consultation.

                            </p>


                            @error('consultation')

                            <p class="text-red-500 text-sm mt-2">

                                {{ $message }}

                            </p>

                            @enderror


                    </div>

                    <!-- ================= DATE ================= -->

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg transition duration-300">

                            <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                            📅 Date de rendez-vous

                            </label>

                            <input
                            type="date"
                            name="date_reception"
                            required
                            value="{{ old('date_reception') }}"
                            class="w-full rounded-xl border-gray-300 focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition">

                            @error('date_reception')

                            <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                            </p>

                            @enderror

                    </div>

                    <!-- ================= HEURE ================= -->

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg transition duration-300">

                        <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                        🕒 Heure

                        </label>

                        <input
                        type="time"
                        name="heure"
                        required
                        value="{{ old('heure') }}"
                        class="w-full rounded-xl border-gray-300 focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition">

                        @error('heure')

                        <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                        </p>

                        @enderror

                    </div>

                    <!-- ================= CONTACT D'URGENCE ================= -->

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg hover:border-blue-300 transition-all duration-300">

                            <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                            📞 Contact d'urgence

                            </label>

                            <input
                            type="text"
                            name="contact_urgence"
                            value="{{ old('contact_urgence') }}"
                            placeholder="Ex : +261 34 00 000 00"
                            class="w-full rounded-xl border-gray-300 focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition duration-300">

                            <p class="text-sm text-gray-500 mt-2">
                            Personne à contacter en cas d'urgence.
                            </p>

                            @error('contact_urgence')

                            <p class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </p>

                            @enderror

                    </div>

                     <!-- ================= TYPE DE CHAMBRE ================= -->

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg hover:border-blue-300 transition-all duration-300">

                                <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                                🛏️ Type de chambre

                                </label>

                                <select
                                name="type_chambre"
                                class="w-full rounded-xl border-gray-300 focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition duration-300">

                                <option value="">
                                    Choisir le type de chambre
                                </option>

                                <option value="Ordinaire">
                                    Chambre ordinaire
                                </option>

                                <option value="Spéciale">
                                    Chambre spéciale
                                </option>

                                <option value="VIP">
                                    Chambre VIP
                                </option>

                                </select>

                                <p class="text-sm text-gray-500 mt-2">
                                Facultatif selon le service choisi.
                                </p>

                                @error('type_chambre')

                                <p class="text-red-500 text-sm mt-2">
                                    {{ $message }}
                                </p>

                                @enderror

                    </div>

                    <!-- ================= NOMBRE DE CHAMBRES ================= -->

                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg hover:border-blue-300 transition-all duration-300">

                                <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                                🔢 Nombre de chambre(s)

                                </label>

                                <input
                                type="number"
                                min="0"
                                name="nombre_chambre"
                                value="{{ old('nombre_chambre') }}"
                                placeholder="0"
                                class="w-full rounded-xl border-gray-300 focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition duration-300">

                                <p class="text-sm text-gray-500 mt-2">
                                Laissez 0 si aucune chambre n'est nécessaire.
                                </p>

                                @error('nombre_chambre')

                                <p class="text-red-500 text-sm mt-2">
                                    {{ $message }}
                                </p>

                                @enderror

                        </div>

                     <!-- ================= INFORMATIONS ================= -->

                        <div class="bg-gradient-to-br from-blue-600 to-cyan-500 rounded-2xl p-6 text-white shadow-lg">

                            <div class="flex items-center gap-3 mb-4">

                                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-2xl">

                                    ℹ️

                                </div>

                                <div>

                                    <h3 class="font-bold text-lg">

                                        Informations

                                    </h3>

                                    <p class="text-blue-100 text-sm">

                                        Vérifiez vos informations avant de valider.

                                    </p>

                                </div>

                            </div>

                                <ul class="space-y-2 text-sm">

                                    <li>✔ Choisissez le bon service médical.</li>

                                    <li>✔ Sélectionnez une date disponible.</li>

                                    <li>✔ Vérifiez votre numéro de contact.</li>

                                    <li>✔ Décrivez clairement votre problème.</li>

                                </ul>

                        </div>

                       <!-- ================= DESCRIPTION ================= -->

                            <div class="lg:col-span-2 bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg hover:border-blue-300 transition-all duration-300">

                                    <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                                    📝 Description de votre problème

                                    </label>

                                    <textarea
                                    name="description_maladie"
                                    rows="7"
                                    placeholder="Décrivez votre problème, vos symptômes ou toute information utile..."
                                    class="w-full rounded-xl border-gray-300 focus:border-blue-600 focus:ring-4 focus:ring-blue-100 transition duration-300 resize-none">{{ old('description_maladie') }}</textarea>

                                    <p class="text-sm text-gray-500 mt-2">

                                    Plus votre description est précise, plus notre équipe pourra préparer votre prise en charge.

                                    </p>

                                    @error('description_maladie')

                                    <p class="text-red-500 text-sm mt-2">

                                        {{ $message }}

                                    </p>

                                    @enderror

                            </div>


                        <!-- ================= BOUTONS ================= -->

                            <div class="lg:col-span-2 mb-2 mt-4">

                                <div class="border-t border-gray-200 pt-8">

                                    <div class="flex flex-col lg:flex-row items-center justify-between gap-6">

                                                <!-- Message -->

                                                <div class="flex items-center gap-4">

                                                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center text-3xl">

                                                        💙

                                                    </div>

                                                    <div>

                                                        <h3 class="font-bold text-gray-800 text-lg">

                                                            CHL

                                                        </h3>

                                                        <p class="text-gray-500 text-sm">

                                                            Merci de vérifier toutes les informations avant la validation.

                                                        </p>

                                                    </div>

                                                </div>

                                        <!-- Boutons -->

                                                <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">

                                                    <a href="{{ route('dashboard') }}"
                                                    class="px-8 py-3 rounded-xl bg-gray-200 text-gray-700 font-semibold hover:bg-gray-300 transition duration-300 text-center shadow">

                                                        ❌ Annuler

                                                    </a>

                                                    <button
                                                        type="submit"
                                                        class="px-8 py-3 rounded-xl bg-gradient-to-r from-blue-700 via-blue-600 to-cyan-500 text-white font-bold shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300">

                                                        📨 Envoyer la réservation

                                                    </button>

                                                </div>

                                    </div>

                                </div>

                            </div>

                </div>

            </form>

        </div>


</section>
        

@endsection





