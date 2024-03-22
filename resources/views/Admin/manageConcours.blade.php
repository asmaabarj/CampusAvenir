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
    <li class="text-xl font-semibold -mb-20 mt-28 text-blue-600 xl:ml-[20vw] ml-6">Ajouter un Concour</li>

    @section('addForm')
        <div class="py-4 px-10">
            <form action="" method="" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-2  gap-8">
                <div class="mb-2">
                    <label for="titre" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
                    <input type="text" id="titre" name="titre" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
                    <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                    <input type="datetime" id="date" name="date" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                </div>
                <div class="mb-2">
                    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Établissement:</label>
                    <select id="category" name="category"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-purple-500" required>
                        <option value="">Select Établissement</option>
                        <option value="">Select Établissement</option>
                        <option value="">Select Établissement</option>

                    </select>
                </div>
                <div class="mb-2">
                    <label for="picture" class="block text-gray-700 text-sm font-bold mb-2">pdf:</label>
                    <input type="file" id="picture" name="picture"
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
    @section('manageForm')
    <li class="text-xl font-semibold mb-4 text-blue-600">Gestion des Exemples des concours disponibles</li>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between bg-white ">
            <table class="w-full text-sm text-left  text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                        <th class="px-6 text-left py-3">
                            Concours
                        </th>
                        <th class="px-6  text-left py-3">
                            Titre
                        </th>
                        <th class="px-6 text-right py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <td class="px-4 text-left py-4">
                            GestionGestionGestion GestionGestion GestionGestionGestion Gestion
                            GestionGestionGestionGestion GestionGestionGestion
                        </td>
                        <td class="px-4 text-left py-4">
                            2024-09-11 GestionGestionGestion Gestion GestionGestionGestion Gestion GestionGestionGestion
                            Gestion GestionGestionGestion Gestion GestionGestionGestion Gestion
                        </td>
                        <td class="pr-10 text-right  py-4">
                            <div class="relative  group ">
                                <i class='bx bx-dots-vertical-rounded'></i>
                                <div
                                    class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px]  absolute -right-6">
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        Editer</button>
                                    <hr class="border-b-0 my-4" />
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <td class="px-4 text-left py-4">
                            GestionGestionGestion GestionGestion GestionGestionGestion Gestion
                            GestionGestionGestionGestion GestionGestionGestion
                        </td>
                        <td class="px-4 text-left py-4">
                            2024-09-11 GestionGestionGestion Gestion GestionGestionGestion Gestion GestionGestionGestion
                            Gestion GestionGestionGestion Gestion GestionGestionGestion Gestion
                        </td>
                        <td class="pr-10 text-right  py-4">
                            <div class="relative  group ">
                                <i class='bx bx-dots-vertical-rounded'></i>
                                <div
                                    class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px]  absolute -right-6">
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        Editer</button>
                                    <hr class="border-b-0 my-4" />
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <td class="px-4 text-left py-4">
                            GestionGestionGestion GestionGestion GestionGestionGestion Gestion
                            GestionGestionGestionGestion GestionGestionGestion
                        </td>
                        <td class="px-4 text-left py-4">
                            2024-09-11 GestionGestionGestion Gestion GestionGestionGestion Gestion GestionGestionGestion
                            Gestion GestionGestionGestion Gestion GestionGestionGestion Gestion
                        </td>
                        <td class="pr-10 text-right  py-4">
                            <div class="relative  group ">
                                <i class='bx bx-dots-vertical-rounded'></i>
                                <div
                                    class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px]  absolute -right-6">
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        Editer</button>
                                    <hr class="border-b-0 my-4" />
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection

</body>

</html>
