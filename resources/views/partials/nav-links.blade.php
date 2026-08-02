<a href="/accueil"
class="flex items-center gap-2 hover:text-blue-800">

<i class="fa-solid fa-house"></i>

Accueil

</a>



<a href="#"
class="flex items-center gap-2 hover:text-blue-800">

<i class="fa-solid fa-newspaper"></i>

Instructions

</a>



<a href="#apropos"
class="flex items-center gap-2 hover:text-blue-800">

<i class="fa-solid fa-circle-info"></i>

A propos

</a>




@guest


<a href="{{ route('register') }}"
class="bg-blue-700 text-white px-4 py-2 rounded-xl flex items-center gap-2">

<i class="fa-solid fa-user-plus"></i>

S'inscrire

</a>



<a href="{{ route('login') }}"
class="border border-blue-700 text-blue-700 px-4 py-2 rounded-xl flex items-center gap-2">

<i class="fa-solid fa-right-to-bracket"></i>

Se connecter

</a>



@else


<a href="{{ route('dashboard') }}"
class="flex items-center gap-2">

<i class="fa-solid fa-user"></i>

Mon compte

</a>




<form method="POST" action="{{ route('logout') }}">

@csrf

<button class="flex items-center gap-2 text-red-600">

<i class="fa-solid fa-right-from-bracket"></i>

Déconnexion

</button>

</form>


@endguest