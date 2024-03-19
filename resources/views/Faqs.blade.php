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
<header class='fixed left-0 right-0 top-0 font-sans min-h-[60px] z-50 bg-gradient-to-r from-[#FFFBF6] via-[#EFEEEC] shadow-lg shadow-gray-500 to-[#E4E4E4]'>
    <div class='flex flex-wrap items-center justify-between px-10 py-3 gap-4 relative'>
        <a href="">
            <h1 class="bg-gradient-to-r from-[#69A8F3] via-[#5102F8] font-bold text-2xl to-indigo-400 inline-block text-transparent bg-clip-text">
                CampusAvenir</h1>
        </a>

        <div class='flex items-center border-l-2 pl-5 border-gray-600 max-lg:ml-auto gap-2 lg:order-1'>
            
            <a href="/login" class="py-2.5 min-w-[110px] bg-gradient-to-r from-[#69A8F3] rounded text-white text-center text-sm tracking-wider font-medium border-none outline-none bg-[#5102F8] active:from-[#69A8F3]">
                Se connecter
            </a>
            <a href="/register" class="py-2.5 min-w-[110px] bg-gradient-to-r from-[#69A8F3] rounded text-white text-center text-sm tracking-wider font-medium border-none outline-none bg-[#5102F8] active:from-[#69A8F3]">
                S'inscrire
            </a>
        </div>
        <ul id="collapseMenu" class='lg:!flex max-lg:hidden max-lg:w-full lg:space-x-10 max-lg:space-y-4 max-lg:my-4'>
            <li class='max-lg:border-b max-lg:py-2'>
                <a href='/' class='hover:text-blue-600 text-[15px] font-bold text-blue-600 block'>Accueil</a>
            </li>
            <li class='group max-lg:border-b max-lg:py-2 relative'>
                <a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>
                    Pages
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block" viewBox="0 0 24 24">
                        <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" data-original="#000000" />
                    </svg>
                </a>
                <ul class='absolute hidden group-hover:block shadow-lg bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50'>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>À propos</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Connexion</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>S'inscrire</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Blog</a></li>
                </ul>
            </li>
            <li class='group max-lg:border-b max-lg:py-2 relative'>
                <a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>
                    Blog
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block" viewBox="0 0 24 24">
                        <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" data-original="#000000" />
                    </svg>
                </a>
                <ul class='absolute hidden group-hover:block shadow-lg bg-white px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px]'>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Aliments</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Vente</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Marketing</a></li>
                    <li class='border-b py-2 '><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Investissement</a></li>
                </ul>
            </li>
            <li class='max-lg:border-b max-lg:py-2'><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Équipe</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>À propos</a></li>
            <li class='max-lg:border-b max-lg:py-2'><a href='javascript:void(0)' class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a></li>
        </ul>
    </div>
</header>

    <main>
        <div class="bg-white px-6 font-[sans-serif] my-28 mx-auto w-[80%]">
            <h2 class="text-3xl font-extrabold text-gray-700 mb-10">Frequently Asked Questions</h2>
            <div class="space-y-8 max-w-8xl">
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-semibold text-[#333]">How can I create an account?</h3>
                  <p class="text-sm text-[#333] mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.</p>
                </div>
              </div>
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-semibold text-[#333]">Is there a mobile app available?</h3>
                  <p class="text-sm text-[#333] mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua Sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.</p>
                </div>
              </div>
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-semibold text-[#333]">How can I reset my password?</h3>
                  <p class="text-sm text-[#333] mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
              <div class="flex items-start">
                <div class="flex-shrink-0">
                  <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-semibold text-[#333]">How do I update my account information?</h3>
                  <p class="text-sm text-[#333] mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.</p>
                </div>
              </div>
            </div>
          </div>
    </main>