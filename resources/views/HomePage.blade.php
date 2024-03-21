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

<body>
    <header
        class='fixed left-0 right-0 top-0   font-sans min-h-[60px]  z-50 bg-gradient-to-r from-[#FFFBF6] via-[#EFEEEC] shadow-lg shadow-gray-500  to-[#E4E4E4]'>
        <div class='flex flex-wrap items-center justify-between px-10 py-3 gap-4 relative'>
            <a href="javascript:void(0)" >
                <h1
                    class="bg-gradient-to-r from-[#69A8F3] via-[#5102F8] font-bold text-2xl to-indigo-400 inline-block text-transparent bg-clip-text">
                    CampusAvenir</h1>
            </a>
            <div class='flex items-center border-l-2 pl-5 border-gray-600 max-lg:ml-auto gap-2 lg:order-1'>
                <button type="button"
                    class=" py-2.5 min-w-[110px]  bg-gradient-to-r from-[#69A8F3] rounded text-white text-sm tracking-wider font-medium border-none outline-none bg-[#5102F8] active:from-[#69A8F3]">
                    se connecter</button>
                <button type="button"
                    class=" py-2.5 min-w-[110px]  bg-gradient-to-r from-[#69A8F3] rounded text-white text-sm tracking-wider font-medium border-none outline-none bg-[#5102F8] active:from-[#69A8F3]">
                    s'inscrire</button>
                <div onclick="toggleModal('collapseMenu')" class="border-l-2 lg:hidden cursor-pointer pl-5 ml-4 border-gray-600"><i class='bx bx-menu text-3xl' style='color:#323131'  ></i></div>
            </div>
            <ul id="collapseMenu"
                class='lg:flex hidden max-lg:w-full lg:space-x-10 max-lg:space-y-4 max-lg:my-4'>
                <li class='max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                        class='hover:text-blue-600 text-[15px] font-bold text-blue-600 block'>Home</a></li>
                <li class='group max-lg:border-b max-lg:py-2 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>Pages<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute hidden group-hover:block shadow-lg bg-white/80 px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>About</a></li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a></li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Login</a></li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sign up</a></li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Blog</a></li>
                    </ul>
                </li>
                <li class='group max-lg:border-b max-lg:py-2 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>Blog<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute hidden group-hover:block shadow-lg bg-white/80 px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px]'>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Foods</a></li>
                        <li class='border-b py-2 '>
                            <a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sale</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Marketing</a>
                        </li>
                        <li class='border-b py-2 '><a href='javascript:void(0)'
                                class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Investment</a>
                        </li>
                    </ul>
                </li>
                <li class='max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Team</a></li>
                <li class='max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>About</a></li>
                <li class='max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                        class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class="bg-url bg-no-repeat bg-cover px-6 h-screen items-center justify-center mt-16 flex"
            style="background-image: url('{{ asset('storage/images/herosection.png') }}');">
            <div class="text-center text-white">
                <h1 class="font-bold text-xl md:text-5xl">Trouvez Votre <span
                        class="bg-blue-500/60 px-3 pb-1 lg:pb-2 rounded">Avenir</span> Dès
                    Aujourd'hui !</h1>
                <p class="font-semibold text-lg md:text-3xl mt-6">Découvrez Le Guide Ultime Des Universités à Travers Le Maroc </p>
            </div>
        </section>
        <section  >
            <div class="font-[sans-serif] bg-gray-100 ">
                <div class="px-8 py-12 text-center  text-gray-700  shadow-xl">
                    <div class="max-w-5xl  mx-auto">
                        <p class="text-lg inline-block leading-loose align-text-top mb-4">Explorez vos options et prenez
                            des décisions éclairées avec notre guide
                            complet des universités à travers le monde. Découvrez les institutions les mieux classées,
                            explorez une variété de programmes et connectez-vous avec des individus partageant les mêmes
                            intérêts pour construire votre avenir académique. Avec des outils de recherche faciles à
                            utiliser, des profils approfondis, et des évaluations et avis de confiance, nous fournissons
                            tout ce dont vous avez besoin pour faire le bon choix pour votre parcours académique.
                            Commencez dès aujourd'hui votre recherche et trouvez la solution qui vous convient
                            parfaitement !</p>
                        <button type="button"
                            class=" mt-10 px-6 py-3 bg-[#006AE5] hover:bg-blue-700 text-white text-xs  font-medium rounded-sm">COMMENCEZ
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class=" min-h-[55vh] bg-no-repeat px-6 bg-cover items-center justify-center  flex"
            style="background-image: url('{{ asset('storage/images/Rectangle.png') }}');">
            <div class="max-w-6xl md:mx-auto mx-10">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 max-md:max-w-lg mx-auto py-8 gap-12">
                    <div class="py-6 px-4 bg-white group hover:bg-blue-500 rounded text-center hover:text-white">
                        <h3 class="text-xl font-extrabold mb-4">Security</h3>
                        <p class="text-sm">Qui elit labore in nisi dolore tempor anim laboris ipsum ad ad consequat id.
                            Dolore et sint mollit in nisi tempor culpa consectetur.</p>
                        <button
                            class="text-sm font-semibold bg-transparent px-4 py-1.5 border-2 border-blue-500 text-blue-500 hover:border-white group-hover:border-white group-hover:text-white hover:text-white mt-6 rounded-full">Read
                            More</button>
                    </div>
                    <div class="py-6 px-4 bg-white group hover:bg-blue-500 rounded text-center hover:text-white">
                        <h3 class="text-xl font-extrabold mb-4">Security</h3>
                        <p class="text-sm">Qui elit labore in nisi dolore tempor anim laboris ipsum ad ad consequat id.
                            Dolore et sint mollit in nisi tempor culpa consectetur.</p>
                        <button
                            class="text-sm font-semibold bg-transparent px-4 py-1.5 border-2 border-blue-500 text-blue-500 hover:border-white group-hover:border-white group-hover:text-white hover:text-white mt-6 rounded-full">Read
                            More</button>
                    </div>
                    <div class="py-6 px-4 bg-white group hover:bg-blue-500 rounded text-center hover:text-white">
                        <h3 class="text-xl font-extrabold mb-4">Security</h3>
                        <p class="text-sm">Qui elit labore in nisi dolore tempor anim laboris ipsum ad ad consequat id.
                            Dolore et sint mollit in nisi tempor culpa consectetur.</p>
                        <button
                            class="text-sm font-semibold bg-transparent px-4 py-1.5 border-2 border-blue-500 text-blue-500 hover:border-white group-hover:border-white group-hover:text-white hover:text-white mt-6 rounded-full">Read
                            More</button>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-gray-50 mx-10 gap-10 flex flex-col lg:flex-row px-4 py-10 mt-20 font-[sans-serif] ">
                <div class="lg:w-[80%]">
                    <div class="flex justify-between">
                        <h2 class="text-3xl font-semibold text-[#006AE5]">Latest News & Events</h2>
                        <button type="button"
                            class="px-4 py-2 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-[#006AE5] hover:bg-blue-700 active:bg-[#006AE5]">View
                            All</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 mt-8">
                        <div class="bg-white cursor-pointer border-b-2 border-blue-500 overflow-hidden group">
                            <div class="relative overflow-hidden">
                                <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                                    class="w-full h-60 object-cover " />
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae
                                    ligula.</p>
                                <button type="button"
                                    class="px-4 py-2 mt-6 rounded  text-[#7E767C] text-sm tracking-wider border-[#D9D9D9] border-2 outline-none bg-[#006AE5]/40">Read
                                    More</button>
                            </div>
                        </div>
                        <div class="bg-white cursor-pointer border-b-2 border-blue-500 overflow-hidden group">
                            <div class="relative overflow-hidden">
                                <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 2"
                                    class="w-full h-60 object-cover" />
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Duis accumsan,
                                    ligula.</p>
                                <button type="button"
                                    class="px-4 py-2 mt-6 rounded  text-[#7E767C] text-sm tracking-wider border-[#D9D9D9] border-2 outline-none bg-[#006AE5]/40">Read
                                    More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-blue-50 rounded cursor-pointer mb-6 border-blue-500 overflow-hidden group">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg py-4 px-6 font-semibold text-[#006AE5]">Uncoming Events</h2>
                        <button type="button"
                            class="px-2 h-[30px]  mr-8 rounded text-white text-xs border-none outline-none bg-[#006AE5] hover:bg-blue-700">View
                            All</button>
                    </div>

                    <!-- Carousel Container -->
                    <div class="carousel relative lg:w-[30vw]   overflow-hidden">
                        <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 1"
                            class="mt-4 h-52 w-full object-cover " />
                        <img src="https://readymadeui.com/prediction.webp" alt="Blog Post 3"
                            class="mt-4 h-52 w-full object-cover hidden " />
                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 2"
                            class="mt-4 h-52 w-full object-cover hidden" />
                    </div>

                    <div class="controls flex justify-between items-center  mt-4">
                        <button
                            class="prev-button px-2 py-1  text-white  border-none outline-none bg-gray-400/50 hover:bg-gray-500"><i
                                class=' text-xl bx bx-chevron-left'></i></button>
                        <button
                            class="next-button px-2 py-1  text-white  border-none outline-none bg-gray-400/50 hover:bg-gray-500"><i
                                class=' text-xl bx bx-chevron-right'></i></button>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-medium font-medium text-center text-blue-500">Planification drive</p>
                        <p id="event-date-time" class="text-medium font-medium text-center mt-4">
                            <span class='bx bxs-calendar text-blue-500'><span class="text-black">2 Jul 2023
                                </span></span>
                            <span class='bx bx-time-five text-blue-500'><span class="text-black">9pm</span></span>
                        </p>
                        <button type="button"
                            class="px-4 py-2 mt-6 rounded text-[#7E767C] text-sm tracking-wider border-[#D9D9D9] border-2 outline-none bg-[#006AE5]/40">Read
                            More</button>
                    </div>
                </div>




            </div>
        </section>


        <section class="mt-6 px-6">
            <div class="bg-white font-[sans-serif] my-4">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center">
                        <h2
                            class="text-3xl font-bold text-[#333] inline-block mt-14 relative after:absolute after:w-2/6 after:h-[8px] mb-2 after:left-0 after:right-0 after:-bottom-6 after:mx-auto after:bg-[#006AE5]/75 after:rounded-full">
                            Most popular Categories</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-md:max-w-lg mx-auto">
                        <div class="bg-white cursor-pointer  overflow-hidden  relative top-0 ">
                            <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                                class="w-full h-60  object-cover" />
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">see course guid
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white cursor-pointer  overflow-hidden relative top-0 ">
                            <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 2"
                                class="w-full h-60 object-cover" />
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">see course guid
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white cursor-pointer  overflow-hidden  relative top-0 ">
                            <img src="https://readymadeui.com/prediction.webp" alt="Blog Post 3"
                                class="w-full h-60 object-cover" />
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">see course guid
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" flex justify-center ">
                <button type="button"
                    class="px-6  py-2  flex items-center gap-2 justify-center text-blue-500 text-sm tracking-wider font-medium outline-none border-2 border-blue-500  relative active:top-[1px]">
                    <h1>SEE ALL</h1>
                    <i class='bx bx-right-arrow-alt text-xl mt-[1px]'></i>
                </button>
            </div>
        </section>

        <section class="mt-14 px-6">
            <div class="bg-white font-[sans-serif] my-4">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center">
                        <h2
                            class="text-3xl font-bold text-[#333] inline-block mt-14 relative after:absolute after:w-2/6 after:h-[8px] mb-2 after:left-0 after:right-0 after:-bottom-6 after:mx-auto after:bg-[#006AE5]/75 after:rounded-full">
                            Top Ranking Universities</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-md:max-w-lg mx-auto">
                        <div class="bg-white cursor-pointer  overflow-hidden  relative top-0 ">
                            <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                                class="w-full h-60  object-cover" />
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">see course guid
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white cursor-pointer  overflow-hidden relative top-0 ">
                            <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 2"
                                class="w-full h-60 object-cover" />
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">see course guid
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white cursor-pointer  overflow-hidden  relative top-0 ">
                            <img src="https://readymadeui.com/prediction.webp" alt="Blog Post 3"
                                class="w-full h-60 object-cover" />
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">see course guid
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" flex justify-center ">
                <button type="button"
                    class="px-6  py-2  flex items-center gap-2 justify-center text-blue-500 text-sm tracking-wider font-medium outline-none border-2 border-blue-500  relative active:top-[1px]">
                    <h1>SEE ALL</h1>
                    <i class='bx bx-right-arrow-alt text-xl mt-[1px]'></i>
                </button>
            </div>
        </section>

        <section>
            <div
                class="grid md:grid-cols-2 px-6 my-20 items-center md:gap-16 gap-6 font-[sans-serif] text-[#333] max-w-6xl max-md:max-w-lg mx-auto">
                <div class="md:h-[320px]">
                    <img src='{{ asset('storage/images/lastsection.png') }}' class="w-full h-full object-cover shadow-xl"
                        alt="Dining Experience" />
                </div>
                <div class="max-md:order-1 max-md:text-center">
                    <h2 class="md:text-4xl text-3xl md:leading-10 font-bold text-[#333] mb-4">We're here to help
                    </h2>
                    <p class="mt-4 text-base text-[#666] leading-relaxed">Read through our FAQs and, if you can't find
                        what you're looking <br>for, our experts will be happy to answer your questions.</p>
                    <div class="mt-8 flex max-sm:flex-col sm:space-x-8 ">
                        <a href="javascript:void(0);"
                            class="px-4  py-4 text-sm font-meduim font-[sans-serif] text-white bg-[#006AE5] rounded hover:bg-opacity-80 transition-all duration-300 transform hover:scale-105 focus:ring-2 focus:ring-[#f032e6] focus:outline-none focus:ring-opacity-50">READ FAQS
                            </a>
                        <a href="javascript:void(0);"
                            class="px-6 py-3 text-base font-meduim text-[#006AE5] flex items-center gap-4  ">
                            <div class="text-xl">
                            <i class='bx bxs-envelope '></i></div>
                            <p>ASK A QUESTION</p> 
                            </a>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer class="bg-sky-100 py-12 px-12 font-[sans-serif]">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10">
          <div class="xl:col-span-2">
            <a href='javascript:void(0)'><img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-48' /></a>
            <p class="text-sm mt-6 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida,
              mi eu pulvinar cursus, sem elit interdum mauris dipiscing elit. Aenean gravida,
              mi eu pulvinar cursus... <a href='javascript:void(0)' class="text-sm font-semibold text-blue-500">Read
                more</a></p>
            <ul class="mt-10 space-y-6">
              <li class="flex items-center">
                <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 482.6 482.6">
                    <path
                      d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                      data-original="#000000" />
                  </svg>
                </div>
                <a href="javascript:void(0)" class="text-blue-500 text-sm ml-3">
                  <small class="block">Tel</small>
                  <strong>180-548-2588</strong>
                </a>
              </li>
              <li class="flex items-center">
                <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                    viewBox="0 0 479.058 479.058">
                    <path
                      d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                      data-original="#000000" />
                  </svg>
                </div>
                <a href="javascript:void(0)" class="text-blue-500 text-sm ml-3">
                  <small class="block">Mail</small>
                  <strong>info@example.com</strong>
                </a>
              </li>
              <li class="flex items-center">
                <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                    viewBox="0 0 368.16 368.16">
                    <path
                      d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z"
                      data-original="#000000" />
                    <path
                      d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z"
                      data-original="#000000" />
                  </svg>
                </div>
                <a href="javascript:void(0)" class="text-blue-500 text-sm ml-3">
                  <small class="block">Address</small>
                  <strong>123 Main Street City, Country</strong>
                </a>
              </li>
              <li class="flex items-center">
                <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 100 100">
                    <path
                      d="M83 23h-3V11c0-3.309-2.692-6-6-6H26c-3.308 0-6 2.691-6 6v12h-3C8.729 23 2 29.729 2 38v30c0 4.963 4.037 9 9 9h9v12c0 3.309 2.692 6 6 6h48c3.308 0 6-2.691 6-6V77h9c4.963 0 9-4.037 9-9V38c0-8.271-6.729-15-15-15zM26 11h48v12H26zm0 78V59h48v30zm66-21c0 1.654-1.345 3-3 3h-9V59h3a3 3 0 1 0 0-6H17a3 3 0 1 0 0 6h3v12h-9c-1.655 0-3-1.346-3-3V38c0-4.963 4.037-9 9-9h66c4.963 0 9 4.037 9 9zm-27 0a3 3 0 0 1-3 3H38a3 3 0 1 1 0-6h24a3 3 0 0 1 3 3zm0 12a3 3 0 0 1-3 3H38a3 3 0 1 1 0-6h24a3 3 0 0 1 3 3zm21-42a3 3 0 0 1-3 3h-6a3 3 0 1 1 0-6h6a3 3 0 0 1 3 3z"
                      data-original="#000000" />
                  </svg>
                </div>
                <a href="javascript:void(0)" class="text-blue-500 text-sm ml-3">
                  <small class="block">Fax</small>
                  <strong>+1-548-2588</strong>
                </a>
              </li>
            </ul>
          </div>
          <div>
            <h4 class="text-black font-semibold text-lg">Contact Us</h4>
            <p class="text-sm text-gray-500 mt-2">We usually respond before 24 hours.</p>
            <form class="mt-6">
              <input type='text' placeholder='Name'
                class="w-full rounded-md h-10 px-6 bg-[#f0f1f2] text-sm mb-3 outline-blue-500" />
              <input type='text' placeholder='Email'
                class="w-full rounded-md h-10 px-6 bg-[#f0f1f2] text-sm mb-3 outline-blue-500" />
              <textarea placeholder='Message' rows="6"
                class="w-full rounded-md px-6 bg-[#f0f1f2] text-sm pt-3 outline-blue-500"></textarea>
            </form>
            <button type='button'
              class="text-white bg-blue-500 hover:bg-blue-600 font-semibold rounded-md text-sm px-6 py-3 block w-full mt-3">Submit</button>
          </div>
          <div>
            <h4 class="text-black font-semibold text-lg">Social Media</h4>
            <p class="text-sm text-gray-500 mt-2">Follow us for the latest updates and exclusive offers!</p>
            <ul class="flex items-center mt-6 space-x-4">
              <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                <a href="javascript:void(0)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 24 24">
                    <path
                      d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                      data-original="#000000" />
                  </svg>
                </a>
              </li>
              <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                <a href="javascript:void(0)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 511 512">
                    <path
                      d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0"
                      data-original="#000000" />
                  </svg>
                </a>
              </li>
              <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                <a href="javascript:void(0)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                    viewBox="0 0 682.667 682.667">
                    <defs>
                      <clipPath id="a" clipPathUnits="userSpaceOnUse">
                        <path d="M0 512h512V0H0Z" data-original="#007bff" />
                      </clipPath>
                    </defs>
                    <g fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                      stroke-width="40" clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                      <path
                        d="M492 255.75c0-39.49-3.501-75.479-7.497-103.698-5.191-36.655-34.801-64.96-71.646-68.567C373.764 79.658 318.529 75.75 256 75.75c-62.529 0-117.764 3.908-156.857 7.735-36.845 3.607-66.455 31.912-71.646 68.567C23.501 180.271 20 216.26 20 255.75c0 39.49 3.501 75.479 7.497 103.698 5.191 36.655 34.801 64.96 71.646 68.567 39.093 3.827 94.328 7.735 156.857 7.735 62.529 0 117.764-3.908 156.857-7.735 36.845-3.607 66.455-31.912 71.646-68.567C488.499 331.229 492 295.24 492 255.75Z"
                        data-original="#000000" />
                      <path
                        d="m245.5 185.291 75.914 45.165c19.448 11.57 19.448 39.518 0 51.088L245.5 326.709c-20.024 11.913-45.5-2.39-45.5-25.544v-90.33c0-23.154 25.476-37.457 45.5-25.544Z"
                        data-original="#000000" />
                    </g>
                  </svg>
                </a>
              </li>
              <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                <a href="javascript:void(0)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff' viewBox="0 0 24 24">
                    <path
                      d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                    </path>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <hr class="my-8 border-blue-300"/>
        <div class="lg:flex lg:item-center">
          <ul class="flex flex-wrap gap-4">
            <li>
              <a href='javascript:void(0)' class='text-blue-500 text-sm hover:underline'>Terms of Service</a>
            </li>
            <li>
              <a href='javascript:void(0)' class='text-blue-500 text-sm hover:underline'>Privacy Policy</a>
            </li>
            <li>
              <a href='javascript:void(0)' class='text-blue-500 text-sm hover:underline'>Security</a>
            </li>
          </ul>
          <p class='text-sm text-gray-500 ml-auto max-lg:mt-4'>Copyright © {{now()->year}}<a href='https://readymadeui.com/'
              target='_blank' class="hover:underline mx-1">ReadymadeUI</a>All Rights Reserved.</p>
        </div>
      </footer> 
  
    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }
    
        document.addEventListener("DOMContentLoaded", function() {
            const images = document.querySelectorAll('.carousel img');
            const eventDateTime = document.getElementById('event-date-time');
            let index = 0;

            const events = [{
                    imageUrl: 'https://readymadeui.com/hacks-watch.webp',
                    date: '2 Jul 2023',
                    time: '9pm'
                },
                {
                    imageUrl: 'https://readymadeui.com/prediction.webp',
                    date: '8 Jul 2025',
                    time: '6pm'
                },
                {
                    imageUrl: 'https://readymadeui.com/Imagination.webp',
                    date: '6 Jul 2024',
                    time: '10pm'
                }
            ];

            function showImage(index) {
                images.forEach(img => img.classList.add('hidden'));
                images[index].classList.remove('hidden');
                eventDateTime.innerHTML = `
            <span class='bx bxs-calendar text-blue-500'><span class="text-black">${events[index].date}</span></span>
            <span class='bx bx-time-five text-blue-500'><span class="text-black"> ${events[index].time}</span></span>
        `;
            }

            function nextImage() {
                index = (index + 1) % images.length;
                showImage(index);
            }

            function prevImage() {
                index = (index - 1 + images.length) % images.length;
                showImage(index);
            }

            document.querySelector('.next-button').addEventListener('click', nextImage);
            document.querySelector('.prev-button').addEventListener('click', prevImage);

            showImage(index);
        });
    </script>
</body>

</html>
