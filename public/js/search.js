        $(document).ready(function() {
            function search() {
                var query = $('#searchInput').val().trim();

                $.ajax({
                    url: '/search',
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('.universities-grid').empty();

                        $.each(data, function(index, university) {
                            var html = `
                            <div class="bg-white border-b-2 border-blue-500 overflow-hidden group">
                                <div class="relative overflow-hidden">
                                    <img src="storage/${university.photo}" alt="University Photo" class="w-full h-40 object-cover">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-bold text-[#333]">${university.nom}</h3>
                                    <div class="flex justify-between mt-6 items-center">
                                        ${ (authCheck && userRole === 'user') ?
                                            `<form id="favoriForm${university.id}" action="/favorit" method="POST">
                                                    <input type="hidden" name="etablissment_id" value="${university.id}">
                                                    <button type="submit" class="favorite-button">
                                                        <input type="checkbox" style="display: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 122.88 107.39">
                                                            <path d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" class="favorite-icon fill-gray-300 hover:fill-[#ed1b24]"></path>
                                                        </svg>
                                                    </button>
                                                </form>` : ''}
                                        <div class="flex items-center gap-2 mt-2 text-blue-500">
                                            <p class="text-sm font-[500] uppercase">détails</p>
                                            <i class='bx bx-right-arrow-alt text-xl'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                            $('.universities-grid').append(html);
                        });
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            $('#searchInput').on('input', function() {
                search();
            });



        });