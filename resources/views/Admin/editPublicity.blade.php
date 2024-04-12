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
    @include('components.Alert')
    @extends('layouts.sidebarAdmin')
    @section('addForm')
        <div class="py-4 px-10">
            <form action="/publicity/{{ $editAnnonce->id }}" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-5">
                @csrf
                @method('PUT')

                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
                    <input type="text" name="titre" value="{{ $editAnnonce->titre }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                    <input type="date" name="date" value="{{ $editAnnonce->date }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Temps:</label>
                    <input type="time" name="temps" value="{{ $editAnnonce->temps }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Lieu:</label>
                    <input type="text" name="lieu" value="{{ $editAnnonce->lieu }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>

                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                    <input type="file" name="picture" value="{{ $editAnnonce->picture }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea id="description" name="description"
                        class="w-full px-4 py-8 border rounded-md focus:outline-none focus:border-blue-600">{{ $editAnnonce->description }}</textarea>
                </div>
                <div class="mb-2">

                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    @endsection
</body>

</html>
