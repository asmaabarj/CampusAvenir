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
            <form action="" method="" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-2  gap-8">
                <div class="mb-2">
                    <label for="titre" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" id="titre" name="titre" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
                    <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                    <input type="datetime-local" id="date" name="date" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
                    <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                    <input type="text" id="location" name="location" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
                    <label for="numberOfPlaces" class="block text-gray-700 text-sm font-bold mb-2">Number of
                        Places:</label>
                    <input type="number" id="numberOfPlaces" name="numberOfPlaces" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
                    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                    <select id="category" name="category"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>

                    </select>
                </div>
                <div class="mb-2">
                    <label for="picture" class="block text-gray-700 text-sm font-bold mb-2">Picture:</label>
                    <input type="file" id="picture" name="picture"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea id="description" name="description"
                        class="w-full px-4 py-1 border rounded-md focus:outline-none focus:border-purple-500" required></textarea>
                </div>
                <div class="mb-2">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea id="description" name="description"
                        class="w-full px-4 py-1 border rounded-md focus:outline-none focus:border-purple-500" required></textarea>
                </div>
                <div class="mb-2">

                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                        Add Event
                    </button>
                </div>
            </form>
        </div>
    @endsection

</body>

</html>
