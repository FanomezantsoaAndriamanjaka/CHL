<x-guest-layout>


<div class="mb-6 text-center">

    <h1 class="text-3xl font-bold text-blue-700">
        🏥 Clinique Hadassah Liantsoa
    </h1>

    <p class="mt-2 text-gray-500">
        Réinitialisation de votre mot de passe
    </p>

</div>



<div class="bg-blue-50 border border-blue-100 rounded-xl p-5 mb-6">

    <p class="text-sm text-gray-600 leading-relaxed text-center">

        Vous avez oublié votre mot de passe ?
        Pas d'inquiétude.
        Entrez votre adresse email et nous vous enverrons
        un lien pour créer un nouveau mot de passe.

    </p>

</div>



<!-- Session Status -->

<x-auth-session-status 
    class="mb-4" 
    :status="session('status')" 
/>



<form method="POST" action="{{ route('password.email') }}">

@csrf



<div>


<label for="email"
class="block text-sm font-semibold text-gray-700">

Adresse Email

</label>



<input
id="email"
class="mt-2 block w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
type="email"
name="email"
value="{{ old('email') }}"
required
autofocus
placeholder="exemple@email.com"
/>



<x-input-error 
:messages="$errors->get('email')" 
class="mt-2"
/>


</div>





<div class="mt-6">


<button
type="submit"
class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg transition duration-300">


📩 Envoyer le lien de réinitialisation


</button>


</div>



<div class="mt-5 text-center">


<a href="{{ route('login') }}"
class="text-sm text-blue-600 hover:underline">

← Retour à la connexion

</a>


</div>



</form>


</x-guest-layout>