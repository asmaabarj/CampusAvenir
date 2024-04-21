<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body class="bg-[#F7F8FA]">
    @include('layouts.sidebarAdmin')

<div class="font-[sans-serif] text-[#333] xl:w-[82%] xl:ml-auto">
    <div class="grid lg:grid-cols-5 sm:grid-cols-2 gap-x-6 gap-y-12 divide-x divide-gray-300">
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-10 inline-block" viewBox="0 0 512 512">
                <path
                    d="M437 268.152h-50.118c-6.821 0-13.425.932-19.71 2.646-12.398-24.372-37.71-41.118-66.877-41.118h-88.59c-29.167 0-54.479 16.746-66.877 41.118a74.798 74.798 0 0 0-19.71-2.646H75c-41.355 0-75 33.645-75 75v80.118c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45v-80.118c0-41.355-33.645-75-75-75zm-300.295 36.53v133.589H45c-8.271 0-15-6.729-15-15v-80.118c0-24.813 20.187-45 45-45h50.118c4.072 0 8.015.553 11.769 1.572a75.372 75.372 0 0 0-.182 4.957zm208.59 133.589h-178.59v-133.59c0-24.813 20.187-45 45-45h88.59c24.813 0 45 20.187 45 45v133.59zm136.705-15c0 8.271-6.729 15-15 15h-91.705v-133.59a75.32 75.32 0 0 0-.182-4.957 44.899 44.899 0 0 1 11.769-1.572H437c24.813 0 45 20.187 45 45v80.119z"
                    data-original="#000000" />
                <path
                    d="M100.06 126.504c-36.749 0-66.646 29.897-66.646 66.646-.001 36.749 29.897 66.646 66.646 66.646 36.748 0 66.646-29.897 66.646-66.646s-29.897-66.646-66.646-66.646zm-.001 103.292c-20.207 0-36.646-16.439-36.646-36.646s16.439-36.646 36.646-36.646 36.646 16.439 36.646 36.646-16.439 36.646-36.646 36.646zM256 43.729c-49.096 0-89.038 39.942-89.038 89.038s39.942 89.038 89.038 89.038 89.038-39.942 89.038-89.038c0-49.095-39.942-89.038-89.038-89.038zm0 148.076c-32.554 0-59.038-26.484-59.038-59.038 0-32.553 26.484-59.038 59.038-59.038s59.038 26.484 59.038 59.038c0 32.554-26.484 59.038-59.038 59.038zm155.94-65.301c-36.748 0-66.646 29.897-66.646 66.646.001 36.749 29.898 66.646 66.646 66.646 36.749 0 66.646-29.897 66.646-66.646s-29.897-66.646-66.646-66.646zm0 103.292c-20.206 0-36.646-16.439-36.646-36.646.001-20.207 16.44-36.646 36.646-36.646 20.207 0 36.646 16.439 36.646 36.646s-16.439 36.646-36.646 36.646z"
                    data-original="#000000" />
            </svg>
            <h3 class="text-3xl font-extrabold text-blue-600 mt-5">{{$usersCount}}</h3>
            <p class="font-semibold mt-3">Utilisateurs</p>
        </div>
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-10 inline-block" viewBox="0 0 24 24">
                <path
                    d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z">
                </path>
            </svg>
            <h3 class="text-3xl font-extrabold text-blue-600 mt-5">{{$domainesCount}}</h3>
            <p class="font-semibold mt-3">Domaines</p>
        </div>
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-10 inline-block" viewBox="0 0 24 24">
                <path d="M21 10h-2V4h1V2H4v2h1v6H3a1 1 0 0 0-1 1v9h20v-9a1 1 0 0 0-1-1zm-7 8v-4h-4v4H7V4h10v14h-3z">
                </path>
                <path d="M9 6h2v2H9zm4 0h2v2h-2zm-4 4h2v2H9zm4 0h2v2h-2z"></path>
            </svg>
            <h3 class="text-3xl font-extrabold text-blue-600 mt-5">{{$universitiesCount}}</h3>
            <p class="font-semibold mt-3">Établissements</p>
        </div>
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-10 inline-block" viewBox="0 0 24 24">
                <path
                    d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM8 16V4h12l.002 12H8z">
                </path>
                <path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8zm11-2h-2v3h-3v2h3v3h2v-3h3V9h-3z"></path>
            </svg>
            <h3 class="text-3xl font-extrabold text-blue-600 mt-5">{{$publicationsCount}}</h3>
            <p class="font-semibold mt-3">Publications</p>
        </div>
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-10 inline-block" viewBox="0 0 24 24">
                <path
                    d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z">
                </path>
            </svg>
            <h3 class="text-3xl font-extrabold text-blue-600 mt-5">{{$concoursCount}}</h3>
            <p class="font-semibold mt-3">Concours</p>
        </div>
    </div>
</div>
<section class="xl:w-[79%] mt-14 mb-8 lg:ml-auto   mx-6  rounded-md">
        <li class="text-xl mb-2 text-blue-600 font-semibold ">Gestion des utilisateurs</li>
        <div class="relative  shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between p-5 bg-white ">
                <table id="datatable" class="w-full  text-sm text-left  text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                        <tr>
                            <th class="px-6 text-left py-3">
                                Utilisateur
                            </th>
                            <th class="px-6 text-left py-3">
                                Email
                            </th>
                            <th class="px-6  text-left py-3">
                                Téléphone
                            </th>
                            <th class="px-6  text-left py-3">
                                Adresse
                            </th>
                            <th class="px-6 text-left py-3">
                                Date de naissance
                            </th>
                            <th class="px-6 text-right py-3">
                                Niveau scolaire
                            </th>
                            <th class="px-6 text-right py-3">
                                Établissement
                            </th>
                            <th class="px-6 text-right py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="bg-white border-b hover:bg-gray-50 ">
                            <td class="px-2 gap-2 text-left flex items-center py-4">
                                <img src="{{ asset('storage/' . $user->photo) }}" class="w-10 h-10 rounded" />
                                <p>{{$user->nom}} {{$user->prenom}}</p>

                            </td>
                            <td class="px-4 text-left py-4">
                                {{$user->email}} 
                            </td>
                            <td class="px-4 text-left py-4">
                                {{$user->tele}} 
                            </td>
                            <td class="px-4 text-left py-4">
                                {{$user->adresse}} 
                            </td>
                            <td class="px-4 text-left py-4">
                                {{$user->date_naissance}} 
                            </td>
                            <td class="px-4 text-left py-4">
                                {{$user->niveau}} 
                            </td>
                            <td class="px-4 text-left py-4">
                                {{$user->ecole}} 
                            </td>
                            <td class="pr-10 text-center  py-4">
                                <div class="relative  group ">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                    <div
                                        class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px]  absolute -right-6">
                                        <button onclick="toggleModal('deleteModal')"
                                            class="text-sm  text-gray-500 hover:text-black">
                                            Banner
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="deleteModal"
                class="hidden h-screen  flex bg-black/70 fixed top-0 right-0 left-0 z-50 justify-center items-center w-full  ">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <button onclick="toggleModal('deleteModal')" type="button"
                            class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="deleteModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        
                        <p class="my-4 text-gray-500 dark:text-gray-300">Êtes-vous sûr de vouloir Banner cet élément</p>
                        <div class="flex justify-center items-center space-x-4">
                            <button onclick="toggleModal('deleteModal')" data-modal-toggle="deleteModal" type="button"
                                class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                Non, annuler
                            </button>
                            <button type="submit"
                                class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                Oui, je suis sûr
                            </button>
                        </div>
                    </div>
                </div>
            </div>
</section>

</body>
<script src="{{asset('js/datatable.js')}}"></script>

</html>
