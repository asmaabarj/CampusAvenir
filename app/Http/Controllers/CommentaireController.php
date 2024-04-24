<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Publication;
use App\Models\Etablissment;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;


class CommentaireController extends Controller
{

    public function index($id)
    {
        $comments = Commentaire::where('commentable_id', $id)->with('user')->get();

        return response()->json([
            'success' => true,
            'comments' => $comments,
        ]);
    }


    public function create()
    {
    }


    public function store(CreateCommentRequest $request)
    {
        $validatedData = $request->validated();

        $comment = new Commentaire([
            'contenue' => $validatedData['contenue'],
            'user_id' => auth()->id(),
        ]);

        $commentableType = $request->has('publication_id') ? Publication::class : Etablissment::class;
        $commentableId = $request->input('publication_id') ?? $request->input('etablissment_id');

        $commentableModel = $commentableType::find($commentableId);

        if (!$commentableModel) {
            return response()->json(['error' => 'Commentable model not found'], 404);
        }

        $commentableModel->commentaires()->save($comment);

        return response()->json(['success' => true, 'comment' => $comment], 200);
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

public function destroy($id)
{
    $comment = Commentaire::find($id);

    if (!$comment) {
        return response()->json(['error' => 'Comment not found'], 404);
    }

    // Ensure the authenticated user is authorized to delete the comment
    if ($comment->user_id !== auth()->id()) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    try {
        $comment->delete();
        return response()->json(['success' => true], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to delete comment'], 500);
    }
}

    

}
