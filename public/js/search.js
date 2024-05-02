$(document).ready(function () {
    function search() {
        var query = $('#searchInput').val().trim();

        $.ajax({
            url: '/search',
            type: 'GET',
            data: {
                query: query
            },
            success: function (data) {
                $('.universities-grid').empty();


                if (data.length !== 0) {
                    $.each(data, function (index, university) {
                        var html = `
                            <div class="bg-white shadow-md border-b-2 border-blue-500 overflow-hidden group">
                                <div class="relative overflow-hidden">
                                    <img src="storage/${university.photo}" alt="University Photo" class="w-full h-40 object-cover">
                                </div>
                                <div class="p-3">
                                <div class="flex mt-3 space-x-2">`;
                
                        for (var i = 1; i <= 5; i++) {
                            if (i <= university.ratingUniversity) {
                                html += `
                                    <svg class="w-4 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                    </svg>`;
                            } else {
                                html += `
                                    <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                    </svg>`;
                            }
                        }
                
                        html += `
                                    </div>
                                <h3 class="text-lg mt-2 font-bold text-[#333]">${university.nom}</h3>
                                <div class="mt-6">
                                    <a href="/etablissment/${university.id}" class="flex items-center gap-2 mt-2 text-blue-500">
                                        <p class="text-xs font-[500] uppercase">détails</p>
                                        <i class='bx bx-right-arrow-alt '></i>
                                    </a>
                                </div>
                                </div>
                            </div>
                        `;
                        $('.universities-grid').append(html);
                    });
                } else {
                    var html = `
                    <div class=" text-gray-500  text-lg font-light">
                    <p>Pas de données disponibles</p>
                </div>
                    `;
                    $('.universities-grid').append(html);
                }
                
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    $('#searchInput').on('input', function () {
        search();
    });



});