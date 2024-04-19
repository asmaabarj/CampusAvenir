
<header
    class='fixed left-0 right-0 top-0 shadow-xl font-sans min-h-[75px] z-50 bg-gradient-to-r from-[#FFFBF6] via-[#EFEEEC]  to-[#E4E4E4]'>
    <div class='flex flex-wrap items-center justify-between px-10 py-3 gap-4 relative'>
        <a href="">
            <h1
                class="bg-gradient-to-r from-[#69A8F3] via-[#5102F8] font-bold text-2xl to-indigo-400 inline-block text-transparent bg-clip-text">
                CampusAvenir</h1>
        </a>

        <div class='flex items-center border-l-2 pl-5 border-gray-600 max-lg:ml-auto gap-2 lg:order-1'>
            @if (auth()->check() && auth()->user()->role === 'user')
                <a href="/favoris"
                    class="relative after:absolute group mt-[2px] after:bg-black after:w-[110%] lg:after:h-[2px] after:block after:top-[40px] after:left-0 after:transition-all after:duration-300 sm:mr-8 mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px"
                        class="cursor-pointer fill-[#333] hover:fill-[#007bff] inline-block" viewBox="0 0 64 64">
                        <path
                            d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                            data-original="#000000" />
                    </svg>
                    <span
                        class="absolute left-auto -ml-1 top-0 rounded-full bg-black px-1 py-0 text-xs text-white">{{$favoritCount}}</span>
                </a>
                <div
                    class="relative mr-4 px-1 after:absolute group  after:bg-black after:w-[85%] lg:after:h-[2px] after:block after:top-12 after:center-0 after:transition-all after:duration-300">
                    <img src="https://readymadeui.com/team-1.webp" class="w-10 h-10  rounded-full" />

                    <div
                        class="bg-white z-50 group-hover:block hover:block hidden shadow-md py-6 px-6 sm:min-w-[180px]  absolute right-0  top-9">
                        <a href='/profileUser' class="text-sm flex text-gray-500 hover:text-black"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                                viewBox="0 0 512 512">
                                <path
                                    d="M437.02 74.98C388.668 26.63 324.379 0 256 0S123.332 26.629 74.98 74.98C26.63 123.332 0 187.621 0 256s26.629 132.668 74.98 181.02C123.332 485.37 187.621 512 256 512s132.668-26.629 181.02-74.98C485.37 388.668 512 324.379 512 256s-26.629-132.668-74.98-181.02zM111.105 429.297c8.454-72.735 70.989-128.89 144.895-128.89 38.96 0 75.598 15.179 103.156 42.734 23.281 23.285 37.965 53.687 41.742 86.152C361.641 462.172 311.094 482 256 482s-105.637-19.824-144.895-52.703zM256 269.507c-42.871 0-77.754-34.882-77.754-77.753C178.246 148.879 213.13 114 256 114s77.754 34.879 77.754 77.754c0 42.871-34.883 77.754-77.754 77.754zm170.719 134.427a175.9 175.9 0 0 0-46.352-82.004c-18.437-18.438-40.25-32.27-64.039-40.938 28.598-19.394 47.426-52.16 47.426-89.238C363.754 132.34 315.414 84 256 84s-107.754 48.34-107.754 107.754c0 37.098 18.844 69.875 47.465 89.266-21.887 7.976-42.14 20.308-59.566 36.542-25.235 23.5-42.758 53.465-50.883 86.348C50.852 364.242 30 312.512 30 256 30 131.383 131.383 30 256 30s226 101.383 226 226c0 56.523-20.86 108.266-55.281 147.934zm0 0"
                                    data-original="#000000" />
                            </svg>Profile</a>
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
                    class="py-2.5 min-w-[110px] bg-gradient-to-r from-[#69A8F3] rounded-full text-white text-center text-sm  font-medium border-none outline-none bg-[#5102F8] ">
                    Se connecter
                </a>
                <a href="/register"
                    class="py-2.5 min-w-[110px] bg-gradient-to-r from-[#69A8F3] rounded-full text-white text-center text-sm font-medium border-none outline-none bg-[#5102F8] ">
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
                    Domaine
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                            data-name="16" data-original="#000000" />
                    </svg>
                </a>
                <ul
                    class='absolute hidden group-hover:block shadow-lg bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[200px] z-50'>
                    @foreach ($domainesnav as $domainenav)
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>{{ $domainenav->titre }}</a>
                        </li>
                    @endforeach
                    <li class='border-b py-2 '><a href='/domaines'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Tous</a>
                    </li>
                </ul>
            </li>
            <li class='group max-lg:border-b max-lg:py-2 relative'>
                <a href='/universities'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>
                    Etablissments
                </a>
        
            </li>
            <li class='max-lg:border-b max-lg:py-2'><a href='/concours'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Concours</a></li>
                    @if (auth()->check() && auth()->user()->role === 'user')
                    <li class='max-lg:border-b max-lg:py-2'><a href='/posts'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Publications</a></li>
                        @endif
            <li class='max-lg:border-b max-lg:py-2'><a href='/Faqs'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Faqs</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='#contact'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a></li>
        </ul>
    </div>
</header>

<script src="{{asset('js/toggleModal.js')}}"></script>

