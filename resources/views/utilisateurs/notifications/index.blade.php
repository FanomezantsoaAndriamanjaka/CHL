@extends('layouts.navbars')

@section('content')


<div class="max-w-5xl mx-auto px-6 py-10">


    {{-- HEADER --}}
    <div class="bg-gradient-to-r from-blue-700 to-cyan-500 rounded-3xl shadow-xl p-8 text-white mb-8">


        <h1 class="text-3xl font-bold">

            🔔 Mes notifications

        </h1>


        <p class="mt-2 text-blue-100">

            Retrouvez toutes les informations concernant vos réservations.

        </p>


    </div>





    {{-- MESSAGE SUCCESS --}}
    @if(session('success'))

        <div class="bg-green-100 text-green-700 p-4 rounded-xl mb-6">

            {{ session('success') }}

        </div>

    @endif





    {{-- LISTE NOTIFICATIONS --}}
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">


        @forelse($notifications as $notification)


            <form
                action="{{ route('notification.lire',$notification->id) }}"
                method="POST">


                @csrf


                <button
                    type="submit"
                    class="w-full text-left p-6 border-b hover:bg-blue-50 transition flex justify-between items-start">


                    <div>


                        <div class="flex items-center gap-3">


                            <h2 class="font-bold text-lg text-gray-800">

                                {{ $notification->titre }}

                            </h2>



                            @if(!$notification->lu)

                                <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full">

                                    Nouveau

                                </span>

                            @else

                                <span class="bg-gray-100 text-gray-500 text-xs px-3 py-1 rounded-full">

                                    Lu

                                </span>

                            @endif


                        </div>



                        <p class="mt-2 text-gray-600">

                            {{ $notification->message }}

                        </p>



                        <p class="mt-3 text-sm text-gray-400">

                            {{ $notification->created_at->format('d/m/Y H:i') }}

                        </p>


                    </div>



                    <div>


                        <i class="fa-solid fa-chevron-right text-blue-600"></i>


                    </div>



                </button>


            </form>


        @empty


            <div class="text-center py-16">


                <i class="fa-solid fa-bell-slash text-5xl text-gray-300"></i>


                <p class="mt-4 text-gray-500">

                    Aucune notification.

                </p>


            </div>


        @endforelse



        <div class="p-6">

            {{ $notifications->links() }}

        </div>


    </div>


</div>


@endsection