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

      
        <div class="mt-20">        
            <section class=" bg-opacity-30 py-10 sm:py-16 lg:py-24">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                        <div>
                            <p class="text-base font-semibold tracking-wider text-blue-600 uppercase">votre Guide Ultime CampusAvenir</p>
                            <h1 class="mt-4 text-4xl font-bold text-black lg:mt-8 sm:text-5xl xl:text-6xl">{{$domain->titre}}</h1>
                            <p class="mt-4 text-base text-black lg:mt-8 sm:text-lg">{{$domain->description}}</p>
        
                        </div>
        
                        <div>
                            <img class="w-full rounded shadow-md" src="{{ asset('storage/' . $domain->photo) }}">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-24  gap-8 mt-8 universities-grid">
            @foreach ($universities as $university)
                <div class="bg-white border-b-2 border-blue-500 overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $university->photo) }}" alt="University Photo"
                            class="w-full h-40 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#333]">{{ $university->nom }}</h3>
                        <div class=" flex space-x-2 mt-2">
                            @php
                                $averageRating = $university->reviews()->avg('note');
                                $totalStars = 5;
                                $filledStars = round($averageRating);
                            @endphp
                            @for ($i = 1; $i <= $totalStars; $i++)
                                @if ($i <= $filledStars)
                                    <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                    </svg>
                                @else
                                    <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                    </svg>
                                @endif
                            @endfor
                            
                        </div>
                        <div class="flex justify-between mt-6 items-center">
                            <a href="/etablissment/{{$university->id}}" class="flex items-center gap-2 mt-2 text-blue-500">
                                <p class="text-sm font-[500] uppercase">détails</p>
                                <i class='bx bx-right-arrow-alt text-xl'></i>
                            </a>                                
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </main>
    
    <div class="mt-16">
    @include('components.minifooter')
</div>

        