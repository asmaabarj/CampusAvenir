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

<body>
    @include('components.navbar')
    @include('components.Alert')
    <main class="bg-gray-50">

        <section class=" mt-20 py-20 ">
            <div class="px-4 mx-auto max-w-6xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <h1 class="text-4xl font-bold text-black sm:text-5xl lg:text-6xl">
                            Partager votre Experiences, avec
                            <div class="relative inline-flex">
                                <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-blue-400"></span>
                                <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-6xl">CampusAvenir.
                                </h1>
                            </div>
                        </h1>

                        <p class="mt-8 text-base text-black sm:text-xl">Vous pourriez partager vos questions et vos
                            expériences relatives à votre établissement avec d'autres afin de bénéficier d'une diversité
                            de perspectives et d'enrichir votre compréhension collective.</p>

                        <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                            <button onclick="toggleModal('ajoutModal')"
                                class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-500 hover:bg-blue-600 rounded-full focus:bg-blue-600">
                                Commencer </button>
                        </div>
                    </div>
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
                                <label for="description"
                                    class="block text-black text-sm font-bold mb-2">Description:</label>
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
                    <div>
                        <img class="" src="{{ asset('storage/images/sharePosts.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <div class=" sm:px-6 px-4 py-10  mt-12 font-[sans-serif]">
            <div class="max-w-3xl mx-auto">
                <div>
                    <h2 class="text-3xl font-extrabold text-[#333] inline-block">LES DERNIÈRES PUBLICATIONS</h2>
                    <p class="text-gray-400 text-sm mt-4">N'hésitez pas à explorer les publications disponibles pour
                        découvrir une gamme variée de réponses qui pourraient éclairer vos questions.</p>
                </div>
                <hr class="my-10" />
                <div class="grid gap-16">

                    @foreach ($postes as $poste)
                        <div class="rounded border p-4 overflow-hidden group">
                            <div>
                                <p class="text-gray-600 text-sm">{{ $poste->contenue }}</p>
                                @if ($poste->photo != null)
                                    <img src="{{ asset('storage/' . $poste->photo) }}"
                                        class="h-64 my-4 object-contain left-0 px-4 py" />
                                @endif
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
                                    <p>5</p>
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
                                                <div id="comment-container-{{ $poste->id }}"
                                                    data-poste-id="{{ $poste->id }}">
                                                </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex justify-center">
                        <div class="d-flex justify-content-center my-3">
                            <ul class="pagination flex justify-content-center border-2 rounded-md divide-x-2 ">
                                @if ($postes->onFirstPage())
                                    <li
                                        class=" text-base font-bold text-blue-300 text-center min-w-[110px] px-2 py-2 cursor-not-allowed">
                                        Précédent
                                    </li>
                                @else
                                    <li
                                        class=" hover:bg-gray-200 cursor-pointer text-center text-base font-bold text-blue-500 min-w-[110px] px-2 py-2">
                                        <a href="{{ $postes->previousPageUrl() }}">
                                            Précédent
                                        </a>
                                    </li>
                                @endif

                                @if ($postes->hasMorePages())
                                    <li
                                        class=" hover:bg-gray-200 cursor-pointer text-center text-base font-bold text-blue-500 min-w-[110px] px-2 py-2">
                                        <a href="{{ $postes->nextPageUrl() }}">Suivant</a>
                                    </li>
                                @else
                                    <li
                                        class="  text-base font-bold text-center   text-blue-300 min-w-[110px] px-2 py-2 cursor-not-allowed">
                                        Suivant
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>





        <script>
            $(document).ready(function() {
                $('.commentForm').each(function() {
                    const postId = $(this).data("publication-id");
                    getAllComments(postId);
                });

                function getAllComments(postId) {
                    $('#comment-container-' + postId).empty();
                    $.ajax({
                        url: '/comments/' + postId,
                        type: 'GET',
                        success: function(response) {
                            if (response.success) {
                                response.comments.forEach(function(comment) {
                                    var createdAt = new Date(comment.created_at);
                                    var formattedDate = createdAt.toLocaleString('fr-FR', {
                                        year: 'numeric',
                                        month: '2-digit',
                                        day: '2-digit',
                                        hour: '2-digit',
                                        minute: '2-digit'
                                    });
                                    var commentHTML = `
                                        <div  class="px-4 py-2 pt-4 flex gap-2" id="comment-${comment.id}">
                                            <img src="storage/${comment.user.photo}" class="w-9 h-9 rounded-full" />
                                            <div>
                                                <div class="flex gap-3 items-center">
                                                    <h4 class="text-sm font-[600]">
                                                        ${comment.user.nom} ${comment.user.prenom}
                                                    </h4>`;
                                    var authId = {{ auth()->id() }};
                                    if (authId === comment.user.id) {
                                        commentHTML +=
                                            `<button class="bx bxs-trash cursor-pointer" onclick="deleteComment(${comment.id})"></button>`;
                                    }
                                    commentHTML += `
                                                </div>
                                                <p class="text-xs text-gray-700">
                                                    ${formattedDate}
                                                </p>
                                            </div>
                                        </div>
                                        <p class="mx-5 text-sm font-light text-gray-700" >
                                            ${comment.contenue}
                                        </p>`;
                                    $('#comment-container-' + postId).append(commentHTML);
                                });
                            } else {
                                console.log("Error retrieving comments:", response.error);
                            }
                        },
                        error: function(xhr) {
                            console.log("Error retrieving comments:", xhr.responseText);
                        }
                    });
                }

                $('.commentForm').submit(function(event) {
                    event.preventDefault();

                    const form = $(this);
                    const postId = form.data("publication-id");
                    const formData = form.serialize();

                    $.ajax({
                        type: "POST",
                        url: "/commentaires/store",
                        data: formData,
                        success: function(data) {
                            if (data.success) {
                                form[0].reset();
                                getAllComments(postId);
                            } else {
                                console.error("Failed to add comment:", data.error);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error adding comment:", error);
                        }
                    });
                });
            });

            function deleteComment(commentId) {
                console.log(commentId);
                if (confirm("Are you sure you want to delete this comment?")) {
                    $.ajax({
                        url: '/comments/' + commentId,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {

                            if (response.success) {
                                $('#comment-' + commentId).remove();
                            } else {
                                console.error("Failed to delete comment:", response.error);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error deleting comment:", error);
                        }
                    });
                }
            }
        </script>

</body>

</html>
