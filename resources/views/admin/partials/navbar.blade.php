<header 
    class="bg-white shadow-md border-b relative z-50"
    x-data="{ 
        profileOpen:false,
        darkMode:false
    }">


    <div class="flex items-center justify-between px-4 lg:px-8 py-4">


        {{-- =========================
            GAUCHE
        ========================== --}}

        <div class="flex items-center gap-3">


            {{-- Hamburger Mobile --}}

            <button
                @click="sidebarOpen = !sidebarOpen"
                class="lg:hidden text-gray-700 text-2xl">


                <i 
                    class="fa-solid"
                    :class="sidebarOpen ? 'fa-xmark' : 'fa-bars'">
                </i>


            </button>





            {{-- TITRE --}}

            <div>


                <h1 class="text-lg lg:text-3xl font-bold text-gray-800">


                    <i class="fa-solid fa-user-shield text-blue-700 mr-2"></i>


                    <span>
                        Administration
                    </span>


                </h1>



                <div class="hidden lg:flex items-center gap-2 text-sm text-gray-500 mt-1">


                    <span>
                        Accueil
                    </span>


                    <i class="fa-solid fa-chevron-right text-xs"></i>


                    <span class="text-blue-600 font-semibold">
                        Dashboard
                    </span>


                </div>


            </div>


        </div>









        {{-- =========================
            DROITE
        ========================== --}}

        <div class="flex items-center gap-2 lg:gap-5">







            {{-- RECHERCHE DESKTOP --}}


            <div class="hidden lg:block relative">


                <input
                    type="text"
                    placeholder="Rechercher patient..."
                    class="
                    w-80
                    rounded-xl
                    border
                    border-gray-300
                    pl-11
                    pr-4
                    py-2.5
                    outline-none
                    focus:ring-2
                    focus:ring-blue-500
                    ">


                <i
                    class="
                    fa-solid fa-magnifying-glass
                    absolute
                    left-4
                    top-3.5
                    text-gray-400">
                </i>


            </div>







            {{-- MODE SOMBRE --}}


            <button
                @click="darkMode=!darkMode"
                class="
                flex
                w-10 h-10
                lg:w-11 lg:h-11
                rounded-full
                bg-gray-100
                hover:bg-gray-200
                items-center
                justify-center
                transition">


                <i class="fa-solid fa-moon text-gray-600"></i>


            </button>








            <div class="relative"
     x-data="{notificationOpen:false}">

    <button
        @click="notificationOpen=!notificationOpen"
        class="relative w-10 h-10 lg:w-11 lg:h-11 rounded-full bg-blue-100 hover:bg-blue-200">

        <i class="fa-solid fa-bell text-blue-700"></i>


        @if(($notificationCount ?? 0) > 0)

        <span
            class="absolute -top-1 -right-1 bg-red-600 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center">

            {{ $notificationCount }}

        </span>

        @endif

    </button>



    <div
        x-show="notificationOpen"
        @click.outside="notificationOpen=false"
        class="absolute right-0 mt-3 w-80 bg-white rounded-xl shadow-xl border p-4">


        @forelse($notifications as $notification)
        <form
            action="{{ route('admin.notifications.lire', $notification) }}"
            method="POST">

            @csrf

            <button
                type="submit"
                class="w-full text-left border-b py-3 hover:bg-gray-50 px-2 rounded">

                <p class="font-bold text-gray-800">
                    {{ $notification->titre }}
                </p>

                <p class="text-sm text-gray-600">
                    {{ $notification->message }}
                </p>

            </button>

        </form>


        @empty

        <p class="text-gray-500 text-center">
            Aucune notification
        </p>

        @endforelse


    </div>

</div>





            {{-- PROFIL ADMIN --}}


            <div class="relative">



                <button
                    @click="profileOpen=!profileOpen"
                    class="flex items-center gap-2">





                    <div
                        class="
                        w-10 h-10
                        lg:w-12 lg:h-12
                        rounded-full
                        bg-blue-700
                        flex
                        items-center
                        justify-center
                        text-white
                        font-bold">


                        {{ strtoupper(substr(Auth::user()->name,0,1)) }}


                    </div>





                    <div class="hidden md:block text-left">


                        <h3 class="font-bold text-gray-800">


                            {{ Auth::user()->name }}


                        </h3>


                        <p class="text-sm text-gray-500">

                            Administrateur

                        </p>


                    </div>





                    <i
                    class="
                    hidden md:block
                    fa-solid fa-chevron-down
                    text-gray-400">
                    </i>



                </button>









                {{-- DROPDOWN --}}


                <div
                    x-show="profileOpen"
                    @click.outside="profileOpen=false"
                    x-transition
                    class="
                    absolute
                    right-0
                    mt-3
                    w-64
                    bg-white
                    rounded-2xl
                    shadow-xl
                    border
                    p-3
                    ">



                    <div class="px-4 py-3 border-b">


                        <p class="font-bold text-gray-800">

                            {{ Auth::user()->name }}

                        </p>


                        <p class="text-sm text-gray-500">

                            Administrateur

                        </p>


                    </div>







                    <a href="#"
                    class="
                    flex
                    items-center
                    gap-3
                    px-4
                    py-3
                    rounded-xl
                    hover:bg-blue-50
                    transition">


                        <i class="fa-solid fa-user text-blue-600"></i>

                        Mon profil


                    </a>







                    <a href="#"
                    class="
                    flex
                    items-center
                    gap-3
                    px-4
                    py-3
                    rounded-xl
                    hover:bg-blue-50
                    transition">


                        <i class="fa-solid fa-gear text-gray-600"></i>

                        Paramètres


                    </a>








                    <form method="POST" action="{{ route('logout') }}">


                        @csrf


                        <button
                            type="submit"
                            class="
                            w-full
                            flex
                            items-center
                            gap-3
                            px-4
                            py-3
                            rounded-xl
                            text-red-600
                            hover:bg-red-50
                            transition">


                            <i class="fa-solid fa-right-from-bracket"></i>


                            Déconnexion


                        </button>


                    </form>



                </div>



            </div>




        </div>


    </div>


</header>