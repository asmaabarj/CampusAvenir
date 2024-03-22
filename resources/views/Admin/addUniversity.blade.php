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
            <form action="" method="" class="grid grid-cols-1 lg:grid-cols-2  gap-x-8 gap-y-4">
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                    <input type="text" name="name" value=""
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Domaine:</label>
                    <select name="domaine"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                        <option value="">Select domaine</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Formation:</label>
                    <textarea type="text" name="formation" value=""
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600" required>
                        </textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Étudiants:</label>
                    <input type="number" name="studentsnumber" value=""
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Condition d'accès:</label>
                    <textarea type="text" name="condition" value=""
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600" required>
                        </textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">avec concours:</label>
                    <select name="vecconc"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                        <option value="">Select type</option>
                        <option value="">avec</option>
                        <option value="">sans</option>

                    </select>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Filières:</label>
                    <textarea type="text" name="filiere" value="" multiple
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600" required>
                        </textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Type:</label>
                    <select name="type"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                        <option value="">Select type</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>

                    </select>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                    <input type="file" name="picture"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea name="description" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-600"
                        required></textarea>
                </div>
                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">le lien officiel:</label>
                    <input type="url" name="link"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600"
                        required></input>
                </div>
                
            </form>
            <div class="mt-8 mb-2">
                <button type="submit"
                    class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                    Confirmer
                </button>
            </div>  
        </div>
    @endsection

</body>

</html>
