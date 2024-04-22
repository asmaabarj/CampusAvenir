<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Publication;
use App\Models\Etablissment;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;


class CommentaireController extends Controller
{

    public function index()
    {
    }


    public function create()
    {
    }

 
    public function store(CreateCommentRequest $request)
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
    public function destroy(string $id)
    {
        //
    }
}
