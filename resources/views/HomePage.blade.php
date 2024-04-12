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
    <main>
        <div class="">

            <section class="bg-url bg-no-repeat bg-cover flex-col px-6 h-[120vh] items-center justify-center mt-16 flex"
                style="background-image: url('{{ asset('storage/images/herosection2.png') }}');">
                <div class="text-center mt-[50vh]  text-white">
                    <h1 class="font-bold text-xl md:text-5xl">Trouvez Votre <span
                            class="bg-blue-500/60 px-3 pb-1 lg:pb-2 rounded">Avenir</span> Dès
                        Aujourd'hui !</h1>
                    <p class="font-semibold text-lg md:text-3xl mt-6">Découvrez Le Guide Ultime Des Universités à Travers Le Maroc </p>
                </div>
                <section id="categories-container" class="py-8 w-[92%]  mt-36 mx-auto">
                    <div class="carousel-container relative overflow-hidden">
                        <button
                            class="prev-button absolute top-1/2 left-0 transform  -translate-y-1/2 cursor-pointer p-2 px-3 rounded-full bg-blue-600/60 text-white z-10">
                            <i class='bx bx-chevron-left text-3xl'></i> </button>
                        <div class="viewport">
                            <div class="categories-container flex space-x-4  transition-transform  duration-300">

                                <div
                                    class="category flex-none bg-white  cursor-pointer w-[44vw] rounded-lg overflow-hidden h-[50vh]   transition duration-300">
                                    <div class="flex h-full">
                                        <img src="https://img.freepik.com/photos-gratuite/ecoliere-gabarit_23-2148203875.jpg?w=360&t=st=1712051063~exp=1712051663~hmac=963d0a3d8d9ed9b2df47571574a7ffdb4a2b16296dd1cc8b8394426915b79772"
                                            alt="Blog Post 1" class="w-[20vw] h-full object-cover" />
                                        <div class="p-4">
                                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your
                                                Imagination</h3>
                                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN
                                                DOE</span>

                                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                accumsan, nunc
                                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis accumsan,
                                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                                accumsan, nunc et </p>
                                            <a href="javascript:void(0);"
                                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="category flex-none bg-white cursor-pointer w-[44vw]   rounded-lg overflow-hidden h-[50vh]   transition duration-300">
                                    <div class="flex h-full">
                                        <img src="https://postbac.ma/wp-content/uploads/2020/08/CESA_Ecole-3.png"
                                            alt="Blog Post 1" class="w-[20vw] h-full object-cover" />
                                        <div class="p-4">
                                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your
                                                Imagination</h3>
                                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN
                                                DOE</span>
                                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                accumsan, nunc
                                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis accumsan,
                                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                            </p>
                                            <a href="javascript:void(0);"
                                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="category flex-none bg-white cursor-pointer w-[44vw]   rounded-lg overflow-hidden h-[50vh]   transition duration-300">
                                    <div class="flex h-full">
                                        <img src="https://postbac.ma/wp-content/uploads/2020/08/postbac-Pole-Ingenierie-1.jpg"
                                            alt="Blog Post 1" class="w-[20vw] h-full object-cover" />
                                        <div class="p-4">
                                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your
                                                Imagination</h3>
                                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN
                                                DOE</span>
                                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                accumsan, nunc
                                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis accumsan,
                                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                            </p>
                                            <a href="javascript:void(0);"
                                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="category flex-none bg-white cursor-pointer w-[44vw]   rounded-lg overflow-hidden h-[50vh]  hover:shadow-lg transition duration-300">
                                    <div class="flex h-full">
                                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                                            class="w-[17vw] h-full object-cover" />
                                        <div class="p-4">
                                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your
                                                Imagination</h3>
                                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN
                                                DOE</span>
                                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                accumsan, nunc
                                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis accumsan,
                                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                                accumsan, nunc et </p>
                                            <a href="javascript:void(0);"
                                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="category flex-none bg-white cursor-pointer w-[44vw]   rounded-lg overflow-hidden h-[50vh]  hover:shadow-lg transition duration-300">
                                    <div class="flex h-full">
                                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                                            class="w-[17vw] h-full object-cover" />
                                        <div class="p-4">
                                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your
                                                Imagination</h3>
                                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN
                                                DOE</span>
                                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                                accumsan, nunc
                                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis accumsan,
                                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis
                                                accumsan, nunc et </p>
                                            <a href="javascript:void(0);"
                                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="next-button absolute top-1/2 right-0 transform -translate-y-1/2 cursor-pointer  p-2 px-3 rounded-full bg-blue-600/60 text-white z-10">
                            <i class='bx bx-chevron-right text-3xl '></i> </button>
                    </div>
                </section>
            </section>

        </div>
        <div class="font-[sans-serif]  bg-gray-100 ">
            <div class="px-8 py-12 text-center  text-gray-700  ">
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
                        <a href=""
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
                        <a href=""
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
                        <a href=""
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
                        <div class="bg-white cursor-pointer  overflow-hidden  relative top-0 ">
                            <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                                class="w-full h-60  object-cover" />
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">détails
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
                                    <p class=" text-sm font-[500] uppercase">détails
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
                                    <p class=" text-sm font-[500] uppercase">détails
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" flex justify-center mt-8 ">
                <button type="button"
                    class="px-6  py-2  flex items-center gap-2 justify-center text-blue-500 text-sm tracking-wider font-medium outline-none border-2 border-blue-500  relative active:top-[1px]">
                    <h1>VOIR TOUS</h1>
                    <i class='bx bx-right-arrow-alt text-xl mt-[1px]'></i>
                </button>
            </div>
        </section>

        <section>
            <div class="bg-gray-100 mx-10 gap-10  px-4 py-10 mt-20 font-[sans-serif] ">
                <div class="flex justify-between">
                    <h2 class="text-3xl font-semibold text-[#006AE5]">Universités les mieux classées</h2>
                    <button type="button"
                        class="px-4 py-2 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-[#006AE5] hover:bg-blue-700 active:bg-[#006AE5]">Voir
                        Tous</button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                    <div class="bg-white cursor-pointer border-b-2 border-blue-500 overflow-hidden group">
                        <div class="relative overflow-hidden">
                            <img src="https://postbac.ma/wp-content/uploads/2020/09/DUT_FMD_Rabat.png"
                                alt="Blog Post 1" class="w-full h-60 object-cover " />
                            <div class="ml-5 flex space-x-1 mt-6">
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#333]">détails
                            </h3>

                            <div class="flex justify-between mt-6 items-center">
                                <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2"
                                        data-name="Layer 1" width="34" height="34"
                                        viewBox="0 0 122.88 107.39">
                                        <defs>

                                        </defs>
                                        <title>red-heart</title>
                                        <path class="hover:fill-[#ed1b24]  fill-[#cccccc]"
                                            d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                                    </svg> </button>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">détails
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white cursor-pointer border-b-2 border-blue-500 overflow-hidden group">
                        <div class="relative overflow-hidden">
                            <img src="https://postbac.ma/wp-content/uploads/2020/08/EMBCI.png" alt="Blog Post 1"
                                class="w-full h-60 object-cover " />
                            <div class="ml-5 flex space-x-1 mt-6">
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>

                            <div class="flex justify-between mt-6 items-center">
                                <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2"
                                        data-name="Layer 1" width="34" height="34"
                                        viewBox="0 0 122.88 107.39">
                                        <defs>

                                        </defs>
                                        <title>red-heart</title>
                                        <path class="hover:fill-[#ed1b24]  fill-[#cccccc]"
                                            d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                                    </svg> </button>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">détails
                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white cursor-pointer border-b-2 border-blue-500 overflow-hidden group">
                        <div class="relative overflow-hidden">
                            <img src="https://postbac.ma/wp-content/uploads/2020/08/postbac-management.jpg"
                                alt="Blog Post 1" class="w-full h-60 object-cover " />
                            <div class="ml-5 flex space-x-1 mt-6">
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#333]">A Guide to Igniting Your Imagination</h3>

                            <div class="flex justify-between mt-6 items-center">
                                <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2"
                                        data-name="Layer 1" width="34" height="34"
                                        viewBox="0 0 122.88 107.39">
                                        <defs>

                                        </defs>
                                        <title>red-heart</title>
                                        <path class="hover:fill-[#ed1b24]  fill-[#cccccc]"
                                            d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                                    </svg> </button>
                                <div class="flex items-center gap-2 mt-2 text-blue-500">
                                    <p class=" text-sm font-[500] uppercase">détails

                                    </p>
                                    <i class='bx bx-right-arrow-alt text-xl'></i>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const categoryContainer = document.querySelector(".categories-container");
            const categoryWidth = categoryContainer.querySelector(".category").offsetWidth;
            let currentIndex = 0;

            const nextButton = document.querySelector(".next-button");
            const prevButton = document.querySelector(".prev-button");

            nextButton.addEventListener("click", function() {
                if (currentIndex < categoryContainer.children.length - 1) {
                    currentIndex++;
                    updateCarousel();
                } else {
                    currentIndex = 0;
                    updateCarousel();
                }
            });
            prevButton.addEventListener("click", function() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                } else {
                    currentIndex = categoryContainer.children.length - 1;
                    updateCarousel();
                }
            });

            function updateCarousel() {
                const translateX = -currentIndex * categoryWidth;
                categoryContainer.style.transform = `translateX(${translateX}px)`;
            }
        });
    </script>
</body>

</html>
