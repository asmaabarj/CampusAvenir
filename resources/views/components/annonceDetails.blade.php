@foreach ($annonces as $annonce)
<div id='pop{{ $annonce->id }}' onclick="toggleModal('pop{{ $annonce->id }}')"
    class="fixed top-0 bottom-0 left-0 right-0 bg-black/60 z-50 overflow-y-scroll hidden">
    <div class="">
        <div
            class="font-[sans-serif] w-[60%]  fixed   left-0 right-0  px-[8%] p-8 rounded-md mx-auto shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] bg-white  mt-24 max-h-[80vh] overflow-y-auto">
            <h1 class="text-4xl font-extrabold my-7  ">{{ $annonce->titre }}</h1>
            <img src="{{ asset('storage/' . $annonce->photo) }}" class=" w-full  " />
            <div class="text-left ">
                @if ($annonce->date != null)
                    <p class="text-sm text-right text-[#333] leading-relaxed mt-[13px]">
                        <span class="text-[#555] font-bold bg-blue-200 py-4 px-4  "> date
                            :{{ $annonce->date }}
                        </span>
                    </p>
                @endif
                <p class="text-xl mt-12  text-[#444] leading-relaxed">
                    {{ $annonce->description }}.</p>
                @if ($annonce->temps != null)
                    <h6 class="text-base mt-5 mb-1 font-bold text-gray-900">
                        <i class='bx bx-time-five'></i>
                        {{ $annonce->temps }}
                    </h6>
                @endif
                @if ($annonce->lieu != null)
                    <h6 class="text-base mb-5 font-bold text-gray-900">
                        <i class='bx bx-map'></i>
                        {{ $annonce->lieu }}
                @endif
                </h6>


            </div>
        </div>
    </div>
</div>
@endforeach