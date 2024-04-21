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
    @include('components.Alert')
    <main>
        <section class="py-10 bg-gray-100 lg:py-0">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid items-stretch grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-12 xl:gap-x-24">
                    <div class="h-full  lg:order-2 lg:mt-48">
                        <div class="relative h-full lg:h-auto">
                            <div class="absolute w-full h-full  overflow-hidden bg-gradient-to-r from-blue-950 to-blue-100 top-6 left-6 xl:left-6 lg:top-6 lg:scale-y-105 lg:origin-top">
                                <img class="object-cover object-right w-full h-full scale-150" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/2/lines.svg" alt="" />
                            </div>
                            <div class="relative lg:top-5">
                                <img class="" src="{{ asset('storage/' . $university->photo) }}" alt="" />
                            </div>
                        </div>
                    </div>
        
                    <div class="flex items-center justify-start py-10 lg:order-1 sm:py-16 lg:py-24 xl:py-48">
                        <div>
                            <h2 class="mt-8 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">{{ $university->nom }}</h2>
                            <div class="flex  items-center mt-9">
                                <img src="{{ asset('storage/images/check.png') }}" alt="" class="w-10 h-10">
                            <p class="text-xl leading-relaxed text-gray-700 ">50,000+ learners enrolled</p>
                            </div>
                            <p class="mt-6 text-xl leading-relaxed text-gray-700">Velit officia conse duis enim velit mollit. Exercit ation veniam consequat sunt nostrud amet.</p>
                            <a href="#" title="" class="inline-flex items-center justify-center px-10 py-4 mt-12 text-base font-semibold text-black transition-all duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:bg-blue-700" role="button"> Explore more </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
</main>