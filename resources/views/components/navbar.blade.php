<header
    class='fixed left-0 right-0 top-0 shadow-md font-sans min-h-[80px] z-50 bg-gradient-to-r from-[#FEFEFE] via-[#EFEEEE]  to-[#f5f7fa]'>
    <div class='flex flex-wrap items-center justify-between px-10 py-3 gap-4 relative'>
        
            <h1
                class="bg-gradient-to-r cursor-pointer from-[#69A8F3] via-[#5102F8] font-bold text-2xl to-indigo-400 inline-block text-transparent bg-clip-text">
                CampusAvenir</h1>
        
        <div class='flex items-center mt-1 pl-5 border-gray-600 max-lg:ml-auto gap-2 lg:order-1'>
            @if (auth()->check() && auth()->user()->role === 'user')
                <div class="relative mr-4 px-1 after:absolute group">
                    <img src="{{asset('storage/' . $user->photo)}}" class="w-10 h-10  rounded-full" />

                    <div
                        class="bg-white rounded z-50  group-hover:block hover:block hidden shadow-md py-6 px-6 sm:min-w-[250px]  absolute right-0  top-9">
                        <div class="text-sm flex mb-3 justify-center items-center gap-3 text-gray-500  hover:text-black">
                            <img src="{{asset('storage/' . $user->photo)}}" class="w-12 h-12  rounded-full" />
                            <div>
                            <h1 class="text-gray-700 font-medium">{{$user->nom}} {{$user->prenom}}</h1>
                            <p class="">{{$user->email}}</p>
                            </div>
                        </div>
                        <a href="/profileUser" class="border mt-5 rounded-full font-medium px-8 ml-2 pb-1 text-blue-600 border-blue-400">Voir le profil</a>


                        <hr class="border-b-0 my-4" />
                        <a href='/favoris' class="text-sm flex text-gray-500 hover:text-black"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20px" fill="currentColor"
                                class="w-[18px] h-[18px] mr-4" viewBox="0 0 64 64">
                                <path
                                    d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                    data-original="#000000" />
                            </svg>Favoris
                        </a>
                        <hr class="border-b-0 my-4" />
                        <a href='/logout' class="text-sm flex text-gray-500 hover:text-black"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                                viewBox="0 0 6.35 6.35">
                                <path
                                    d="M3.172.53a.265.266 0 0 0-.262.268v2.127a.265.266 0 0 0 .53 0V.798A.265.266 0 0 0 3.172.53zm1.544.532a.265.266 0 0 0-.026 0 .265.266 0 0 0-.147.47c.459.391.749.973.749 1.626 0 1.18-.944 2.131-2.116 2.131A2.12 2.12 0 0 1 1.06 3.16c0-.65.286-1.228.74-1.62a.265.266 0 1 0-.344-.404A2.667 2.667 0 0 0 .53 3.158a2.66 2.66 0 0 0 2.647 2.663 2.657 2.657 0 0 0 2.645-2.663c0-.812-.363-1.542-.936-2.03a.265.266 0 0 0-.17-.066z"
                                    data-original="#000000" />
                            </svg>Se déconnecter
                        </a>
                    </div>
                </div>
            @else
                <a href="/login"
                    class="py-2.5 min-w-[110px] border-[#69A8F3] border-[2px] border  rounded-full text-blue-500 text-center text-sm  font-medium  outline-none ">
                    Se connecter
                </a>
                <a href="/register"
                    class="py-[11px] min-w-[110px] bg-gradient-to-r from-[#69A8F3] rounded-full text-white text-center text-sm font-medium  outline-none bg-blue-700 ">
                    S'inscrire
                </a>
            @endif
        </div>
        <ul class='lg:!flex max-lg:hidden max-lg:w-full lg:space-x-10 max-lg:space-y-4 max-lg:my-4'>
            <li class='max-lg:border-b max-lg:py-2'><a href='/'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Accueil</a>
            </li>
            <li class='group max-lg:border-b max-lg:py-2 relative'>
                <a href=''
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>
                    Domaines
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                            data-name="16" data-original="#000000" />
                    </svg>
                </a>
                <ul
                    class='absolute hidden group-hover:block shadow-lg rou bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50'>
                    @foreach ($domainesnav as $domainenav)
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>{{ $domainenav->titre }}</a>
                        </li>
                    @endforeach
                    <li class=' py-2 '><a href='/domaines'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Tous</a>
                    </li>
                </ul>
            </li>
            <li class='group max-lg:border-b max-lg:py-2 relative'>
                <a href=''
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>
                    Établissement
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                            data-name="16" data-original="#000000" />
                    </svg>
                </a>
                <ul
                    class='absolute hidden group-hover:block shadow-lg bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50'>
                    @foreach ($universitiesnav as $universitynav)
                        <li class='border-b py-2 '><a href='/etablissment/{{$universitynav->id}}'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>{{ $universitynav->nom }}</a>
                        </li>
                    @endforeach
                    <li class=' py-2 '><a href='/universities'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Tous</a>
                    </li>
                </ul>
            </li>
            <li class='max-lg:border-b max-lg:py-2'><a href='/concours'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Concours</a></li>
            @if (auth()->check() && auth()->user()->role === 'user')
                <li class='max-lg:border-b max-lg:py-2'><a href='/posts'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Publications</a></li>
            @endif
            <li class='max-lg:border-b max-lg:py-2'><a href='/Faqs'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Faqs</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='/#contact'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a></li>
        </ul>
    </div>
</header>

<script src="{{ asset('js/toggleModal.js') }}"></script>
