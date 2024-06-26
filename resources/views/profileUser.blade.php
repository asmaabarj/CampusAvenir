<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/addButton.css') }}">

</head>

<body class=" bg-gray-50 ">
    @include('components.navbar')
    @include('components.Alert')

    <section class="xl:w-[70%] my-10   grid grid-cols-1 mx-auto gap-8 ">
        <div class="bg-white rounded-md border flex flex-col  overflow-hidden">
            <img src="https://t4.ftcdn.net/jpg/06/63/88/99/360_F_663889960_eEL2Rh2aWDTreWd9oKsjzLhmf8uXppAW.jpg" class=" w-full  h-44">
            <div class="flex justify-evenly pr-2">
                <div class="flex mb-10">
                    <img src="{{ asset('storage/' . $user->photo) }}"
                        class="w-44 h-44 border-4 border-white rounded-full ml-10 -mt-12 shadow-xl inline-block" />
                    <div class="p-4 text-left">
                        <h4 class="text-lg font-extrabold">{{ $user->nom }} {{ $user->prenom }}</h4>
                        <p class="text-xs  text-gray-700 font-semibold mt-1">{{ $user->email }}</p>
                        <p class="text-xs font-semibold mt-2">{{ $user->tele }}</p>
                        <p class="text-xs font-semibold">{{ $user->adresse }}</p>
                    </div>
                </div>
                <div class="flex gap-5">
                    <button onclick="toggleModal('updateProfil')"
                        class="bg-gray-200 mt-10 h-[30%] px-5 rounded font-medium  bx bx-edit"> Modifier le
                        profil</button>
                    <button onclick="toggleModal('changePassword')"
                        class="bg-gray-200 mt-10 h-[30%] px-5 rounded font-medium  bx bx-edit"> changer le mot de
                        passe</button>
                </div>
            </div>
        </div>
        <div class="hidden h-screen  flex bg-black/70 fixed top-0 right-0 left-0 z-50 justify-center  hidden items-center w-full"
            id="updateProfil">
            <form action="/update-profile" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 relative w-[50%] h-[80%] p-8 relative rounded shadow-md overflow-y-scroll bg-white gap-6">
                @csrf
                <div class="mt-5">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                    <input type="file" name="photo" id="fileInput"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Prénom:</label>
                    <input type="text" name="prenom" value="{{ $user->prenom }}"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                    <input type="text" name="nom" value="{{ $user->nom }}"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" value="{{ $user->email }}"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Téléphone:</label>
                    <input type="text" name="tele" value="{{ $user->tele }}"
                        class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Adresse:</label>
                    <input type="text" name="adresse" value="{{ $user->adresse }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block te/commentaires/storext-gray-700 text-sm font-bold mb-2">Date de
                        naissance:</label>
                    <input type="date" name="date_naissance" value="{{ $user->date_naissance }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Niveau scolaire:</label>
                    <input type="text" name="niveau" value="{{ $user->niveau }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Établissement:</label>
                    <input type="text" name="ecole" value="{{ $user->ecole }}"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>


                <div class="mb-2">
                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                        Enregistrer
                    </button>
                    <button onclick="toggleModal('updateProfil')" type="button" name="annuler"
                        class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white ">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

            </form>
        </div>
        <div class="hidden h-screen flex bg-black/70 fixed top-0 right-0 left-0 z-50 justify-center  hidden items-center w-full"
            id="changePassword">
            <form action="'/updatePassword" method="POST" enctype="multipart/form-data"
                class="py-4 px-10 bg-white shadow-md rounded  grid grid-cols-1 relative w-[40%] gap-4">
                @csrf
                <div class="mt-10">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Ancien mot de passe:</label>
                    <input type="password" name="oldpassword" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nouvel mot de passe:</label>
                    <input type="password" name="newpassword" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Confirmer mot de passe:</label>
                    <input type="password" name="confirmpassword" value=""
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600" required>
                </div>

                <div class="mb-2">

                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-500 text-white rounded-md focus:outline-none ">
                        Enregistrer
                    </button>
                    <button onclick="toggleModal('changePassword')" type="button" name="annuler"
                        class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white ">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Fermer le modal</span>
                    </button>
                </div>
            </form>
        </div>
        <button type="button" class="button mt-10 ml-auto " onclick="toggleModal('ajoutModal')">
            <span class="button__text">Poster</span>
            <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor"
                    height="24" fill="none" class="svg">
                    <line y2="19" y1="5" x2="12" x1="12"></line>
                    <line y2="12" y1="12" x2="19" x1="5"></line>
                </svg></span>
        </button>
        <div class="hidden h-screen flex bg-black/70 fixed top-0 right-0 left-0 z-50 justify-center  items-center w-full"
            id="ajoutModal">
            <form action="/posts" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 w-[50%] p-8 relative rounded shadow-md bg-white gap-8">
                @csrf
                <div class="mb-2">
                    <label class="block text-black text-sm font-bold mb-2">Photo:</label>
                    <input type="file" name="photo"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                </div>
                <div class="mb-2">
                    <label for="description" class="block text-black text-sm font-bold mb-2">Description:</label>
                    <textarea id="description" name="description"
                        class="w-full p-4 h-[30vh] border rounded-md focus:outline-none focus:border-blue-600"></textarea>
                </div>

                <div class="mb-2">
                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                        Ajouter
                    </button>
                    <button onclick="toggleModal('ajoutModal')" type="button" name="annuler"
                        class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white ">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </section>



    <div class="font-[sans-serif] text-[#333] mb-20 w-full xl:w-[50%] mx-auto">
        <div class="max-w-5xl mx-auto pb-8">
            <div>
                <h2 class="text-3xl font-extrabold mt-12 text-[#333] inline-block">LES DERNIÈRES PUBLICATIONS</h2>
                <p class="text-gray-400 text-sm mt-4"></p>
            </div>
            <hr class="my-10" />
            <div class="grid grid-cols-1 xl:mx-0 md:mx-8  gap-x-8 gap-y-16 max-md:justify-center mt-12">
                @foreach ($postes as $poste)
                    <div class="grid grid-cols-1 border bg-white relative p-2 rounded-md">
                        <div class=" shadow-sm">
                            <div class="my-4">
                                <p class="text-gray-600 mt-10 text-sm">{{ $poste->contenue }}</p>
                                @if ($poste->photo != null)
                                    <img src="{{ asset('storage/' . $poste->photo) }}"
                                        class="h-64 my-4 object-contain left-0 px-4 py" />
                                @endif
                            </div>
                            <div class="pr-4 absolute right-0 top-0 text-right py-2">
                                <div class="relative group">
                                    <i class='bx bx-dots-horizontal-rounded text-2xl'></i>
                                    <div
                                        class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px] absolute -right-6">
                                        <button onclick="toggleModal('deleteModal{{ $poste->id }}')"
                                            class="text-sm text-gray-500 hover:text-black">
                                            Supprimer
                                        </button>
                                        <hr class="border-b-0 my-4" />
                                        <button onclick="toggleModal('updateModal{{ $poste->id }}')"
                                            class="text-sm text-gray-500 hover:text-black">
                                            Modifier
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div id="deleteModal{{ $poste->id }}"
                                class="hidden h-screen  flex bg-black/70 fixed top-0 right-0 left-0 z-50 justify-center items-center w-full  ">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <div
                                        class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <button onclick="toggleModal('deleteModal{{ $poste->id }}')"
                                            type="button"
                                            class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="deleteModal{{ $poste->id }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Êtes-vous sûr de vouloir
                                            supprimer
                                            cet élément</p>
                                        <div class="flex justify-center items-center space-x-4">
                                            <button onclick="toggleModal('deleteModal{{ $poste->id }}')"
                                                data-modal-toggle="deleteModal{{ $poste->id }}" type="button"
                                                class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                Non, annuler
                                            </button>
                                            <form action="/posts/{{ $poste->id }}" method="post">
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
                            <div id='updateModal{{ $poste->id }}'
                                class="hidden h-screen flex bg-black/70 fixed top-0 right-0 left-0 z-50 justify-center items-center w-full">
                                <form action="/posts/{{ $poste->id }}" method="POST"
                                    enctype="multipart/form-data"
                                    class="grid grid-cols-1 w-[50%] p-8 relative rounded shadow-md bg-white gap-8">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-2">
                                        <label class="block text-black text-sm font-bold mb-2">Photo:</label>
                                        <input type="file" name="photo" value="{{ $poste->photo }}"
                                            class="w-full px-4 py-3 border rounded-md focus:outline-none focus:border-blue-600">
                                        <img src="{{ asset('storage/' . $poste->photo) }}" alt="Post photo"
                                            class="w-20 h-20 mt-2">
                                    </div>

                                    <div class="mb-2">
                                        <label for="description"
                                            class="block text-black text-sm font-bold mb-2">Description:</label>
                                        <textarea id="description" name="description"
                                            class="w-full p-4 h-[30vh] border rounded-md focus:outline-none focus:border-blue-600">{{ $poste->contenue }}</textarea>
                                    </div>

                                    <div class="mb-2">
                                        <button type="submit"
                                            class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none">
                                            Enregistrer
                                        </button>
                                        <button onclick="toggleModal('updateModal{{ $poste->id }}')"
                                            type="button"
                                            class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="updateModal{{ $poste->id }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="flex justify-between  mt-8 items-center">
                            <div class="flex items-center gap-3">
                                <img src='{{ asset('storage/' . $poste->user->photo) }}'
                                    class="w-10 h-10 rounded-full" />
                                <div>
                                    <p class="text-sm text-gray-500">{{ $poste->user->nom }}
                                        {{ $poste->user->prenom }}</p>
                                    <p class="text-xs block text-gray-400 ">
                                        {{ Carbon\Carbon::parse($poste->created_at)->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div class="text-blue-500 mr-10 gap-2 flex mt-2 items-center">
                                <p> {{ $poste->commentaires_count }}</p>
                                <button onclick="toggleModal('comments{{ $poste->id }}')"
                                    class='bx bx-message-rounded 5 text-2xl '></button>
                                <div id='comments{{ $poste->id }}'
                                    class=" hidden fixed top-0 bottom-0 left-0 right-0 bg-black/40 z-40">
                                    <div class="w-[70%] h-screen cursor-pointer"
                                        onclick="toggleModal('comments{{ $poste->id }}')">
                                    </div>
                                    <nav
                                        class="  bg-[#FFFFFF]  h-screen z-50 fixed top-0 right-0 w-[30%] px-4 font-[sans-serif] overflow-y-auto">
                                        <div class="pt-28 pb-5 ">
                                            <form class="commentForm" data-publication-id="{{ $poste->id }}"
                                                class="flex items-center mb-4 border rounded">
                                                @csrf
                                                <input required placeholder="Ajouter un commentaire..."
                                                    type="text" name="contenue"
                                                    class="h-20 w-full border rounded  bg-transparent focus:outline-none pl-2 text-black" />
                                                <input type="hidden" name="publication_id"
                                                    value="{{ $poste->id }}">
                                                <button type="submit"
                                                    class="flex items-center ml-2 text-sm bg-gray-100 my-2 shadow-md  px-4 py-2 mb-6 rounded-full">
                                                    Envoyer
                                                </button>
                                            </form>
                                            <div id="comment-container-{{ $poste->id }}" data-poste-id="{{ $poste->id }}">
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    @include('components.minifooter')

    <script src="{{asset('js/commentsProfile.js')}}"></script>

</body>

</html>
