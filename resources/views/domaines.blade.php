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

<body class=" bg-gray-50">
    @include('components.navbar')
    @include('components.Alert')
    <main>

        <section class="mt-12 px-6  ">
            <div class="">
                <section class="bg-[#FCF8F1] bg-opacity-30 sm:py-16 lg:py-24">
                    <div class="px-4 mx-auto max-w-6xl sm:px-6 lg:px-12">
                        <div class="grid items-center lg:flex grid-cols-1 gap-12 lg:justify-around">
                            <div>
                                <p class="text-base font-semibold tracking-wider text-blue-600 uppercase">votre Guide
                                    Ultime CampusAvenir</p>
                                <h1 class="mt-4 text-3xl font-bold text-black lg:mt-8 sm:text-5xl xl:text-6xl">
                                    Découverte de Votre Domaine Idéal</h1>
                                <p class="mt-4 text-base text-black lg:mt-8 sm:text-xl">Explorons les différents
                                    domaines disponibles afin de trouver l'établissement parfait pour vous</p>
                                    @if (!auth()->check())                                    <a href="/register" title=""
                                        class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 bg-blue-300 rounded-full lg:mt-16 hover:bg-blue-400 focus:bg-blue-400"
                                        role="button">
                                        Rejoignez gratuitement
                                        <svg class="w-6 h-6 ml-8 -mr-2" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>

                                    <p class="mt-5 text-gray-600">Vous nous avez déjà rejoints ? <a href="/login"
                                            title=""
                                            class="text-black transition-all duration-200 hover:underline">Connectez-vous</a>
                                    </p>
                                    @endif

                            </div>

                            <div>
                                <img class="w-[80vh]" src="{{ asset('storage/images/domaines.jpeg') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class=" bg-gray-50 font-[sans-serif] my-4">
                <div class="max-w-6xl mx-auto">

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-md:max-w-lg mx-auto">
                        @foreach ($domaines as $domaine)
                            <div class=" bg-gray-50   overflow-hidden  relative top-0 ">
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
        </section>
    </main>
    @include('components.minifooter')
</body>

</html>
