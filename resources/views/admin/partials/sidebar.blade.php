<aside
    :class="sidebarOpen 
        ? 'translate-x-0' 
        : '-translate-x-full lg:translate-x-0'"
    class="
    fixed lg:static
    top-0 left-0
    z-40
    w-20 lg:w-72
    h-screen
    flex-shrink-0

    bg-white/50
    backdrop-blur-lg

    text-gray-800
    border-r border-gray-200

    shadow-xl

    flex flex-col

    transform
    transition-transform
    duration-300
    ">
    {{-- LOGO --}}
    <div class="p-4 lg:p-6 border-b border-blue-700">


        <h1 class="text-xl lg:text-2xl font-extrabold text-center lg:text-left">

            🏥

            <span class="hidden lg:inline">
                CHL Admin
            </span>

        </h1>


        <p class="hidden lg:block text-blue-200 text-sm mt-1">

            Clinique Hadassah Liantsoa

        </p>


    </div>




    {{-- MENU --}}
    <nav class="mt-6 flex-1 overflow-y-auto space-y-1">


        <a href="{{ route('admin.dashboard') }}"
        class="flex items-center justify-center lg:justify-start rounded-xl mx-3 gap-4 px-4 lg:px-6 py-4 border border-transparent hover:bg-blue-50 hover:border-blue-500 transition">

            <i class="fa-solid fa-chart-line text-lg"></i>

            <span class="hidden lg:inline">
                Dashboard
            </span>

        </a>



        <a href="{{ route('admin.patients.index') }}"
        class="flex items-center justify-center lg:justify-start rounded-xl mx-3 gap-4 px-4 lg:px-6 py-4 border border-transparent hover:bg-blue-50 hover:border-blue-500 transition">

            <i class="fa-solid fa-users text-lg"></i>

            <span class="hidden lg:inline">
                Patients
            </span>

        </a>



        <a href="{{ route('admin.reservations.index') }}"
        class="flex items-center justify-center lg:justify-start rounded-xl mx-3 gap-4 px-4 lg:px-6 py-4 border border-transparent hover:bg-blue-50 hover:border-blue-500 transition">

            <i class="fa-solid fa-calendar-check text-lg"></i>

            <span class="hidden lg:inline">
                Réservations
            </span>

        </a>



        <a href="{{ route('admin.publications.index') }}"
        class="flex items-center justify-center lg:justify-start rounded-xl mx-3 gap-4 px-4 lg:px-6 py-4 border border-transparent hover:bg-blue-50 hover:border-blue-500 transition">

            <i class="fa-solid fa-newspaper text-lg"></i>

            <span class="hidden lg:inline">
                Publications
            </span>

        </a>



        <a href="{{ route('admin.factures.index') }}"
        class="flex items-center justify-center lg:justify-start rounded-xl mx-3 gap-4 px-4 lg:px-6 py-4 border border-transparent hover:bg-blue-50 hover:border-blue-500 transition">

            <i class="fa-solid fa-file-invoice-dollar text-lg"></i>

            <span class="hidden lg:inline">
                Factures
            </span>

        </a>


       
        <a href="{{ route('admin.notifications.index') }}"
        class="flex items-center justify-center lg:justify-start rounded-xl mx-3 gap-4 px-4 lg:px-6 py-4 border border-transparent hover:bg-blue-50 hover:border-blue-500 transition">

            <i class="fa-solid fa-bell text-lg"></i>

            <span class="hidden lg:inline">
                Notifications
            </span>

        </a>



        <a href="#"
           class="flex items-center justify-center lg:justify-start rounded-xl mx-3 gap-4 px-4 lg:px-6 py-4 border border-transparent hover:bg-blue-50 hover:border-blue-500 transition">

            <i class="fa-solid fa-gear text-lg"></i>

            <span class="hidden lg:inline">
                Paramètres
            </span>

        </a>


    </nav>





    {{-- DECONNEXION --}}
<div class="p-4 lg:p-6 border-t border-gray-200">


    <form method="POST" action="{{ route('logout') }}">

        @csrf


        <button
            type="submit"
            class="
            w-full
            bg-white
            border
            border-blue-300
            text-blue-700
            py-3
            rounded-xl
            font-semibold
            transition
            flex
            items-center
            justify-center
            gap-2
            hover:bg-blue-50
            hover:border-blue-500
            ">


            <i class="fa-solid fa-right-from-bracket"></i>


            <span class="hidden lg:inline">
                Déconnexion
            </span>


        </button>


    </form>


</div>


</aside>