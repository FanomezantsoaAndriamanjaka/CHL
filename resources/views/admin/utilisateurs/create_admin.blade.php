@extends('admin.layouts.app')

@section('content')

<div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-8">

    <h1 class="text-3xl font-bold text-blue-700 mb-8">

        <i class="fa-solid fa-user-shield"></i>

        Ajouter un Administrateur

    </h1>

    <form
        action="{{ route('admin.utilisateurs.admin.store') }}"
        method="POST"
        class="space-y-6">

        @csrf

        <div>

            <label>Nom</label>

            <input
                type="text"
                name="nom"
                class="w-full border rounded-xl p-3">

        </div>

        <div>

            <label>Prénom</label>

            <input
                type="text"
                name="prenom"
                class="w-full border rounded-xl p-3">

        </div>

        <div>

            <label>Email</label>

            <input
                type="email"
                name="email"
                class="w-full border rounded-xl p-3">

        </div>

        <div>

            <label>Téléphone</label>

            <input
                type="text"
                name="telephone"
                class="w-full border rounded-xl p-3">

        </div>

        <div>

            <label>Mot de passe</label>

            <input
                type="password"
                name="password"
                class="w-full border rounded-xl p-3">

        </div>

        <div>

            <label>Confirmation</label>

            <input
                type="password"
                name="password_confirmation"
                class="w-full border rounded-xl p-3">

        </div>

        <button
            class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-xl">

            <i class="fa-solid fa-user-plus"></i>

            Créer l'administrateur

        </button>

    </form>

</div>

@endsection