<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-[#F7F8FA]">

    @include('layouts.sidebarAdmin')
    @include('components.Alert')

    <div class="xl:w-[70%] xl:ml-auto xl:mr-20 mx-2 shadow-md overflow-auto">
        <div class=" shadow-md sm:rounded-lg bg-white p-8">
            <form action="/university/{{ $editEtablissment->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-4">

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                        <input type="text" name="nom" value="{{ $editEtablissment->nom }}"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Domaine:</label>
                        <select name="domaine_id" class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                            <option value="">Sélectionner un domaine</option>
                            @foreach($domaines as $domaine)
                            <option value="{{ $domaine->id }}" {{ $editEtablissment->domaine_id == $domaine->id ? 'selected' : '' }}>
                                {{ $domaine->titre }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Formation:</label>
                        <textarea name="formation"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600">{{ $editEtablissment->formation }}</textarea>
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Étudiants:</label>
                        <input type="number" name="etudiants" value="{{ $editEtablissment->etudiants }}"
                            class="w-full px-4 py-5 border rounded-md focus:outline-none focus:border-blue-600">
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Conditions d'accès:</label>
                        <textarea name="conditions"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600">{{ $editEtablissment->conditions }}</textarea>
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Concours:</label>
                        <select name="concours"
                            class="w-full px-4 py-5 border rounded-md focus:outline-none focus:border-blue-600">
                            <option value="avec" @if($editEtablissment->concours == 'avec') selected @endif>avec</option>
                            <option value="sans" @if($editEtablissment->concours == 'sans') selected @endif>sans</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Filières:</label>
                        <textarea name="filieres"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600">{{ $editEtablissment->filieres }}</textarea>
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
                        <select name="type"
                            class="w-full px-4 py-5 border rounded-md focus:outline-none focus:border-blue-600">
                            <option value="privé" @if($editEtablissment->type == 'privé') selected @endif>privé</option>
                            <option value="publique" @if($editEtablissment->type == 'publique') selected @endif>publique</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                        <input type="file" name="photo"
                            class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                        @if ($editEtablissment->photo)
                            <img src="{{ asset('storage/' . $editEtablissment->photo) }}" alt="Current photo" class="mt-2 w-20 h-20 rounded-md">
                        @endif
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                        <textarea name="description"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600">{{ $editEtablissment->description }}</textarea>
                    </div>

                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Lien officiel:</label>
                        <input type="url" name="lien" value="{{ $editEtablissment->lien }}"
                            class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                    </div>

                </div>

                <div class="mt-8 mb-2">
                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
