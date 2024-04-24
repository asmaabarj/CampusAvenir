$(document).ready(function () {



    function getAllComments() {
        $('#comment-container').empty();
        var postId = $('#comment-container').data('poste-id');
        console.log(postId);
        $.ajax({
            url: '/comments/' + postId,
            type: 'GET',
            success: function (response) {
                console.log(response);
                if (response.hasOwnProperty('comments')) {
                    response.comments.forEach(function (comment) {
                        var commentHTML = `
                        <div class="px-4 py-2 pt-4 flex gap-2">
     <img src="{{ asset('storage/' . ${comment.user.photo}) }}"

        class="w-9 h-9 rounded-full" />
    <div>
        <h4 class="text-sm  font-[600]">
            ${comment.user.nom}
            ${comment.user.prenom}
        </h4>
        <p class="text-xs text-gray-700">
            ${comment.created_at}
        </p>
    </div>
    </div>
    <p class="mx-5 text-sm font-light text-gray-700">
        ${comment.contenue }
    </p>
           
       
       
        `;
                        $('#comment-container').append(commentHTML);
                    });
                } else {
                    console.log("No 'comments' property found in the response.");
                }
            },

            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    }












    $('#commentForm').submit(function (event) {
        event.preventDefault();

        const form = $(this);
        const publicationId = form.data("publication-id");
        const formData = form.serialize();

        $.ajax({
            type: "POST",
            url: "/commentaires/store",
            data: formData,

            success: function (data) {
                if (data.success) {
                    getAllComments();
                    $('#commentForm')[0].reset();

                } else {
                    getAllComments();

                    $('#commentForm')[0].reset();

                    console.error("Failed to add comment:", data.error);
                }

            },
            error: function (xhr, status, error) {
                console.error("Error adding comment:", error);
            }
        });
    });
});
