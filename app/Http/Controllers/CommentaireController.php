<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Publication;
use App\Models\Etablissment;
use App\Http\Requests\CreateCommentRequest;


class CommentaireController extends Controller
{

    public function index($id)
    {
        $comments = Commentaire::where('commentable_id', $id)->where('commentable_type','App\Models\Publication')->with('user')->get();
        return response()->json([
            'success' => true,
            'comments' => $comments,
        ]);
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

 
public function destroy($id)
{
    $comment = Commentaire::find($id);
  
       if (!$comment) {
        return response()->json(['error' => 'Comment not found'], 404);
    }
    try {
        $comment->delete();
        return response()->json(['success' => true], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to delete comment'], 500);
    }
}   

public function universityComments(CreateCommentRequest $request){
    {
        $request->validated();
    
        $commentableType = $request->has('publication_id') ? Publication::class : Etablissment::class;
        $commentableId = $request->input('publication_id') ?? $request->input('etablissment_id');
    
        $commentableModel = $commentableType::find($commentableId);
        if (!$commentableModel) {
            return response()->json(['error' => 'Commentable model not found'], 404);
        }
    
        $comment = new Commentaire([
            'contenue' => $request->input('contenue'),
            'user_id' => auth()->id(),
            'commentable_type' => $commentableType,
            'commentable_id' => $commentableId,
        ]);
    
        $comment->save();
    
        return redirect()->back()->with('success', 'Le commentaire a été ajouté avec succès.');
    }
}
}
