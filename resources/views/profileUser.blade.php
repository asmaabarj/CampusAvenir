<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    @include('components.navbar')
    @include('components.Alert')

    <section class="xl:w-[70%] my-10    grid grid-cols-1 mx-auto gap-8 ">
        <div class="bg-white rounded-md border flex flex-col  overflow-hidden">
            <div class="bg-blue-100 w-full  h-44"></div>
            <div class="flex justify-evenly">
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
        <div class="hidden h-screen flex bg-black/70 fixed top-0 right-0 left-0 z-50 justify-center  hidden items-center w-full"
        id="updateProfil">
        <form action="/update-profile" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 relative w-[50%] h-[80%] p-8 relative rounded shadow-md overflow-y-scroll bg-white gap-6">
            @csrf
            <div class="mt-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
                <input type="file" name="photo" id="fileInput"
                    class="w-full px-4 py-4 border rounded-md focus:outline-none focus:border-blue-600">
            </div>
            <div >
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
                <label class="block text-gray-700 text-sm font-bold mb-2">Date de naissance:</label>
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
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Fermer le modal</span>
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
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Fermer le modal</span>
                </button>
            </div>
        </form>
    </div>
    </section>

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
                class="w-full px-4 py-14 border rounded-md focus:outline-none focus:border-blue-600"></textarea>
        </div>

        <div class="mb-2">
            <button type="submit"
                class="px-4 py-2 bg-gradient-to-r from-blue-300 to-blue-800 text-white rounded-md focus:outline-none ">
                Ajouter
            </button>
            <button onclick="toggleModal('ajoutModal')" type="button" name="annuler"
                class="bx bx-x text-black absolute text-2xl top-2 right-2   text-white rounded-md focus:outline-none ">
            </button>
        </div>
    </form>
</div>

<div class="font-[sans-serif] text-[#333] w-full xl:w-[50%] mx-auto">
    <div class="max-w-5xl mx-auto pb-8">
        <div class="grid grid-cols-1 xl:mx-0 md:mx-8  gap-x-8 gap-y-16 max-md:justify-center mt-12">
            @foreach ($postes as $poste)
                <div class="grid grid-cols-1 border relative rounded-md">
                    <div class="flex bg-[#f7f9fa] justify-between shadow-sm">
                        <div class="p-4 flex gap-2">
                            <img src="{{ asset('storage/' . $poste->user->photo) }}"
                                class="w-11 h-11 rounded-full" />
                            <div>
                                <h4 class="text-base font-bold">
                                    {{ $poste->user->nom }} {{ $poste->user->prenom }}
                                </h4>
                                <p class="text-xs mt-1 text-gray-600">
                                    {{ Carbon\Carbon::parse($poste->created_at)->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        @include('components.PostModals')
                        <div class="pr-6 text-right py-4">
                            <div class="relative group">
                                <i class='bx bx-dots-horizontal-rounded text-2xl'></i>
                                <div class="bg-white z-50 group-hover:block hover:block hidden text-center shadow-lg py-4 px-4 sm:min-w-[100px] absolute -right-6">
                                    <button onclick="toggleModal('deleteModal{{ $poste->id }}')"
                                        class="text-sm text-gray-500 hover:text-black">
                                        Supprimer
                                    </button>
                                    <hr class="border-b-0 my-4" />
                                    <button onclick="toggleModal('updateModal')"
                                        class="text-sm text-gray-500 hover:text-black">
                                        Modifier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden   max-md:max-w-[300px]">
                        <div class="p-6">
                            <p class="text-[15px] leading-relaxed">{{ $poste->contenue }}</p>
                        </div>
                        @if ($poste->photo != null)
                            <img src="{{ asset('storage/' . $poste->photo) }}" class=" object-contain px-6" />
                        @endif
                    </div>
                    <div class=" mt-4">
                        

                        {{-- <div id="comments-{{ $poste->id }}" class="comments-section bg-[#f7f9fa] overflow-auto" style="max-height: 350px;">
                            @foreach ($poste->commentaires as $commentaire)
                                <div class="px-4 py-2 pt-4 flex gap-2">
                                    <img src="{{ asset('storage/' . $commentaire->user->photo) }}"
                                        class="w-9 h-9 rounded-full" />
                                    <div>
                                        <h4 class="text-sm  font-[600]">
                                            {{ $commentaire->user->nom }} {{ $commentaire->user->prenom }}
                                        </h4>
                                        <p class="text-xs text-gray-700">
                                            {{ $commentaire->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                                <p class="mx-5 text-sm font-light text-gray-700">
                                    {{ $commentaire->contenue }}
                                </p>
                            @endforeach
                        </div> --}}

                        <form id="commentForm{{ $poste->id }}" data-publication-id="{{ $poste->id }}"
                            method="POST" class="flex items-center p-5 mx-6 mb-4  border rounded">
                            @csrf
                            <input required placeholder="Ajouter un commentaire..." type="text"
                                name="contenue"
                                class="h-full w-full bg-transparent focus:outline-none pl-2 text-black" />
                            <input type="hidden" name="publication_id" value="{{ $poste->id }}">
                            <button type="submit"
                                class="flex items-center justify-center h-full cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 664 663"
                                    class="h-4 transition-all duration-300">
                                    <path fill="none"
                                        d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888">
                                    </path>
                                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="33.67"
                                        stroke="#6c6c6c"
                                        d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
document.querySelectorAll("form[id^='commentForm']").forEach(function(form) {
    form.addEventListener("submit", function(event) {
        event.preventDefault(); 

        const publicationId = form.getAttribute("data-publication-id");
        const formData = new FormData(form);

        fetch("/commentaires/store", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': form.querySelector("input[name='_token']").value,
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const newCommentElement = createNewCommentElement(data.comment);
                const commentsSection = document.querySelector(`#comments-${publicationId}`);
                commentsSection.appendChild(newCommentElement);

                form.querySelector("input[name='contenue']").value = '';

            } else {
                console.error("Failed to add comment:", data.error);
            }
        })
        .catch(error => {
            console.error("Error adding comment:", error);
        });
    });
});
});


function createNewCommentElement(comment) {
const commentElement = document.createElement('div');
commentElement.classList.add('px-4', 'py-2', 'pt-4', 'flex', 'gap-2');

const imgElement = document.createElement('img');
imgElement.src = `{{ asset('storage/') }}${comment.user.photo}`;
imgElement.classList.add('w-9', 'h-9', 'rounded-full');
commentElement.appendChild(imgElement);

const userDiv = document.createElement('div');
const userNameElement = document.createElement('h4');
userNameElement.classList.add('text-sm', 'font-[600]');
userNameElement.textContent = `${comment.user.nom} ${comment.user.prenom}`;
userDiv.appendChild(userNameElement);

const commentTimeElement = document.createElement('p');
commentTimeElement.classList.add('text-xs', 'text-gray-700');
commentTimeElement.textContent = new Date().toLocaleTimeString(); 
userDiv.appendChild(commentTimeElement);

const commentContentElement = document.createElement('p');
commentContentElement.classList.add('mx-5', 'text-sm', 'font-light', 'text-gray-700');
commentContentElement.textContent = comment.contenue;
commentElement.appendChild(commentContentElement);

commentElement.appendChild(userDiv);

return commentElement;
}

</script>
</body>

</html>
