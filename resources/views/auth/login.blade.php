<x-guest-layout>

{{-- ================= HEADER ================= --}}

<div class="text-center">

    <h1 class="text-3xl font-bold text-blue-700">
        🏥 CHL
    </h1>

    <p class="text-gray-500 mt-2">
        Connexion à votre espace patient
    </p>

</div>


{{-- ================= FORMULAIRE ================= --}}

<form method="POST" action="{{ route('login') }}" class="mt-8">

    @csrf


    {{-- EMAIL --}}

    <div>

        <label
            for="email"
            class="block text-sm font-semibold text-gray-700">

            Adresse email

        </label>

        <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            autofocus
            autocomplete="username"
            placeholder="exemple@email.com"
            class="mt-2 w-full rounded-xl
                   border-gray-300
                   shadow-sm
                   focus:border-blue-500
                   focus:ring-blue-500">

    </div>


    {{-- MOT DE PASSE --}}

    <div class="mt-5">

        <label
            for="password"
            class="block text-sm font-semibold text-gray-700">

            Mot de passe

        </label>

        <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            placeholder="Votre mot de passe"
            class="mt-2 w-full rounded-xl
                   border-gray-300
                   shadow-sm
                   focus:border-blue-500
                   focus:ring-blue-500">

    </div>


    {{-- SE SOUVENIR --}}

    <div class="flex items-center justify-between mt-5">

        <label
            for="remember_me"
            class="flex items-center gap-2 text-sm text-gray-600">

            <input
                id="remember_me"
                type="checkbox"
                name="remember"
                class="rounded
                       border-gray-300
                       text-blue-600
                       focus:ring-blue-500">

            <span>
                Se souvenir de moi
            </span>

        </label>


        {{-- MOT DE PASSE OUBLIE --}}

        @if(Route::has('password.request'))

            <a
                href="{{ route('password.request') }}"
                class="text-sm font-semibold
                       text-blue-600
                       hover:text-blue-800
                       transition">

                Mot de passe oublié ?

            </a>

        @endif

    </div>


    {{-- BOUTON CONNEXION --}}

    <button
        type="submit"
        class="w-full mt-7
               bg-gradient-to-r
               from-blue-700
               to-cyan-500
               hover:from-blue-800
               hover:to-cyan-600
               text-white
               py-3
               rounded-xl
               font-bold
               shadow-lg
               transition
               duration-300
               hover:scale-[1.02]">

        <i class="fa-solid fa-right-to-bracket mr-2"></i>

        Se connecter

    </button>

</form>


{{-- ================= SEPARATION ================= --}}

<div class="relative my-7">

    <div class="absolute inset-0 flex items-center">

        <div class="w-full border-t border-gray-200"></div>

    </div>

    <div class="relative flex justify-center">

        <span class="bg-white px-4 text-sm text-gray-400">

            ou

        </span>

    </div>

</div>


{{-- ================= INSCRIPTION ================= --}}

<div class="text-center">

    <p class="text-gray-600 text-sm mb-3">

        Vous n'avez pas encore de compte ?

    </p>


    <a
        href="{{ route('register') }}"
        class="inline-flex items-center justify-center
               w-full
               border-2
               border-blue-600
               text-blue-700
               hover:bg-blue-600
               hover:text-white
               py-3
               rounded-xl
               font-bold
               transition
               duration-300">

        <i class="fa-solid fa-user-plus mr-2"></i>

        S'inscrire

    </a>

</div>


</x-guest-layout>