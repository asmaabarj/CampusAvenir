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
            <a href="javascript:void(0)">
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

            </div>
            <ul id="collapseMenu"
                class='lg:!flex max-lg:hidden max-lg:w-full lg:space-x-10 max-lg:space-y-4 max-lg:my-4'>
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
                        class='absolute hidden group-hover:block shadow-lg bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50'>
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
                        class='absolute hidden group-hover:block shadow-lg bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px]'>
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
        <section class="bg-url h-screen items-center justify-center mt-16 flex"
            style="background-image: url('{{ asset('storage/images/herosection.png') }}');">
            <div class="text-center text-white">
                <h1 class="font-bold text-5xl">Trouvez Votre <span class="bg-blue-500/60 px-3 pb-2 rounded">Avenir</span> Dès
                    Aujourd'hui !</h1>
                <p class="font-semibold text-3xl mt-6">Découvrez Le Guide Ultime Des Universités à Travers Le Maroc </p>
            </div>
        </section>
        <section>
            <div class="font-[sans-serif] bg-gray-100">
                <div class="px-8 py-12 text-center  text-gray-700  shadow-xl">
                    <div class="max-w-5xl mx-auto">
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
        <section class=" h-[55vh] bg-no-repeat  bg-cover items-center justify-center  flex"
            style="background-image: url('{{ asset('storage/images/Rectangle.png') }}');">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 max-md:max-w-lg mx-auto gap-12">
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
        <section class="mt-6">
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

        <section class="mt-14">
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
                    <button type="button" class="px-2 h-[30px]  mr-8 rounded text-white text-xs border-none outline-none bg-[#006AE5] hover:bg-blue-700">View All</button>
                </div>
                        
                <!-- Carousel Container -->
                <div class="carousel relative lg:w-[30vw]   overflow-hidden">
                    <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 1" class="mt-4 h-52 w-full object-cover " />
                    <img src="https://readymadeui.com/prediction.webp" alt="Blog Post 3" class="mt-4 h-52 w-full object-cover hidden " />
                    <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 2" class="mt-4 h-52 w-full object-cover hidden" />
                </div>
                        
                <div class="controls flex justify-between items-center  mt-4">
                    <button class="prev-button px-2 py-1  text-white  border-none outline-none bg-gray-400/50 hover:bg-gray-500"><i class=' text-xl bx bx-chevron-left'></i></button>
                    <button class="next-button px-2 py-1  text-white  border-none outline-none bg-gray-400/50 hover:bg-gray-500"><i class=' text-xl bx bx-chevron-right'></i></button>
                </div>
                        
                <div class="p-6 text-center">
                    <p class="text-medium font-medium text-center text-blue-500">Planification drive</p>
                    <p id="event-date-time" class="text-medium font-medium text-center mt-4">
                        <span class='bx bxs-calendar text-blue-500'><span class="text-black">2 Jul 2023 </span></span>
                        <span class='bx bx-time-five text-blue-500'><span class="text-black"> 9pm</span></span>
                    </p>
                    <button type="button" class="px-4 py-2 mt-6 rounded text-[#7E767C] text-sm tracking-wider border-[#D9D9D9] border-2 outline-none bg-[#006AE5]/40">Read More</button>
                </div>
            </div>
            
            

                
            </div>
        </section>
    </main>
<script>document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll('.carousel img');
    const eventDateTime = document.getElementById('event-date-time');
    let index = 0;

    const events = [
        { imageUrl: 'https://readymadeui.com/hacks-watch.webp', date: '2 Jul 2023', time: '9pm' },
        { imageUrl: 'https://readymadeui.com/prediction.webp', date: '8 Jul 2025', time: 'pm' },
        { imageUrl: 'https://readymadeui.com/Imagination.webp', date: '6 Jul 2024', time: '10pm' }
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
