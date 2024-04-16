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
        <section>
            <div class="bg-gray-100 mx-10 gap-10  px-4 py-10 mt-12 font-[sans-serif] ">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-16 gap-x-8 mt-8">
                    @foreach ($universities as $university)
                        <div class="bg-white cursor-pointer border-b-2 border-blue-500 overflow-hidden group">
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $university->photo) }}" alt="Blog Post 1"
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
                                <h3 class="text-xl font-bold text-[#333]">{{ $university->nom }}
                                </h3>

                                <div class="flex justify-between mt-6 items-center">
                                    <form action="/favorit" method="POST">
                                        @csrf
                                        <input type="hidden" name="favori" value="{{ $isFavoritedData[$university->id] ? '0' : '1' }}">
                                        <input type="hidden" name="etablissment_id" value="{{ $university->id }}">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 122.88 107.39">
                                                <path class="hover:fill-[#cccccc] {{ $isFavoritedData[$university->id] ? 'fill-[#cccccc]' : 'fill-[#ed1b24]' }}"
                                                    d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                                            </svg>
                                        </button>
                                    </form>
                                    <div class="flex items-center gap-2 mt-2 text-blue-500">
                                        <p class=" text-sm font-[500] uppercase">détails</p>
                                        <i class='bx bx-right-arrow-alt text-xl'></i>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    @include('components.Footer')
</body>

</html>
