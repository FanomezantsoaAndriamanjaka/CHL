@extends('admin.layouts.app')

@section('content')

<div class="space-y-8">

    {{-- HEADER --}}
    <div class="bg-gradient-to-r from-blue-700 to-cyan-600 rounded-3xl shadow-xl p-8 text-white">

        <h1 class="text-3xl font-bold">
            🔔 Notifications
        </h1>

        <p class="mt-3 text-blue-100">
            Toutes les notifications destinées à l'administration.
        </p>

    </div>



    {{-- MESSAGE SUCCESS --}}
    @if(session('success'))

        <div class="bg-green-100 text-green-700 p-4 rounded-xl">
            {{ session('success') }}
        </div>

    @endif

    <div class="flex justify-end mb-6">

        <form
            action="{{ route('admin.notifications.supprimerLues') }}"
            method="POST">

            @csrf
            @method('DELETE')

            <button
                type="submit"
                onclick="return confirm('Supprimer toutes les notifications lues ?')"
                class="bg-red-600 hover:bg-red-700 text-white px-5 py-3 rounded-xl shadow transition">

                <i class="fa-solid fa-trash-can mr-2"></i>

                Supprimer toutes les notifications lues

            </button>

        </form>

    </div>


    {{-- LISTE --}}
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        @forelse($notifications as $notification)

            <div class="border-b last:border-b-0 p-6 flex justify-between items-start">

                <div class="flex-1">

                    <div class="flex items-center gap-3">

                        <h2 class="font-bold text-lg">
                            {{ $notification->titre }}
                        </h2>

                        @if($notification->lu)

                            <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full">
                                Lue
                            </span>

                        @else

                            <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full">
                                Non lue
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



                <div class="flex gap-2">

                {{-- Bouton Lire --}}
                @if(!$notification->lu)

                    <form
                        action="{{ route('admin.notifications.lire', $notification) }}"
                        method="POST">

                        @csrf

                        <button
                            class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">

                            <i class="fa-solid fa-check"></i>

                        </button>

                    </form>

                @endif


                {{-- Bouton Supprimer --}}
                <form action="{{ route('admin.notifications.supprimer',$notification->id) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        onclick="return confirm('Voulez-vous supprimer cette notification ?')"
                        class="w-10 h-10 rounded-lg bg-red-600 hover:bg-red-700 text-white flex items-center justify-center transition">

                        <i class="fa-solid fa-trash"></i>

                    </button>

                </form>

                </div>

            </div>

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