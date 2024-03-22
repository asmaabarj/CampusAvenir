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
        <div class="py-4 px-10">
            <form action="" method=""  class="grid grid-cols-1  gap-8">
                <div class="mb-2">
                    <label  class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
                    <input type="text" name="titre" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
                    <label  class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                    <input type="file" name="photo"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
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
