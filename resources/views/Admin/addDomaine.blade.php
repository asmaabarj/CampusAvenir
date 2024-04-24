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
            <form action="/domaine" method="POST" enctype="multipart/form-data" class="grid grid-cols-1  gap-8">
                @csrf
                <div class="mb-2">
                    <label  class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
                    <input type="text" name="titre" 
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label  class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                    <input type="file" name="photo"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea name="description" class="w-full px-4 h-[20vh] border rounded-md focus:outline-none focus:border-blue-600"
                    ></textarea>
                </div>
                <div class="mb-2">
                    <button type="submit"
                        class="p-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                        Confirmer
                    </button>
                </div>
            </form>
        </div>
    @endsection
</body>

</html>
