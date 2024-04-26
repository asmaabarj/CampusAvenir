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

<body class="bg-gray-50">
    @include('components.navbar')
    @include('components.Alert')

    <main>
        <section>
            <div class=" mx-10 gap-10  px-4 py-10 mt-12 font-[sans-serif] ">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-24 mt-8 universities-grid">
                    @foreach ($universities as $university)
                        <div class="bg-white border-b-2 border-blue-500 shadow-md overflow-hidden group">
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $university->photo) }}" alt="University Photo"
                                    class="w-full h-40 object-cover">
                            </div>
                            <div class="p-3">
                                <div class=" flex mt-3 space-x-2">
                                    @php
                                        $averageRating = $university->reviews()->avg('note');
                                        $totalStars = 5;
                                        $filledStars = round($averageRating);
                                    @endphp
                                    @for ($i = 1; $i <= $totalStars; $i++)
                                        @if ($i <= $filledStars)
                                            <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                            </svg>
                                        @else
                                            <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                            </svg>
                                        @endif
                                    @endfor
    
                                </div>
                                <h3 class="text-lg mt-2 font-bold text-[#333]">{{ $university->nom }}
                                </h3>
    
    
                                <div class=" mt-6 ">
                                    <a href="/etablissment/{{ $university->id }}"
                                        class="flex items-center gap-2 mt-2 text-blue-500">
                                        <p class="text-xs font-[500] uppercase">détails</p>
                                        <i class='bx bx-right-arrow-alt '></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </section>
    </main>
    <div class="absolute bottom-0 left-0 right-0">
    @include('components.miniFooter')
</div>
</body>

</html>
