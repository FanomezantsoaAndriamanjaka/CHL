
@extends('layouts.navbars')

@section('content')

<div class="w-full space-y-8">


    {{-- ========================================================= --}}
    {{-- HERO SECTION --}}
    {{-- ========================================================= --}}

    <section
        class="bg-gradient-to-r from-blue-800 via-blue-700 to-cyan-500
               rounded-3xl mx-4 p-8 md:p-12 text-white shadow-xl">


        {{-- TITRE --}}

        <div class="text-center">

            <h1 class="text-5xl md:text-6xl font-extrabold tracking-wide">
                CHL
            </h1>

            <p class="mt-4 text-lg md:text-xl text-blue-100
                      max-w-3xl mx-auto leading-relaxed">

                Votre centre médical de confiance pour des soins de qualité,
                un accompagnement personnalisé et une prise en charge adaptée
                à vos besoins.

            </p>

        </div>



        {{-- LOGO / IMAGE CENTRALE --}}

        <div class="flex justify-center mt-10">

            <div
                class="w-44 h-44 md:w-52 md:h-52
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


            <a
                href="{{ route('register') }}"
                class="bg-white text-blue-700
                       px-8 py-3 rounded-xl
                       font-bold shadow-lg
                       hover:scale-105
                       hover:bg-blue-50
                       transition duration-300">

                <i class="fa-solid fa-calendar-check mr-2"></i>

                Prendre rendez-vous

            </a>



            <a
                href="#contact-form"
                class="border-2 border-white
                       px-8 py-3 rounded-xl
                       font-bold
                       hover:bg-white
                       hover:text-blue-700
                       transition duration-300">

                <i class="fa-solid fa-paper-plane mr-2"></i>

                Nous contacter

            </a>

        </div>

    </section>




    {{-- ========================================================= --}}
    {{-- FORMULAIRE DE CONTACT --}}
    {{-- ========================================================= --}}

    <section
        id="contact-form"
        class="bg-gradient-to-br from-white via-blue-50 to-cyan-50
               rounded-3xl
               border border-blue-100
               shadow-xl
               mx-4
               p-6 md:p-10">


        {{-- HEADER FORMULAIRE --}}

        <div class="text-center mb-10">


            <div class="flex justify-center mb-4">

                <div
                    class="w-16 h-16 rounded-full
                           bg-gradient-to-br from-blue-100 to-cyan-100
                           flex items-center justify-center
                           shadow-md">

                    <i
                        class="fa-solid fa-paper-plane
                               text-blue-600 text-2xl">
                    </i>

                </div>

            </div>



            <h2
                class="text-3xl md:text-4xl
                       font-extrabold
                       text-blue-800">

                Envoyez-nous un message

            </h2>



            <div
                class="w-20 h-1
                       bg-gradient-to-r from-blue-600 to-cyan-500
                       rounded-full
                       mx-auto mt-4">
            </div>



            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">

                Notre équipe est à votre disposition pour répondre à vos
                questions et vous accompagner dans vos démarches médicales.

            </p>

        </div>




        {{-- ===================================================== --}}
        {{-- MESSAGE SUCCESS --}}
        {{-- ===================================================== --}}

        @if(session('success'))

            <div
                class="mb-8
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




        {{-- ===================================================== --}}
        {{-- ERREURS --}}
        {{-- ===================================================== --}}

        @if($errors->any())

            <div
                class="mb-8
                       bg-red-50
                       border border-red-300
                       text-red-700
                       px-5 py-4
                       rounded-xl
                       shadow-sm">

                <p class="font-bold mb-2">

                    <i
                        class="fa-solid fa-triangle-exclamation mr-2">
                    </i>

                    Veuillez corriger les erreurs suivantes :

                </p>


                <ul class="list-disc ml-6 text-sm space-y-1">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif




        {{-- ===================================================== --}}
        {{-- FORMULAIRE --}}
        {{-- ===================================================== --}}

        <form
            action="{{ route('contact.message.store') }}"
            method="POST"
            class="w-full">

            @csrf



            {{-- ================================================= --}}
            {{-- NOM + EMAIL --}}
            {{-- ================================================= --}}

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


                {{-- NOM --}}

                <div>

                    <label
                        class="block text-gray-700
                               font-semibold mb-2">

                        <i
                            class="fa-solid fa-user
                                   text-blue-600 mr-2">
                        </i>

                        Nom complet

                    </label>


                    <input
                        type="text"
                        name="nom"
                        value="{{ old('nom') }}"
                        required
                        placeholder="Votre nom complet"
                        class="w-full
                               bg-white
                               border border-blue-200
                               rounded-xl
                               px-4 py-3
                               shadow-sm
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

                        <i
                            class="fa-solid fa-envelope
                                   text-red-500 mr-2">
                        </i>

                        Adresse email

                    </label>


                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        placeholder="exemple@email.com"
                        class="w-full
                               bg-white
                               border border-blue-200
                               rounded-xl
                               px-4 py-3
                               shadow-sm
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

                        <i
                            class="fa-solid fa-phone
                                   text-green-600 mr-2">
                        </i>

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
                        placeholder="+261 03 012 25"
                        class="w-full
                               bg-white
                               border border-blue-200
                               rounded-xl
                               px-4 py-3
                               shadow-sm
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

                        <i
                            class="fa-solid fa-tag
                                   text-yellow-500 mr-2">
                        </i>

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
                               bg-white
                               border border-blue-200
                               rounded-xl
                               px-4 py-3
                               shadow-sm
                               focus:ring-2
                               focus:ring-blue-400
                               focus:border-blue-400
                               outline-none
                               transition">

                </div>


            </div>




            {{-- ================================================= --}}
            {{-- MESSAGE --}}
            {{-- ================================================= --}}

            <div class="mt-6">

                <label
                    class="block text-gray-700
                           font-semibold mb-2">

                    <i
                        class="fa-solid fa-message
                               text-cyan-600 mr-2">
                    </i>

                    Votre message

                </label>


                <textarea
                    name="message"
                    rows="6"
                    required
                    placeholder="Écrivez votre message ici..."
                    class="w-full
                           bg-white
                           border border-blue-200
                           rounded-xl
                           px-4 py-3
                           shadow-sm
                           focus:ring-2
                           focus:ring-blue-400
                           focus:border-blue-400
                           outline-none
                           resize-none
                           transition">{{ old('message') }}</textarea>

            </div>




            {{-- ================================================= --}}
            {{-- BOUTON --}}
            {{-- ================================================= --}}

            <div class="flex justify-center mt-8">

                <button
                    type="submit"
                    class="bg-gradient-to-r
                           from-blue-700
                           to-cyan-500
                           hover:from-blue-800
                           hover:to-cyan-600
                           text-white
                           px-10 py-3
                           rounded-xl
                           font-bold
                           shadow-lg
                           hover:shadow-xl
                           hover:scale-105
                           transition duration-300">

                    <i class="fa-solid fa-paper-plane mr-2"></i>

                    Envoyer le message

                </button>

            </div>


        </form>

    </section>


</div>

@endsection
```
