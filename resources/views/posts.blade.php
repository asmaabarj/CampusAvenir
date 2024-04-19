<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/addButton.css') }}">
</head>

<body>
    @include('components.navbar')
    @include('components.Alert')


    <button type="button" class="button mt-32 ml-48 " onclick="toggleModal('ajoutModal')">
        <span class="button__text">Poster</span>
        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"
                stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24"
                fill="none" class="svg">
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

    <div class="font-[sans-serif] text-[#333] w-full xl:w-[55%] mx-auto">
        <div class="max-w-5xl mx-auto pb-8">
            <div class="grid grid-cols-1 xl:mx-0 md:mx-8  gap-x-8 gap-y-16 max-md:justify-center mt-12">
                @foreach ($postes as $poste)
                    <div class="grid grid-cols-1 border relative rounded-md">
                        <div class="flex bg-[#f7f9fa] justify-between shadow-sm">
                            <div class="p-4 flex gap-2">
                                <img src="{{ asset('storage/images/' . $poste->user->photo) }}"
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
                                    <i class='bx bx-dots-horizontal-rounded text-3xl'></i>
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
                            <div class="p-4">
                                <p class="text-[15px] leading-relaxed">{{ $poste->contenue }}</p>
                            </div>
                            @if ($poste->photo != null)
                                <img src="{{ asset('storage/' . $poste->photo) }}" class="h-64 object-contain left-0 px-4 py" />
                            @endif
                        </div>
                        <div class="bg-[#f7f9fa] mt-4">
                            
    
                            <div id="comments-{{ $poste->id }}" class="comments-section bg-[#f7f9fa] overflow-auto" style="max-height: 350px;">
                                @foreach ($poste->commentaires as $commentaire)
                                    <div class="px-4 py-2 pt-4 flex gap-2">
                                        <img src="{{ asset('storage/images/' . $commentaire->user->photo) }}"
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
                            </div>
    
                            <form id="commentForm{{ $poste->id }}" data-publication-id="{{ $poste->id }}"
                                method="POST" class="flex items-center w-[98%]   justify-between p-4 m-2  bg-[#f7f9fa] border rounded">
                                @csrf
                                <input required placeholder="Ajouter un commentaire..." type="text"
                                    name="contenue"
                                    class="w-52 h-full bg-transparent focus:outline-none pl-2 text-black" />
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
    imgElement.src = `{{ asset('storage/images/') }}${comment.user.photo}`;
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