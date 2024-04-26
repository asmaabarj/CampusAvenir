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

<body class="bg-gray-100">
    @include('components.navbar')
    <main>
        @include('components.Alert')

        <section class="bg-url bg-no-repeat bg-cover flex-col px-6 h-[110vh] items-center justify-center mt-16 flex"
            style="background-image: url('{{ asset('storage/images/herosection2.png') }}');">
            <div class="text-center text-white">
                <h1 class="font-bold text-xl md:text-5xl">Trouvez Votre <span
                        class="bg-blue-500/60 px-3 pb-1 lg:pb-2 rounded">Avenir</span> Dès
                    Aujourd'hui !</h1>
                <p class="font-semibold text-lg md:text-3xl mt-6">Découvrez Le Guide Ultime Des Universités à
                    Travers Le Maroc </p>
            </div>

            @include('components.annonceDetails')
        </section>
        <section id="categories-container" class=" w-[92%]  bg-gray-100   mx-auto">
            <div class="carousel-container relative overflow-hidden">
                <button
                    class="prev-button absolute top-1/2 left-0 transform mt-10 -translate-y-1/2 cursor-pointer p-2 px-3 rounded-full bg-blue-600/60 text-white z-10">
                    <i class='bx bx-chevron-left text-3xl'></i> </button>
                <div class="viewport">
                    <h2 class="text-xl font-bold text-center leading-tight my-8 text-blue-600 sm:text-2xl lg:text-3xl animate-pulse">Actualités</h2>

                    <div class=" categories-container flex space-x-4  transition-transform  duration-300">

                        @foreach ($annonces as $annonce)
                            <div
                                class="category flex-none bg-white shadow-lg w-[44vw] rounded-lg overflow-hidden h-[50vh] transition duration-300">
                                <div class="flex h-full ">
                                    <img src="{{ asset('storage/' . $annonce->photo) }}" alt="Blog Post 1"
                                        class="w-[20vw] h-full object-cover" />
                                    <div class="p-4">
                                        <h3 class="text-xl font-bold text-gray-800">{{ $annonce->titre }}</h3>

                                        <p class="text-sm mt-4">
                                            @if (strlen($annonce->description) > 355)
                                                {{ substr($annonce->description, 0, 355) }}...
                                                <div class="mt-4  inline-block text-blue-600 cursor-pointer text-sm hover:underline"
                                            onclick="toggleModal('pop{{ $annonce->id }}')">Voir Plus
                                            </div>
                                            @else
                                                {{ $annonce->description }}
                                            @endif
                                        </p>
                                        


                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <button
                    class="next-button absolute top-1/2 right-0 mt-10 transform -translate-y-1/2 cursor-pointer  p-2 px-3 rounded-full bg-blue-600/60 text-white z-10">
                    <i class='bx bx-chevron-right text-3xl '></i> </button>
            </div>
        </section>

        </div>

        <div class="font-[sans-serif]  bg-gray-100 ">

            <div class="px-8 pb-12 text-center  text-gray-700  ">
                @if (!auth()->check())
                    <div class="max-w-5xl  mx-auto">
                        <p class="text-lg inline-block mt-28 leading-loose align-text-top mb-4"><span
                                class="font-bold animate-pulse bg-gradient-to-r from-[#69A8F3] via-[#5102F8] to-indigo-400 inline-block text-transparent bg-clip-text">Noter
                                bien : </span> Explorez vos options et
                            prenez
                            des décisions éclairées avec notre guide
                            complet des universités à travers le Maroc. Découvrez les institutions les mieux classées,
                            explorez une variété de programmes et connectez-vous avec des individus partageant les mêmes
                            intérêts pour construire votre avenir académique. Avec des outils de recherche faciles à
                            utiliser, des profils approfondis, et des évaluations et avis de confiance, nous fournissons
                            tout ce dont vous avez besoin pour faire le bon choix pour votre parcours académique.
                            Commencez dès aujourd'hui votre recherche et trouvez la solution qui vous convient
                            parfaitement !</p>
                        <a href="/register"><button type="button"
                                class=" mt-5 px-6 py-3 bg-[#006AE5] hover:bg-blue-700 text-white text-xs  font-medium rounded-sm">COMMENCEZ
                            </button></a>
                    </div>
                @endif

            </div>

        </div>
        </section>
        <section class=" min-h-[50vh] bg-no-repeat px-6 bg-cover items-center justify-center  flex"
            style="background-image: url('{{ asset('storage/images/Rectangle.png') }}');">
            <div class="max-w-6xl md:mx-auto mx-10">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 max-md:max-w-lg mx-auto py-8 gap-8">
                    <div class="py-6 px-4 bg-white group hover:bg-blue-500 rounded text-center hover:text-white">
                        <h3 class="text-xl font-extrabold mb-4">Trouvez votre domaine</h3>
                        <p class="text-sm">Explorez plusieurs domaines pour découvrir vos passions et compétences. Pesez
                            les opportunités et perspectives de carrière avant de prendre une décision éclairée. Trouvez
                            le domaine qui correspond le mieux à vos intérêts et objectifs.</p>
                        <a href="/domaines"
                            class="flex items-center justify-center group-hover:text-white gap-2 mt-2 text-blue-500">
                            <p class=" text-sm font-[500] uppercase">COMMENCER
                            </p>
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                    </div>
                    <div class="py-6 px-4 bg-white group hover:bg-blue-500 rounded text-center hover:text-white">
                        <h3 class="text-xl font-extrabold mb-4">Trouver une université</h3>
                        <p class="text-sm">Trouver la bonne université est crucial pour votre parcours éducatif.
                            Explorez les cours, les programmes et l'atmosphère de chaque établissement pour trouver
                            celui qui correspond le mieux à vos besoins.</p>
                        <a href="/universities"
                            class="flex items-center justify-center group-hover:text-white gap-2 mt-2 text-blue-500">
                            <p class=" text-sm font-[500] uppercase">COMMENCER
                            </p>
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                    </div>
                    <div class="py-6 px-4 bg-white group hover:bg-blue-500 rounded text-center hover:text-white">
                        <h3 class="text-xl font-extrabold mb-4">Trouvez la réponse à votre question
                        </h3>
                        <p class="text-sm">Partagez vos expériences scolaires, discutez avec d'autres membres et
                            posez-leur des questions pour élargir votre compréhension et enrichir votre expérience.</p>
                        <a href="/posts"
                            class="flex items-center justify-center group-hover:text-white gap-2 mt-2 text-blue-500">
                            <p class=" text-sm font-[500] uppercase">COMMENCER
                            </p>
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-6">
            <div class="bg-white font-[sans-serif] my-4">
                <div class="max-w-7xl mx-auto">
                    <div class="text-left">
                        <h2
                            class="text-3xl font-bold text-[#333] inline-block mt-14 relative after:absolute after:h-[8px] mb-2 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-[#006AE5]/75 after:rounded-full">
                            Domaines</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-md:max-w-lg mx-auto">
                        @foreach ($domaines as $domaine)
                            <div class="bg-white   overflow-hidden  relative top-0 ">
                                <img src="{{ asset('storage/' . $domaine->photo) }}" alt="Blog Post 1"
                                    class="w-full h-60  object-cover" />
                                    <div class="p-6">
                                        <h3 class="text-xl font-bold text-[#333]">{{ $domaine->titre }}</h3>
                                        <a href="/domaineUniversities/{{$domaine->id}}" class="flex items-center gap-2 mt-2 text-blue-500">
                                            <p class="text-sm font-[500] uppercase">détails</p>
                                            <i class='bx bx-right-arrow-alt text-xl'></i>
                                        </a>
                                    </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class=" flex justify-center mt-8 ">
                <a href="/domaines"
                    class="px-6  py-2  flex items-center gap-2 justify-center text-blue-500 text-sm tracking-wider font-medium outline-none border-2 border-blue-500  relative active:top-[1px]">
                    <h1>VOIR TOUS</h1>
                    <i class='bx bx-right-arrow-alt text-xl mt-[1px]'></i>
                </a>
            </div>
        </section>

        <section>
            <div class="bg-gray-100 mx-10 gap-10  px-4 py-10 mt-20 font-[sans-serif] ">
                <div class="flex justify-between">
                    <h2 class="text-3xl font-semibold text-[#006AE5]">Universités les mieux classées</h2>
                    <a href="/universities"
                        class="px-4 py-2 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-[#006AE5] hover:bg-blue-700 active:bg-[#006AE5]">Voir
                        Tous</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                    @foreach ($universities as $university)
                    <div class="bg-white border-b-2 border-blue-500 overflow-hidden group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $university->photo) }}" alt="University Photo" class="w-full h-60 object-cover" />
                        </div>
                        <div class="p-3">
                            <div class="flex mt-3 space-x-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $university->ratingUniversity)
                                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                    @else
                                        <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <h3 class="text-xl mt-2 font-bold text-[#333]">{{ $university->nom }}</h3>
                            <div class="mt-6">
                                <a href="/etablissment/{{ $university->id }}" class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class="text-sm font-[500] uppercase">détails</p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach                

                </div>
            </div>
        </section>


        <section>
            <div
                class="grid md:grid-cols-2 px-6 my-20 items-center md:gap-16 gap-6 font-[sans-serif] text-[#333] max-w-6xl max-md:max-w-lg mx-auto">
                <div class="md:h-[320px]">
                    <img src='{{ asset('storage/images/lastsection.png') }}' class="w-full h-full object-cover "
                        alt="Dining Experience" />
                </div>
                <div class="max-md:order-1 max-md:text-center">
                    <h2 class="md:text-4xl text-3xl md:leading-10 font-bold text-[#333] mb-4">Nous sommes là pour vous
                        aider</h2>
                    <p class="mt-4 text-base text-[#666] leading-relaxed">Parcourez nos FAQ et, si vous ne trouvez pas
                        ce que vous cherchez, nos experts seront heureux de répondre à vos questions.</p>
                    <div class="mt-8 flex max-sm:flex-col sm:space-x-8 ">
                        <a href="/Faqs"
                            class="px-4  py-4 text-sm font-meduim font-[sans-serif] text-white bg-[#006AE5] rounded hover:bg-opacity-80 transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-[#f032e6] focus:outline-none focus:ring-opacity-50">LIRE
                            LES FAQ
                        </a>
                        <a href="#contact"
                            class="px-6 py-3 text-base font-meduim text-[#006AE5] flex items-center gap-4  ">
                            <div class="text-xl">
                                <i class='bx bxs-envelope '></i>
                            </div>
                            <p>POSER UNE QUESTION</p>
                        </a>
                    </div>
                </div>

            </div>
        </section>

    </main>
    @include('components.Footer')
    <script src="{{ asset('js/carouselHomePage.js') }}"></script>
    <script src="{{ asset('js/ajaxFavorit.js') }}"></script>

</body>

</html>
