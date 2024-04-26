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
</head>

<body>
    @include('components.navbar')
    @include('components.Alert')


    <main class="bg-gray-50 gap-10  px-4 py-10  font-[sans-serif] ">
        <div class="relative  bottom-0 isolate overflow-hidden px-6 py-24 sm:px-32 xl:py-32">
            <section class="flex justify-between w-full">
                <div class="w-[65%]">
                    <h4
                        class=" px-5  border-y-[1px] py-7 border-y-blue-400  text-center text-3xl font-bold tracking-tight sm:text-3xl  ">
                        Etablissements de l’Enseignement Supérieur au Maroc
                    </h4>
                    <div class="border border-blue-400 py-6 mb-14  rounded-[20px]  my-6">
                        <img class="mx-auto" src="https://www.moroccodemia.com/fr/media/2019/01/IconBlackCollege.png"
                            width="80" height="80">
                    </div>
                    <h5 class=" w-full  text-left text-xl leading-8 font-semibold text-blue-500">
                        Types d’établissements de l’enseignement supérieur </h5>
                    <p class="w-full  mt-5 text-gray-700"> L'enseignement supérieur universitaire au
                        Maroc se divise principalement en deux catégories d'établissements : publics et
                        privés.<br><br>

                        <span class="text-black font-semibold">Établissements privés : </span><br>
                        Ces établissements sont gérés par des entités privées et ne sont pas directement
                        affiliés au gouvernement. Ils peuvent proposer une variété de programmes et de
                        spécialisations, et généralement, ils déterminent leurs propres critères d'admission
                        ainsi que les frais de scolarité.<br>
                        <span class="text-black font-semibold">Établissements publics :</span><br>
                        Les établissements publics sont sous la responsabilité de l'État et sont financés par
                        des fonds publics. Ils peuvent être classés en deux catégories :<br>
                        <span class="text-gray-400 font-meduim">Établissements à accès ouvert :</span> Ces
                        établissements acceptent un nombre considérable
                        d'étudiants sans restrictions majeures sur les critères d'admission. Ils offrent une
                        large gamme de programmes académiques.<br>
                        <span class="text-gray-400 font-meduim">Établissements à accès régulé :</span> Ces
                        établissements publics ont des s
                        d'admission spécifiques, telles que des exigences de spécialisation, des notes
                        minimales, etc. Ils peuvent également imposer des frais d'inscription et/ou
                        d'enregistrement. Le processus d'admission est donc plus sélectif.<br><br>
                        Certains établissements publics sont gérés par le Département de l’Enseignement
                        Supérieur, tandis que d'autres sont sous la responsabilité de l'Office de la Formation
                        Professionnelle et de la Promotion du Travail (OFPPT). Un nombre limité d'établissements
                        publics relèvent d'autres ministères, tels que le Ministère du Tourisme, le Ministère de
                        la Santé et le Ministère de l'Habitat, entre autres. Ces établissements peuvent offrir
                        des programmes spécifiques en lien avec les domaines de compétence de ces ministères.
                    </p>
                </div>
                <div class="w-[27%] mt-32">
                    <div class="grid grid-cols-1 gap-6">
                        @foreach ($annonces as $annonce)
                            <div class="bg-gray-100 shadow-md border-b-2 border-blue-500 overflow-hidden group">
                                <div class="relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $annonce->photo) }}" alt="Blog Post 1"
                                        class="w-full h-52 object-cover group-hover:scale-125 transition-all duration-300" />
                                    @if ($annonce->date != null)
                                        <div
                                            class="px-4 py-2.5 text-white text-xs tracking-wider bg-blue-950 absolute bottom-0 right-0">
                                            {{ $annonce->date }}</div>
                                    @endif

                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-bold text-blue-950">{{ $annonce->titre }}</h3>
                                    @if ($annonce->temps != null)
                                        <h6 class="text-xs bx bx-time-five font-medium text-gray-600">
                                            {{ $annonce->temps }}
                                        </h6>
                                    @endif
                                    <br>
                                    @if ($annonce->lieu != null)
                                        <h6 class="text-xs bx bx-map font-medium text-gray-600">
                                            {{ $annonce->lieu }}
                                    @endif
                                    <p class="text-base mt-3 text-black">
                                        @if (strlen($annonce->description) > 60)
                                            {{ substr($annonce->description, 0, 60) }}...
                                        @else
                                            {{ $annonce->description }}
                                        @endif
                                    </p>
                                    <button onclick="toggleModal('pop{{ $annonce->id }}')"
                                        class="px-2 py-1 mt-2 rounded text-white text-xs tracking-wider border-none outline-none bg-gray-600 hover:bg-gray-700">Voir
                                        plus
                                    </button>
                                </div>
                            </div>
                        @endforeach
                        @include('components.annonceDetails')


                    </div>
                </div>
            </section>
            <div
                class="flex px-4 py-3 border-b border-[#333] focus-within:border-blue-500 overflow-hidden max-w-xl mt-32     mx-auto font-[sans-serif]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="18px"
                    class="fill-gray-600 mr-3">
                    <path
                        d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                    </path>
                </svg>
                <input type="text" id="searchInput" placeholder="Rechercher ..."
                    class="w-full bg-transparent outline-none text-sm" />
            </div>
            <div class="gap-2 mt-8 ml-64 grid grid-cols-4 w-[77%]">
                <div class="mb-2">
                    <select name="type" id="typeFilter"
                        class="border w-full text-gray-600 text-sm h-10 border-black rounded focus:outline-none focus:border-blue-600"
                        required>
                        <option value="prive">Privé</option>
                        <option value="publique">Publique</option>
                    </select>

                </div>
                <div class="mb-2">
                    <select name="domaine" id="domaineFilter"
                        class="border w-full text-gray-600 text-sm h-10 border-black rounded focus:outline-none focus:border-blue-600"
                        required>
                        @foreach ($domaines as $domaine)
                            <option value="{{ $domaine->id }}">{{ $domaine->titre }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="button" id="filterButton"
                        class="rounded text-white text-xs px-3 py-3 font-medium hover:border hover:border-blue-500 bg-black hover:bg-transparent hover:text-black transition-all duration-300">
                        Confirmer
                    </button>
                    <button type="button" id="retournerButton"
                        class="rounded text-white text-xs px-3 py-3 font-medium hover:border hover:border-blue-500 bg-black hover:bg-transparent hover:text-black transition-all duration-300">
                        Retourner
                    </button>

                </div>
                <div>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 universities-grid">
                @foreach ($universities as $university)
                    <div class="bg-white border-b-2 shadow-md border-blue-500 overflow-hidden group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $university->photo) }}" alt="University Photo"
                                class="w-full h-40 object-cover">
                        </div>
                        <div class="p-3">
                            <div class="flex mt-3 space-x-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $university->ratingUniversity)
                                        <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                    @else
                                        <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <h3 class="text-lg mt-2 font-bold text-[#333]">{{ $university->nom }}
                            </h3>
                            <div class=" mt-6 ">
                                <a href="/etablissment/{{ $university->id }}"
                                    class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class="text-xs font-[500] uppercase">détails</p>
                                    <i class='bx bx-right-arrow-alt '></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2"
                aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                    fill-opacity="0.7">
                </circle>
                <defs>
                    <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1"
                        gradientUnits="userSpaceOnUse" gradientTransform="translate(512 512) rotate(90) scale(512)">
                        <stop stop-color="#7775D6"></stop>
                        <stop offset="1" stop-color="#7ED321" stop-opacity="0"></stop>
                    </radialGradient>
                </defs>
            </svg>
        </div>
    </main>
    @include('components.minifooter')
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{asset('js/filtrage.js')}}"></script>

</html>
