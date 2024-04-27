$(document).ready(function() {

    function ifFavorit() {
        const universityId = $('#favoriForm').data('university-id');
        console.log(universityId);
        $.ajax({
            type: 'GET',
            url: '/favoritStyle/' + universityId,
            success: function(response) {
                console.log(response);
                if (response.hasOwnProperty('etablissment')) {
                    const etablissment = response.etablissment
                    if (etablissment.favori == '1') {
                        $('#add-to-favorites').addClass('hidden');
                        $('#remove-from-favorites').removeClass('hidden');
                    } else {
                        $('#add-to-favorites').removeClass('hidden');
                        $('#remove-from-favorites').addClass('hidden');
                    }
                }
            }
        })

    }
    ifFavorit()
    $('#favoriForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: "/favoris/store",
            data: formData,
            success: function(data) {
                ifFavorit()
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });

}); 