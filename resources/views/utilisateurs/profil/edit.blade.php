@extends('layouts.navbars')

@section('content')
<section class="mx-4 mt-6 mb-6 p-2 rounded-2xl bg-white border border-green-400 shadow-xl overflow-hidden">
        <div class="bg-gradient-to-r from-blue-800 via-blue-700 to-cyan-500 p-8 md:p-12 text-white min-h-96">



                {{-- ================= ERREURS ================= --}}

                @if ($errors->any())

                <div class="mb-8 rounded-2xl border border-red-200 bg-red-50 p-5 shadow-lg">

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-2xl">

                            ⚠️

                        </div>


                        <div>

                            <h3 class="font-bold text-red-800 text-lg">

                                Erreur de validation

                            </h3>


                            <ul class="mt-2 text-red-700 list-disc ml-5">

                                @foreach($errors->all() as $error)

                                    <li>

                                        {{ $error }}

                                    </li>

                                @endforeach

                            </ul>


                        </div>

                    </div>

                </div>

                @endif



                {{-- ================= CARTE ================= --}}


                <div class="bg-gradient-to-r rounded-xl from-blue-800 via-blue-700 to-cyan-500 p-8 md:p-12 text-white">
                            <h1 class="text-4xl font-extrabold text-white flex items-center gap-3">
                            <i class="fa fa-pen "></i>

                                Modifier mon profil


                            </h1>


                            <p class="mt-3 text-blue-100 text-lg">

                            Mettez à jour vos informations personnelles.

                            </p>

                </div>

                            

                {{-- PHOTO PROFIL --}}


                <div class="flex flex-col mt-6 items-center mb-10">


                    <div class="relative">


                    @if($user->photo_profil)


                    <img src="{{ asset('storage/'.$user->photo_profil) }}"
                        alt="Photo profil"
                        class="w-44 h-44 rounded-full object-cover border-4 border-blue-500 shadow-2xl">


                    @else


                    <div class="w-44 h-44 rounded-full bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-7xl text-white shadow-2xl">

                    👤

                    </div>


                    @endif


                    <div class="absolute bottom-3 right-3 w-7 h-7 bg-green-500 border-4 border-white rounded-full"></div>


                    </div>



                    <h2 class="mt-5 text-2xl font-bold text-gray-800">

                    {{ $user->nom }} {{ $user->prenom }}

                    </h2>


                    <p class="text-white-500">
                    <i class="fa-solid fa-envelope"></i>
                    {{ $user->email }}

                    </p>


                </div>

        </div>

</section>


<section class="mx-4 p-2 mb-6 rounded-xl bg-white border border-green-400 shadow-xl overflow-hidden">

        <form action="{{ route('profil.update') }}"
            method="POST"
            enctype="multipart/form-data">


                @csrf

                @method('PUT')


  
            <div class=" gap-6 mb-2 bg-white border border-blue-200 shadow-lg">


                        {{-- ================= NOUVELLE PHOTO ================= --}}

                        <div class="mb-10 p-2 mx-2 mt-2 bg-slate-50 border border-slate-200 rounded-2xl">

                            <label class="flex items-center gap-2 text-gray-800 font-bold mb-3">

                                📷 Nouvelle photo de profil

                            </label>


                            <input
                                type="file"
                                name="photo_profil"
                                class="w-full rounded-xl border-gray-300 p-3 bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition">


                            <p class="text-sm text-gray-500 mt-2">

                                Formats acceptés : JPG, JPEG, PNG, WEBP, GIF (maximum 10 MB)

                            </p>

            </div>




                        {{-- ================= INFORMATIONS ================= --}}

                        <h2 class="text-2xl font-bold text-gray-800 pt-9 pb-6 m-auto text-center gap-3">

                            📋 Informations personnelles

                        </h2>



        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-2 bg-white mx-2 p-2">



                {{-- NOM --}}

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">

                    <label class="font-bold text-gray-700">

                        👤 Nom

                    </label>

                    <input
                    type="text"
                    name="nom"
                    value="{{ old('nom',$user->nom) }}"
                    class="w-full mt-3 rounded-xl border-gray-300 p-3 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition">

                </div>




                {{-- PRENOM --}}

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">

                    <label class="font-bold text-gray-700">

                        👤 Prénom

                    </label>

                    <input
                    type="text"
                    name="prenom"
                    value="{{ old('prenom',$user->prenom) }}"
                    class="w-full mt-3 rounded-xl border-gray-300 p-3 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition">

                </div>




                {{-- TELEPHONE --}}

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">

                    <label class="font-bold text-gray-700">

                        📞 Téléphone

                    </label>

                    <input
                    type="text"
                    name="telephone"
                    value="{{ old('telephone',$user->telephone) }}"
                    class="w-full mt-3 rounded-xl border-gray-300 p-3 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition">

                </div>




                {{-- PROFESSION --}}

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">

                    <label class="font-bold text-gray-700">

                        💼 Profession

                    </label>

                    <input
                    type="text"
                    name="profession"
                    value="{{ old('profession',$user->profession) }}"
                    class="w-full mt-3 rounded-xl border-gray-300 p-3 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition">

                </div>




                {{-- ADRESSE --}}

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">

                    <label class="font-bold text-gray-700">

                        🏠 Adresse

                    </label>

                    <input
                    type="text"
                    name="adresse"
                    value="{{ old('adresse',$user->adresse) }}"
                    class="w-full mt-3 rounded-xl border-gray-300 p-3 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition">

                </div>




                {{-- VILLE --}}

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">

                    <label class="font-bold text-gray-700">

                        🏙️ Ville

                    </label>

                    <input
                    type="text"
                    name="ville"
                    value="{{ old('ville',$user->ville) }}"
                    class="w-full mt-3 rounded-xl border-gray-300 p-3 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition">

                </div>




                {{-- LANGUE --}}

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">

                    <label class="font-bold text-gray-700">

                        🗣️ Langue

                    </label>

                    <input
                    type="text"
                    name="langue"
                    value="{{ old('langue',$user->langue) }}"
                    class="w-full mt-3 rounded-xl border-gray-300 p-3 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition">

                </div>




                {{-- PAYS --}}

                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5">

                    <label class="font-bold text-gray-700">

                        🌍 Pays

                    </label>

                    <input
                    type="text"
                    value="{{ $user->pays }}"
                    disabled
                    class="w-full mt-3 rounded-xl border-gray-300 p-3 bg-gray-100 text-gray-500">

                </div>



          




            {{-- ================= BOUTONS ================= --}}

            <div class="mt-10 border-t mb-2 border-gray-200 pt-8">


                <div class="flex flex-col sm:flex-row justify-between items-center gap-5">


                    {{-- MESSAGE --}}

                    <div class="flex items-center gap-4">




                        <div>

                            <h3 class="font-bold text-gray-800 text-lg">
                            💙 CHL

                            </h3>


                            <p class="text-gray-500 text-sm">

                                Vérifiez vos informations avant d'enregistrer.

                            </p>

                        </div>


                    </div>




                    {{-- ACTIONS --}}

                    <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">



                        <a href="{{ route('profil.index') }}"
                        class="px-8 py-3 rounded-xl bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold transition text-center shadow">

                            Annuler

                        </a>




                        <button
                            type="submit"
                            class="px-9 py-3 rounded-xl bg-gradient-to-r 
                            from-blue-700 via-blue-600 to-cyan-500 text-white
                            font-bold shadow-xl hover:shadow-2xl hover:scale-105 transition duration-300">
                                    Enregistrer


                        </button>



                    </div>



                </div>



            </div>

        </div>

    </form>
</section>

</div>

</div>

</div>


@endsection
