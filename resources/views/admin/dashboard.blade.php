@extends('admin.layouts.app')

@section('content')

<div class="space-y-8">


{{-- ===========================
    BIENVENUE
=========================== --}}

<div class="bg-gradient-to-r from-blue-700 to-cyan-600 rounded-3xl shadow-xl p-8 text-white">

    <h1 class="text-4xl font-bold">
        Bienvenue, {{ Auth::user()->name }} 👋
    </h1>


    <p class="mt-3 text-blue-100 text-lg">
        Tableau de bord de la Clinique Hadassah Liantsoa.
        Gérez facilement les patients, réservations, factures et publications.
    </p>


</div>




{{-- ===========================
    STATISTIQUES
=========================== --}}

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">



    {{-- ===========================
        PATIENTS
    =========================== --}}

    <div class="bg-white rounded-2xl shadow-lg p-6">


        <div class="flex justify-between items-center">


            <div>


                <p class="text-gray-500">
                    Patients
                </p>


                <h2 class="text-4xl font-bold mt-2">
                    {{ $patients }}
                </h2>


                <p class="text-sm text-green-600 mt-2">

                    <i class="fa-solid fa-arrow-trend-up"></i>

                    + {{ $nouveauxPatients }} aujourd'hui

                </p>


            </div>



            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">


                <i class="fa-solid fa-users text-3xl text-blue-700"></i>


            </div>



        </div>


    </div>





    {{-- ===========================
        RESERVATIONS
    =========================== --}}

    <div class="bg-white rounded-2xl shadow-lg p-6">


        <div class="flex justify-between items-center">


            <div>


                <p class="text-gray-500">
                    Réservations
                </p>


                <h2 class="text-4xl font-bold mt-2">
                    {{ $reservations }}
                </h2>


                <p class="text-sm text-blue-600 mt-2">

                    Aujourd'hui :
                    {{ $reservationsAujourdHui }}

                </p>


            </div>



            <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center">


                <i class="fa-solid fa-calendar-check text-3xl text-green-700"></i>


            </div>



        </div>


    </div>





    {{-- ===========================
        FACTURES
    =========================== --}}

    <div class="bg-white rounded-2xl shadow-lg p-6">


        <div class="flex justify-between items-center">


            <div>


                <p class="text-gray-500">
                    Factures
                </p>


                <h2 class="text-4xl font-bold mt-2">
                    {{ $factures }}
                </h2>


                <p class="text-sm text-orange-600 mt-2">


                    En attente :
                    {{ $facturesEnAttente }}


                </p>


            </div>




            <div class="w-16 h-16 rounded-full bg-yellow-100 flex items-center justify-center">


                <i class="fa-solid fa-file-invoice-dollar text-3xl text-yellow-600"></i>


            </div>




        </div>


    </div>






    {{-- ===========================
        PUBLICATIONS
    =========================== --}}

    <div class="bg-white rounded-2xl shadow-lg p-6">


        <div class="flex justify-between items-center">


            <div>


                <p class="text-gray-500">
                    Publications
                </p>


                <h2 class="text-4xl font-bold mt-2">
                    {{ $publications }}
                </h2>


                <p class="text-sm text-purple-600 mt-2">

                    Articles publiés

                </p>


            </div>




            <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center">


                <i class="fa-solid fa-newspaper text-3xl text-purple-700"></i>


            </div>



        </div>


    </div>



</div>





{{-- ===========================
    GRAPHIQUES ANALYTIQUES
=========================== --}}


<div class="grid grid-cols-1 xl:grid-cols-2 gap-8 mt-8">



    {{-- ===========================
        NOUVEAUX PATIENTS
    =========================== --}}

    <div class="bg-white rounded-2xl shadow-lg p-6">


        <h2 class="text-xl font-bold mb-5">

            👥 Nouveaux Patients

        </h2>



        <div class="h-80">

            <canvas id="patientsChart"></canvas>

        </div>



    </div>





    {{-- ===========================
        FACTURES
    =========================== --}}

    <div class="bg-white rounded-2xl shadow-lg p-6">


        <h2 class="text-xl font-bold mb-5">

            🧾 Factures

        </h2>



        <div class="h-80">

            <canvas id="facturesChart"></canvas>

        </div>



    </div>



</div>





{{-- ===========================
    CONSULTATIONS
=========================== --}}


<div class="bg-white rounded-2xl shadow-lg p-6 mt-8">


    <h2 class="text-xl font-bold mb-5">

        🩺 Répartition des consultations

    </h2>



    <div class="h-96">


        <canvas id="consultationChart"></canvas>


    </div>



</div>






{{-- ===========================
    ACTIONS RAPIDES
=========================== --}}


<div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">



    {{-- RESERVATIONS --}}

    <a href="{{ route('admin.reservations.index') }}"
       class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">


        <i class="fa-solid fa-calendar-plus text-4xl text-blue-700"></i>


        <h3 class="font-bold text-xl mt-4">

            Réservations

        </h3>


        <p class="text-gray-500 mt-2">

            Gérer les réservations des patients.

        </p>


    </a>







    {{-- PATIENTS --}}

    <a href="{{ route('admin.patients.index') }}"
       class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">


        <i class="fa-solid fa-user-plus text-4xl text-green-700"></i>


        <h3 class="font-bold text-xl mt-4">

            Patients

        </h3>


        <p class="text-gray-500 mt-2">

            Consulter la liste des patients.

        </p>


    </a>







    {{-- FACTURES --}}

    <a href="{{ route('admin.factures.index') }}"
       class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">


        <i class="fa-solid fa-file-circle-plus text-4xl text-yellow-600"></i>


        <h3 class="font-bold text-xl mt-4">

            Factures

        </h3>


        <p class="text-gray-500 mt-2">

            Consulter les factures.

        </p>


    </a>




    {{-- PUBLICATIONS --}}

    <a href="{{ route('admin.publications.index') }}"
       class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">


        <i class="fa-solid fa-newspaper text-4xl text-purple-700"></i>


        <h3 class="font-bold text-xl mt-4">

            Publications

        </h3>


        <p class="text-gray-500 mt-2">

            Gérer les publications.

        </p>


    </a>



</div>





{{-- ===========================
    DERNIÈRES RÉSERVATIONS
=========================== --}}


<div class="bg-white rounded-2xl shadow-lg">


    <div class="flex items-center justify-between p-6 border-b">


        <h2 class="text-2xl font-bold text-gray-800">

            📋 Dernières Réservations

        </h2>



        <a href="{{ route('admin.reservations.index') }}"
           class="text-blue-600 hover:text-blue-800 font-semibold">

            Voir tout →

        </a>



    </div>





    <div class="overflow-x-auto">


        <table class="min-w-full">


            <thead class="bg-gray-100">


                <tr>


                    <th class="px-6 py-4 text-left">
                        Patient
                    </th>


                    <th class="px-6 py-4 text-left">
                        Service
                    </th>


                    <th class="px-6 py-4 text-left">
                        Date
                    </th>


                    <th class="px-6 py-4 text-left">
                        Statut
                    </th>


                    <th class="px-6 py-4 text-center">
                        Action
                    </th>


                </tr>


            </thead>





            <tbody>


                @forelse($dernieresReservations as $reservation)


                <tr class="border-b hover:bg-gray-50">



                    {{-- PATIENT --}}

                    <td class="px-6 py-4 font-semibold">


                        {{ $reservation->nom }}
                        {{ $reservation->prenom }}


                    </td>





                    {{-- SERVICE --}}

                    <td class="px-6 py-4">


                        {{ $reservation->consultation }}


                    </td>





                    {{-- DATE --}}

                    <td class="px-6 py-4">


                        {{ \Carbon\Carbon::parse($reservation->date_reception)->format('d/m/Y') }}


                    </td>





                    {{-- STATUT --}}

                    <td class="px-6 py-4">


                        @if($reservation->statut == 'Confirmée')


                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">

                                ✅ Confirmée

                            </span>



                        @elseif($reservation->statut == 'Refusée')


                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">

                                ❌ Refusée

                            </span>



                        @else


                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">

                                ⏳ En attente

                            </span>



                        @endif


                    </td>







                    {{-- ACTION --}}

                    <td class="px-6 py-4 text-center">


                        <a href="{{ route('admin.reservations.show', $reservation->id) }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">


                            Voir


                        </a>


                    </td>



                </tr>





                @empty



                <tr>


                    <td colspan="5"
                        class="text-center py-10 text-gray-500">


                        Aucune réservation disponible.


                    </td>



                </tr>



                @endforelse



            </tbody>



        </table>



    </div>



</div>







{{-- ===========================
    RESERVATIONS PAR MOIS
=========================== --}}



<div class="bg-white rounded-2xl shadow-lg p-6 mt-8">



    <h2 class="text-2xl font-bold mb-6">


        📊 Réservations par mois


    </h2>




    <div class="h-96">


        <canvas id="reservationChart"></canvas>


    </div>



</div>





</div>


@endsection









@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>


const mois = [
    "",
    "Jan",
    "Fév",
    "Mar",
    "Avr",
    "Mai",
    "Juin",
    "Juil",
    "Août",
    "Sep",
    "Oct",
    "Nov",
    "Déc"
];





/*
|--------------------------------------------------------------------------
| RESERVATIONS PAR MOIS
|--------------------------------------------------------------------------
*/


new Chart(
document.getElementById('reservationChart'),
{

type:'bar',

data:{


labels:[

@foreach($reservationsParMois as $item)

mois[{{ $item->mois }}],

@endforeach

],



datasets:[{


label:'Réservations',


data:[

@foreach($reservationsParMois as $item)

{{ $item->total }},

@endforeach

],


borderWidth:2,

borderRadius:10


}]


},


options:{


responsive:true,

maintainAspectRatio:false,


scales:{


y:{


beginAtZero:true,

ticks:{


stepSize:1


}


}


}


}


});









/*
|--------------------------------------------------------------------------
| PATIENTS PAR MOIS
|--------------------------------------------------------------------------
*/


new Chart(
document.getElementById('patientsChart'),
{


type:'line',


data:{


labels:[


@foreach($patientsParMois as $item)


mois[{{ $item->mois }}],


@endforeach


],



datasets:[{


label:'Nouveaux patients',


data:[


@foreach($patientsParMois as $item)


{{ $item->total }},


@endforeach


],



tension:0.4,


fill:true



}]


},



options:{


responsive:true,

maintainAspectRatio:false



}



});









/*
|--------------------------------------------------------------------------
| FACTURES
|--------------------------------------------------------------------------
*/


new Chart(
document.getElementById('facturesChart'),
{


type:'doughnut',



data:{


labels:[


@foreach($facturesParMois as $item)


mois[{{ $item->mois }}],


@endforeach


],



datasets:[{


label:'Factures',


data:[


@foreach($facturesParMois as $item)


{{ $item->total }},


@endforeach


]



}]


},



options:{


responsive:true,

maintainAspectRatio:false



}



});









/*
|--------------------------------------------------------------------------
| CONSULTATIONS
|--------------------------------------------------------------------------
*/


new Chart(
document.getElementById('consultationChart'),
{


type:'pie',



data:{


labels:[


@foreach($consultations as $item)


"{{ $item->consultation }}",


@endforeach


],



datasets:[{


label:'Consultations',


data:[


@foreach($consultations as $item)


{{ $item->total }},


@endforeach


]



}]


},



options:{


responsive:true,

maintainAspectRatio:false



}



});



</script>

@endpush

