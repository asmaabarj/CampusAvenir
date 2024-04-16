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
    @include('components.Alert')
    @section('addForm')
        <div class="py-4 px-10">
            <form action="/concour" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 lg:grid-cols-2  gap-8">
                @csrf
                <div class="mb-2">
                    <label for="titre" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
                    <input type="text" id="titre" name="titre" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                    <input type="datetime" id="date" name="date" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Établissement:</label>
                    <select name="etablissment"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                        @foreach ($etablissments as $etablissment)
                            <option value="{{ $etablissment->id }}">{{ $etablissment->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="picture" class="block text-gray-700 text-sm font-bold mb-2">pdf:</label>
                    <input type="file" name="pdf"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
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
        <div class="  shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between bg-white ">
                <table class="w-full text-sm text-left  text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                        <tr>
                            <th class="px-6 text-left py-3 ">
                                Concours
                            </th>
                            <th class="px-6  text-left py-3">
                                Titre
                            </th>
                            <th class="px-6  text-left py-3">
                                Établissement
                            </th>
                            <th class="px-6  text-left py-3">
                                Date
                            </th>
                            <th class="px-6 text-right py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($concours as $concour)
                            <tr class="bg-white border-b hover:bg-gray-50 ">
                                <td class="px-6 text-left py-4">
                                    <i class='bx bxs-file-pdf text-4xl'></i>
                                </td>
                                <td class="px-6 text-left py-4">
                                    {{ $concour->titre }}
                                </td>
                                <td class="px-6 text-left py-4">
                                    {{ $concour->etablissment->nom }}
                                </td>
                                <td class="px-6 text-left py-4">
                                    {{ $concour->date }}
                                </td>
                                <td class="pr-10 text-right  py-4">
                                    <div class="relative  group ">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                        <div
                                            class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px]  absolute -right-6">
                                            <form action="/concour/{{ $concour->id }}">
                                                <button class="text-sm  text-gray-500 hover:text-black">
                                                    Editer</button>
                                            </form>
                                            <hr class="border-b-0 my-4" />
                                            <button onclick="toggleModal('deleteModal{{ $concour->id }}')"
                                                class="text-sm  text-gray-500 hover:text-black">
                                                Supprimer
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div id="deleteModal{{ $concour->id }}"
                                class="hidden h-screen  flex bg-black/70 fixed top-0 right-0 left-0 z-50 justify-center items-center w-full  ">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <div
                                        class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <button onclick="toggleModal('deleteModal{{ $concour->id }}')" type="button"
                                            class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="deleteModal{{ $concour->id }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Êtes-vous sûr de vouloir supprimer
                                            cet élément</p>
                                        <div class="flex justify-center items-center space-x-4">
                                            <button onclick="toggleModal('deleteModal{{ $concour->id }}')"
                                                data-modal-toggle="deleteModal{{ $concour->id }}" type="button"
                                                class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                Non, annuler
                                            </button>
                                            <form action="/concour/{{ $concour->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                    Oui, je suis sûr
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endsection
</body>

</html>
