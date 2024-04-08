                   {{-- <div class="bg-blue-50 rounded cursor-pointer mb-6 border-blue-500 overflow-hidden group">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg py-4 px-6 font-semibold text-[#006AE5]">Uncoming Events</h2>
                        <button type="button"
                            class="px-2 h-[30px]  mr-8 rounded text-white text-xs border-none outline-none bg-[#006AE5] hover:bg-blue-700">View
                            All</button>
                    </div>

                    <!-- Carousel Container -->
                    <div class="carousel relative lg:w-[30vw]   overflow-hidden">
                        <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 1"
                            class="mt-4 h-52 w-full object-cover " />
                        <img src="https://readymadeui.com/prediction.webp" alt="Blog Post 3"
                            class="mt-4 h-52 w-full object-cover hidden " />
                        <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 2"
                            class="mt-4 h-52 w-full object-cover hidden" />
                    </div>

                    <div class="controls flex justify-between items-center  mt-4">
                        <button
                            class="prev-button px-2 py-1  text-white  border-none outline-none bg-gray-400/50 hover:bg-gray-500"><i
                                class=' text-xl bx bx-chevron-left'></i></button>
                        <button
                            class="next-button px-2 py-1  text-white  border-none outline-none bg-gray-400/50 hover:bg-gray-500"><i
                                class=' text-xl bx bx-chevron-right'></i></button>
                    </div>

                    <div class="p-6 text-center">
                        <p class="text-lg font-semibold text-center text-gray-700">Planification drive</p>
                        <button type="button"
                            class="px-4 py-2 mt-6 rounded text-[#7E767C] text-sm tracking-wider border-[#D9D9D9] border-2 outline-none bg-[#006AE5]/40">Voir
                            Plus</button>
                    </div>
                </div> --}}
   
   {{-- <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }

        document.addEventListener("DOMContentLoaded", function() {
            const images = document.querySelectorAll('.carousel img');
            const eventDateTime = document.getElementById('event-date-time');
            let index = 0;

            const events = [{
                    imageUrl: 'https://readymadeui.com/hacks-watch.webp',
                    date: '2 Jul 2023',
                    time: '9pm'
                },
                {
                    imageUrl: 'https://readymadeui.com/prediction.webp',
                    date: '8 Jul 2025',
                    time: '6pm'
                },
                {
                    imageUrl: 'https://readymadeui.com/Imagination.webp',
                    date: '6 Jul 2024',
                    time: '10pm'
                }
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
    </script> --}}