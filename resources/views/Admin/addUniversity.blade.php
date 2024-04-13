<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-[#F7F8FA]">
    @extends('layouts.sidebarAdmin')

    @section('addForm')
    @include('components.Alert')
        <div class="py-4 px-10">
            <form action="/university" method="POST" >
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-4">
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                    <input type="text" name="nom" value=""
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Domaine:</label>
                    <select name="domaine_id" class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                        <option >Sélectionner un domaine</option>
                        @foreach ($domaines as $domaine)
                            <option value="{{ $domaine->id }}">{{ $domaine->titre }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Formation:</label>
                    <textarea type="text" name="formation" value=""
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600">
                        </textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Étudiants:</label>
                    <input type="number" name="etudiants" value=""
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Condition d'accès:</label>
                    <textarea type="text" name="conditions" value=""
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600">
                        </textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">concours:</label>
                    <select name="concours"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                        <option value=""></option>
                        <option value="avec">avec</option>
                        <option value="sans">sans</option>

                    </select>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Filières:</label>
                    <textarea type="text" name="filieres" value="" multiple
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600">
                        </textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
                    <select name="type"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                        <option value=""></option>
                        <option value="prive">privé</option>
                        <option value="publique">Publique</option>

                    </select>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                    <input type="file" name="photo"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea name="description" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600"
                    ></textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">le lien officiel:</label>
                    <input type="url" name="lien"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600"
                    ></input>
                </div>
            </div>
                <div class="mt-8 mb-2">
                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                        Confirmer
                    </button>
                </div>
            </form>  
        </div>
    @endsection

</body>

</html>
