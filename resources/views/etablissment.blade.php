<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="bg-gray-100">
    @include('components.navbar')
    @include('components.Alert')
    <main>
        <section class=" bg-gray-100 lg:py-0">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid items-stretch grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-12 xl:gap-x-24">
                    <div class="h-full  lg:order-2 lg:mt-56">
                        <div class="relative h-full lg:h-auto">
                            <div
                                class="absolute w-full h-full  overflow-hidden bg-gradient-to-r from-blue-950 to-blue-100 top-6 left-6 xl:left-6 lg:top-6 lg:scale-y-105 lg:origin-top">
                                <img class="object-cover object-right w-full h-full scale-150"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/content/2/lines.svg"
                                    alt="" />
                            </div>
                            <div class="relative lg:top-5">
                                <img class="" src="{{ asset('storage/' . $university->photo) }}" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-start xl:pt-48 xl:pb-28">
                        <div>
                            <h2
                                class=" text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">
                                {{ $university->nom }}</h2>
                            <div class="flex  items-center mt-9">
                                <img src="{{ asset('storage/images/check.png') }}" alt="" class="w-10 h-10">
                                <p class="text-xl leading-relaxed text-gray-700 ">{{ $university->etudiants }}+ learners
                                    enrolled</p>
                            </div>
                            <p class="mt-6 text-xl leading-relaxed text-gray-700">Découvrez l'établissement
                                {{ $university->nom }}
                                : excellence académique, soutien personnalisé, et programmes innovants pour préparer
                                votre avenir.</p>
                            <div class="ml-3 flex gap-4 mt-6">
                                <div class=" flex space-x-2">
                                    @php
                                        $averageRating = $university->reviews()->avg('note');
                                        $totalStars = 5;
                                        $filledStars = round($averageRating);
                                    @endphp
                                    @for ($i = 1; $i <= $totalStars; $i++)
                                        @if ($i <= $filledStars)
                                            <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                            </svg>
                                        @else
                                            <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                            </svg>
                                        @endif
                                    @endfor
                                    
                                </div>
                                     ({{ $commentCount }} Commentaires)

                            </div>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center px-6 py-4 mt-12 text-base font-semibold text-white transition-all duration-200 bg-gradient-to-r to-blue-950 from-blue-300 rounded-md  "
                                role="button"> Ajouter aux favoris &emsp; <i class='bx bx-heart'></i></a>
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <div class="font-[sans-serif] text-gray-800 bg-gray-100 px-28 py-12">
            <div class="text-left mb-12">
                <h2 class="text-4xl font-extrabold">La formation</h2>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 max-lg:max-w-2xl mx-auto">
                <div>
                    <p class="mb-4 text-sm">{{ $university->formation }}</p>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0"
                            viewBox="0 0 24 24">
                            <path
                                d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                data-original="#000000"></path>
                        </svg>
                        <h6 class="text-base font-semibold ml-4 ">Filières : <span
                                class="text-gray-700 font-normal  ">{{ $university->filieres }}</span></h6>
                    </div>
                    <a href="{{ $university->lien }}"
                        class='bx bx-link-alt mt-4 text-blue-500 items-center'>{{ $university->lien }}</a>
                </div>
                <div>
                    <p class="mb-4 text-sm">{{ $university->description }}</p>
                </div>
            </div>
        </div>

        <section class="mt-24 bg-gray-100 mx-24 ">
            <h2 class="text-4xl font-extrabold mb-12">Les commentaires</h2>
            <div class="overflow-x-scroll none  scrollbar-hide mb-4 relative px-0.5" style=" scrollbar-width: none;">
                <div class="flex  gap-4">
                    @foreach ($university->comments as $comment)
                        <div>
                            <div class="w-64 ">
                                <div class="bg-gray-50 border-1 border border-gray-200 rounded-lg overflow-hidden mb-4">
                                    <p class="text-gray-600  text-sm p-3 ">{{ $comment->contenue }}</p>
                                    <div class="flex w-full items-center mb-8 border-t-2 border-gray-200 border-dotted">
                                        <img src="{{ asset('storage/' . $comment->user->photo) }}"
                                            class="w-10 h-10 m-4 rounded-full object-cover">
                                        <div>
                                            <h3 class="text-md leading-6 font-semibold text-gray-900">
                                                {{ $comment->user->prenom }} {{ $comment->user->nom }}
                                            </h3>
                                            <p class="text-xs">{{ $comment->user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="mt-6 shadow-md pt-10 bg-white rounded-xl">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">Partagez
                            votre avis</h2>
                        <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-500">Partagez votre avis sur
                            cette établissement. Nous sommes impatients de vous entendre !</p>
                    </div>
                    <div class="px-6 py-12 sm:p-12">
                        <form action="/commentaires/store" method="POST" class="mt-14">
                            @csrf
                            <div class="grid grid-cols-1 gap-x-5 gap-y-4">
                                <div class="sm:col-span-2">
                                    <label for="commentaire"
                                        class="text-base font-medium text-gray-900">Commentaire</label>
                                    <div class="mt-2.5 relative">
                                        <textarea name="contenue" id="commentaire" placeholder="Partagez votre expérience..."
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:border-blue-600 caret-blue-600"
                                            rows="4"></textarea>
                                        <input type="hidden" name="etablissment_id" value="{{ $university->id }}">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <button type="submit"
                                        class="inline-flex items-center justify-center px-4 py-3 mt-2 text-base font-semibold text-white transition-all duration-200 bg-blue-950 border border-transparent rounded-full focus:outline-none hover:bg-blue-700 focus:bg-blue-700">
                                        Envoyer
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="mt-8">
                            <h3 class="text-xl font-semibold text-gray-900">Partagez votre avis en attribuant une note
                                à cet établissement </h3>
                            <form id="RatingForm" class="max-w-xs  mt-8">
                                @csrf
                                <input type="hidden" name="etablissment_id" value="{{ $university->id }}"
                                    class="hidden">
                                <label for="rating" class="block mb-2 font-semibold">Notez cet établissement
                                    :</label>
                                <div class="flex gap-2">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <button type="button"
                                            onclick="document.getElementById('rating').value = '{{ $i }}'"
                                            class="rounded-full px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-1  focus:ring-blue-500">
                                            {{ $i }}
                                        </button>
                                    @endfor
                                </div>
                                <input type="hidden" id="rating" name="rating" required>
                                <button type="submit"
                                    class="mt-4  px-4 py-3 bg-blue-950 text-white rounded-full font-semibold hover:bg-blue-700 focus:outline-none focus:bg-blue-600">
                                    Soumettre la note
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        
    </main>
    @include('components.minifooter')

    <script>
        $('#RatingForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: "/ratings/store",
                data: formData,
                success: function(data) {
                    alert('Merci Pour votre Note!')
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    </script>

    