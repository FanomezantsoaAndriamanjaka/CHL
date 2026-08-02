<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administration -CHL</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body class="bg-gray-100">

<div x-data="{ sidebarOpen:false }"
     class="flex h-screen overflow-hidden">

     <div
        x-show="sidebarOpen"
        @click="sidebarOpen=false"
        class="fixed inset-0 bg-black/40 z-30 lg:hidden">
    </div>





    @include('admin.partials.sidebar')



    <div class="flex-1 flex flex-col overflow-hidden">


        @include('admin.partials.navbar')


        <main class="flex-1 overflow-y-auto bg-gradient-to-br from-blue-50 via-white to-cyan-50 p-6">

            @yield('content')

        </main>


    </div>


</div>




@stack('scripts')
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>