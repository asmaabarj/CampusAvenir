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

<header
    class='fixed left-0 right-0 top-0 font-sans min-h-[60px] z-50 bg-gradient-to-r from-[#FFFBF6] via-[#EFEEEC] shadow-xl to-[#E4E4E4]'>
    <div class='flex flex-wrap items-center justify-between px-10 py-3 gap-4 relative'>
        <a href="">
            <h1
                class="bg-gradient-to-r from-[#69A8F3] via-[#5102F8] font-bold text-2xl to-indigo-400 inline-block text-transparent bg-clip-text">
                CampusAvenir</h1>
        </a>

        <div class='flex items-center border-l-2 pl-5 border-gray-600 max-lg:ml-auto gap-2 lg:order-1'>

            <a href="/login"
                class="py-2.5 min-w-[110px] bg-gradient-to-r from-[#69A8F3] rounded text-white text-center text-sm  font-medium border-none outline-none bg-[#5102F8] ">
                Se connecter
            </a>
            <a href="/register"
                class="py-2.5 min-w-[110px] bg-gradient-to-r from-[#69A8F3] rounded text-white text-center text-sm font-medium border-none outline-none bg-[#5102F8] ">
                S'inscrire
            </a>
        </div>
        <ul class='lg:!flex max-lg:hidden max-lg:w-full lg:space-x-10 max-lg:space-y-4 max-lg:my-4'>
            <li class='max-lg:border-b max-lg:py-2'>
                <a href='/' class='hover:text-blue-600 text-[15px] font-bold text-blue-600 block'>Accueil</a>
            </li>
            <li class='group max-lg:border-b max-lg:py-2 relative'>
                <a href='javascript:void(0)'
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
                    class='absolute hidden group-hover:block shadow-lg bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50'>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Sante</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>ingenieurie</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Connexion</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>S'inscrire</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Blog</a></li>
                </ul>
            </li>
            <li class='group max-lg:border-b max-lg:py-2 relative'>
                <a href='javascript:void(0)'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>
                    Etablissments
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                            data-name="16" data-original="#000000" />
                    </svg>
                </a>
                <ul
                    class='absolute hidden group-hover:block shadow-lg bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px]'>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>au public</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>au prive</a></li>
                </ul>
            </li>
            <li class='max-lg:border-b max-lg:py-2'><a href='/'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Concours</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='/Faqs'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Faqs</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='javascript:void(0)'
                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a></li>
        </ul>
    </div>
</header>

<div class="bg-gray-100 p-8 mt-16 font-[sans-serif] ">
    <div class="bg-white rounded-lg shadow w-[85%] mx-auto">
        <div class="p-6 border-b border-gray-300">
            <h2 class="text-3xl font-extrabold text-indigo-800">Frequently Asked Questions</h2>
            <p class="text-gray-600 mt-4 text-sm">Explore our comprehensive FAQ to find answers to common queries.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1  gap-8 p-6 ">
            <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-indigo-700 mb-2">How can I create an account?</h3>
                <p class="text-gray-600 text-sm">Creating an account is easy! Click on the "Sign Up" button and follow
                    the simple steps to get started.</p>
            </div>
            <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-indigo-700 mb-2">Is there a mobile app available?</h3>
                <p class="text-gray-600 text-sm">Yes, we offer a mobile app for both iOS and Android. Visit the App
                    Store or Google Play to download it.</p>
            </div>
            <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                <h3 class="text-lg font-semibold text-indigo-700 mb-2">How can I reset my password?</h3>
                <p class="text-gray-600 text-sm">To reset your password, go to the login page and click on the "Forgot
                    Password" link. Follow the instructions sent to your email.</p>
            </div>
        </div>
    </div>
</div>

<section id="categories-container" class="py-8 w-[92%] mx-auto">
    <div class="carousel-container relative overflow-hidden">
        <button
            class="prev-button absolute top-1/2 left-0 transform -translate-y-1/2 cursor-pointer p-4 bg-gray-600 text-white z-10">
            <img src="../Img/previouse.png" alt="">
        </button>
        <div class="viewport">
            <div class="categories-container flex space-x-4 transition-transform duration-300">
                <!-- Category cards -->

                <div
                    class="category flex-none bg-white cursor-pointer w-[44vw] rounded-lg overflow-hidden h-[50vh] shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex h-full">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                            class="w-[17vw] h-full object-cover" />
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your Imagination</h3>
                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN DOE</span>
                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc
                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumsan, nunc et </p>
                            <a href="javascript:void(0);"
                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div
                    class="category flex-none bg-white cursor-pointer w-[44vw] rounded-lg overflow-hidden h-[50vh] shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex h-full">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                            class="w-[17vw] h-full object-cover" />
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your Imagination</h3>
                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN DOE</span>
                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc
                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumsan, nunc et </p>
                            <a href="javascript:void(0);"
                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div
                    class="category flex-none bg-white cursor-pointer w-[44vw] rounded-lg overflow-hidden h-[50vh] shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex h-full">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                            class="w-[17vw] h-full object-cover" />
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your Imagination</h3>
                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN DOE</span>
                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc
                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumsan, nunc et </p>
                            <a href="javascript:void(0);"
                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div
                    class="category flex-none bg-white cursor-pointer w-[44vw] rounded-lg overflow-hidden h-[50vh] shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex h-full">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                            class="w-[17vw] h-full object-cover" />
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your Imagination</h3>
                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN DOE</span>
                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc
                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumsan, nunc et </p>
                            <a href="javascript:void(0);"
                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <div
                    class="category flex-none bg-white cursor-pointer w-[44vw] rounded-lg overflow-hidden h-[50vh] shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex h-full">
                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1"
                            class="w-[17vw] h-full object-cover" />
                        <div class="p-4">
                            <h3 class="text-xl font-bold text-gray-800">A Guide to Igniting Your Imagination</h3>
                            <span class="text-sm block text-gray-400 mt-2">10 FEB 2023 | BY JOHN DOE</span>
                            <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumlanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc
                                et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan,
                                nunc et tempus blanditLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                accumsan, nunc et </p>
                            <a href="javascript:void(0);"
                                class="mt-4 inline-block text-blue-600 text-sm hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat other category cards as necessary -->
            </div>
        </div>
        <button
            class="next-button absolute top-1/2 right-0 transform -translate-y-1/2 cursor-pointer p-4 bg-gray-600 text-white z-10">
            <img src="../Img/next.png" alt="">
        </button>
    </div>
</section>

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

</html>
