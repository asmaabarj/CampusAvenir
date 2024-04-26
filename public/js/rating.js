$('#RatingForm').submit(function(e) {
    e.preventDefault();
    var formData = $(this).serialize();

    $.ajax({
        type: 'POST',
        url: "/ratings/store",
        data: formData,
        success: function(data) {
            alert('Merci Pour votre Note!')
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});  