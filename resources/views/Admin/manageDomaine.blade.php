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
    @include('layouts.sidebarAdmin')
    <div class="xl:w-[69%] xl:ml-auto xl:mr-24 mx-2 shadow-md auverflow-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between bg-white ">
                <table class="w-full text-sm text-left  text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                        <tr>
                            <th class="px-6 text-left py-3">
                                Domaine
                            </th>
                            <th class="px-6  text-center py-3">
                                Titre
                            </th>
                            <th class="px-6 text-center py-3">
                                Créé à
                            </th>
                            <th class="px-6 text-right py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b hover:bg-gray-50 ">
                            <th 
                                class="items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                                <img class="w-11 h-11 rounded" src='https://readymadeui.com/profile_4.webp'>
                            </th>
                            <td class="px-6 text-center py-4">
                                Gestion
                            </td>
                            <td class="px-6 text-center py-4">
                                2024-09-11
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
                        <tr
                            class="bg-white border-b hover:bg-gray-50 ">
                            <th 
                                class="items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                                <img class="w-11 h-11 rounded" src='https://readymadeui.com/profile_2.webp'>
                            </th>
                            <td class="px-6 text-center py-4">
                                Informatique
                            </td>
                            <td class="px-6 text-center py-4 whitespace-nowrap">
                                2024-12-12
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
                        <tr
                        class="bg-white border-b hover:bg-gray-50 ">
                        <th 
                            class="items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                            <img class="w-11 h-11 rounded" src='https://readymadeui.com/profile_6.webp'>
                        </th>
                        <td class="px-6 text-center py-4">
                            Commerce
                        </td>
                        <td class="px-6 text-center py-4">
                            2024-08-90
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
        </div>
</body>

</html>
