<x-guest-layout>

<div class="mb-6 text-center">

    <h1 class="text-3xl font-bold text-blue-700">
        🏥 Clinique Hadassah Liantsoa
    </h1>

    <p class="text-gray-500 mt-2">
        Connexion à votre espace patient
    </p>

</div>


<x-auth-session-status class="mb-4" :status="session('status')" />


<form method="POST" action="{{ route('login') }}">

@csrf


<div>

<label class="block text-sm font-medium text-gray-700">
    Email
</label>

<input 
type="email"
name="email"
value="{{ old('email') }}"
required
autofocus
class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
>


<x-input-error :messages="$errors->get('email')" class="mt-2" />

</div>



<div class="mt-5">


<label class="block text-sm font-medium text-gray-700">
    Mot de passe
</label>


<input 
type="password"
name="password"
required
class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
>


<x-input-error :messages="$errors->get('password')" class="mt-2" />


</div>



<div class="mt-5 flex items-center">


<input 
id="remember_me"
type="checkbox"
name="remember"
class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
>


<label for="remember_me" class="ml-2 text-sm text-gray-600">

Se souvenir de moi

</label>


</div>




<div class="mt-6">


<button
type="submit"
class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg transition">

    🔐 Se connecter

</button>


</div>




@if(Route::has('password.request'))

<div class="text-center mt-5">

<a href="{{ route('password.request') }}"
class="text-sm text-blue-600 hover:underline">

Mot de passe oublié ?

</a>

</div>

@endif



</form>


</x-guest-layout>