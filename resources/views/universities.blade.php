<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    @include('components.navbar')
    @include('components.Alert')

    <main>
        <section>
            <div class="bg-gray-100 mx-10 gap-10  px-4 py-10 mt-12 font-[sans-serif] ">
                <div class="  w-[100%] mt-10">
                    <div
                        class="w-[60%] flex border-[1px] border-blue-600 overflow-hidden  max-w-5xl h-[46px] rounded  font-[sans-serif]">
                        <input type="text" id="searchInput" placeholder="Search Something..." class="w-full outline-none bg-white text-gray-600 text-sm px-4 py-4 " />
                        <button type='button'
                            class="flex items-center justify-center bg-[#007bff] px-4    text-sm text-white">
                            Rechercher
                        </button>
                    </div>
                    <div class="w-[70%] flex gap-3 mt-5   ">
                        <div class="mb-2 w-[36%]">
                            <select name="type"
                                class=" px-4 py-3 w-full border text-gray-600  rounded focus:outline-none border-blue-500"
                                required>
                                <option value="">Select type</option>
                                <option value="">Select Category</option>
                                <option value="">Select Category</option>
                            </select>
                        </div>
                        <div class="mb-2 w-[36%] ">
                            <select name="type"
                                class="px-4 py-3 border w-full text-gray-600 rounded focus:outline-none border-blue-600 "
                                required>
                                <option value="">Select type</option>
                                <option value="">Select Category</option>
                                <option value="">Select Category</option>
                            </select>
                        </div>
                        <button type="button"
                            class="px-4 h-[45px] rounded text-white text-sm tracking-wider font-medium outline-none border-2 border-blue-500 bg-[#007bff] hover:bg-transparent hover:text-black transition-all duration-300">Confirmer</button>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                    @foreach ($universities as $university)
                        <div class="bg-white  border-b-2 border-blue-500 overflow-hidden group">
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $university->photo) }}" alt="Blog Post 1"
                                    class="w-full h-60 object-cover " />
                                {{-- <div class="ml-5 flex space-x-1 mt-6">
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
                                </div> --}}
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#333]">{{ $university->nom }}
                                </h3>

                                <div class="flex justify-between mt-6 items-center">
                                    @php
                                        $isFavorited = $favorites->contains('etablissment_id', $university->id);
                                    @endphp
                                    <form id="favoriForm{{ $university->id }}" action="/favorit" class=""
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="favori" value="{{ $isFavorited ? '0' : '1' }}">
                                        <input type="hidden" name="etablissment_id" value="{{ $university->id }}">
                                        <button type="submit" id="favButton">
                                            <input type="checkbox" id="favCheckbox" style="display: none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 122.88 107.39">
                                                <path id="favIcon" d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z"
                                                class="{{ $isFavorited ? 'fill-[#ed1b24] hover:fill-gray-400' : 'fill-gray-300 hover:fill-[#ed1b24]' }}">
                                            </svg>
                                        </button>
                                    </form>
                                    <div class="flex items-center gap-2 mt-2 text-blue-500">
                                        <p class=" text-sm font-[500] uppercase">détails
                                        </p>
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
    <script  src="{{ asset('js/ajaxFavorit.js') }}"></script>
</body>

</html>
