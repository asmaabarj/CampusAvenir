            $(document).ready(function() {
                $('.commentForm').each(function() {
                    const postId = $(this).data("publication-id");
                    getAllComments(postId);
                });
                

                function getAllComments(postId) {
                    $('#comment-container-' + postId).empty();
                    $.ajax({
                        url: '/comments/' + postId,
                        type: 'GET',
                        success: function(response) {
                            if (response.success) {
                                console.log(response.comments.length);
                                response.comments.forEach(function(comment) {
                                    var createdAt = new Date(comment.created_at);
                                    var formattedDate = createdAt.toLocaleString('fr-FR', {
                                        year: 'numeric',
                                        month: '2-digit',
                                        day: '2-digit',
                                        hour: '2-digit',
                                        minute: '2-digit'
                                    });
                                    var commentHTML = `
                                        <div id="comment-${comment.id}">
                                            <div class="px-4 py-2 pt-4 flex gap-2" >
                                                <img src="storage/${comment.user.photo}" class="w-9 h-9 rounded-full" />
                                                <div>
                                                    <div class="flex gap-3 items-center">
                                                        <h4 class="text-sm font-[600]">
                                                            ${comment.user.nom} ${comment.user.prenom}
                                                        </h4>`;
                                    var authId =@php {{ auth()->id() }} ;
                                    if (authId === comment.user.id) {
                                        commentHTML +=
                                            `<button class="bx bxs-trash cursor-pointer" onclick="deleteComment(${comment.id})"></button>`;
                                    }
                                    commentHTML += `
                                                    </div>
                                                    <p class="text-xs text-gray-700">
                                                        ${formattedDate}
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mx-5 text-sm font-light text-gray-700">
                                                ${comment.contenue}
                                            </p>
                                            </div>`;
                                    $('#comment-container-' + postId).append(commentHTML);
                                });
                            } else {
                                console.log("Error retrieving comments:", response.error);
                            }
                        },
                        error: function(xhr) {
                            console.log("Error retrieving comments:", xhr.responseText);
                        }
                    });
                }

                $('.commentForm').submit(function(event) {
                    event.preventDefault();

                    const form = $(this);
                    const postId = form.data("publication-id");
                    const formData = form.serialize();

                    $.ajax({
                        type: "POST",
                        url: "/commentaires/store",
                        data: formData,
                        success: function(data) {
                            if (data.success) {
                                form[0].reset();
                                getAllComments(postId);
                            } else {
                                console.error("Failed to add comment:", data.error);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error adding comment:", error);
                        }
                    });
                });
            });

            function deleteComment(commentId) {
                console.log(commentId);

                if (confirm("Are you sure you want to delete this comment?")) {
                    $.ajax({
                        url: '/comments/' + commentId,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {

                            if (response.success) {
                                $('#comment-' + commentId).remove();
                            } else {
                                console.error("Failed to delete comment:", response.error);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error deleting comment:", error);
                        }
                    });
                }
            }