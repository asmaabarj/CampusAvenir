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
    <div class="font-[sans-serif] text-[#333] xl:ml-auto xl:w-[82%]">
        <div class="max-w-5xl mx-auto pb-8">
            <div
                class="grid lg:grid-cols-2 md:grid-cols-1  xl:mx-0 md:mx-8 gap-x-8 gap-y-10  max-md:justify-center mt-12">
                <div class="border rounded-md overflow-hidden max-md:max-w-[300px]">
                    <div class="flex justify-between">
                        <div class="p-4 flex gap-2">
                            <div>
                                <h4 class="text-base font-bold">Sophia 2 day ago 2 day ago</h4>
                                <h3 class='bx bx-time-five'> 2024-06-11</h3>
                            </div>
                        </div>
                        <div class="pr-6 text-right  py-4">
                            <div class="relative  group ">
                                <i class='bx bx-dots-horizontal-rounded text-3xl'></i>
                                <div
                                    class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px]  absolute -right-6">
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        modifier</button>
                                    <hr class="border-b-0 my-4" />
                                    <button onclick="toggleModal('deleteModal')"
                                        class="text-sm  text-gray-500 hover:text-black">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="https://readymadeui.com/team-2.webp" class="w-full h-60 object-contain  bg-gray-300" />
                    <div class="p-4">
                        <p class="text-md leading-relaxed">Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur.</p>
                        <h3 class='bx bx-map'> safi morocco</h3>
                    </div>
                </div>
                <div class="border rounded-md overflow-hidden max-md:max-w-[300px]">
                    <div class="flex justify-between">
                        <div class="p-4 flex gap-2">
                            <div>
                                <h4 class="text-base font-bold">Sophia 2 day ago 2 day ago</h4>
                                <h3 class='bx bx-time-five'> 2024-06-11</h3>
                            </div>
                        </div>
                        <div class="pr-6 text-right  py-4">
                            <div class="relative  group ">
                                <i class='bx bx-dots-horizontal-rounded text-3xl'></i>
                                <div
                                    class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px]  absolute -right-6">
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        modifier</button>
                                    <hr class="border-b-0 my-4" />
                                    <button onclick="toggleModal('deleteModal')"
                                        class="text-sm  text-gray-500 hover:text-black">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="https://readymadeui.com/team-2.webp" class="w-full h-60 object-contain  bg-gray-300" />
                    <div class="p-4">
                        <p class="text-md leading-relaxed">Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur.</p>
                        <h3 class='bx bx-map'> safi morocco</h3>
                    </div>
                </div>
                <div class="border rounded-md overflow-hidden max-md:max-w-[300px]">
                    <div class="flex justify-between">
                        <div class="p-4 flex gap-2">
                            <div>
                                <h4 class="text-base font-bold">Sophia 2 day ago 2 day ago</h4>
                                <h3 class='bx bx-time-five'> 2024-06-11</h3>
                            </div>
                        </div>
                        <div class="pr-6 text-right  py-4">
                            <div class="relative  group ">
                                <i class='bx bx-dots-horizontal-rounded text-3xl'></i>
                                <div
                                    class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px]  absolute -right-6">
                                    <button class="text-sm  text-gray-500 hover:text-black">
                                        modifier</button>
                                    <hr class="border-b-0 my-4" />
                                    <button onclick="toggleModal('deleteModal')"
                                        class="text-sm  text-gray-500 hover:text-black">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="https://readymadeui.com/team-2.webp" class="w-full h-60 object-contain  bg-gray-300" />
                    <div class="p-4">
                        <p class="text-md leading-relaxed">Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur Eiusmod commodo aliquip laboris qui anim non voluptate
                            consectetur.</p>
                        <h3 class='bx bx-map'> safi morocco</h3>
                    </div>
                </div>
            </div>
        </div>
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
                <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <p class="mb-4 text-gray-500 dark:text-gray-300">Êtes-vous sûr de vouloir supprimer cet élément</p>
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
    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }
    </script>
</body>

</html>