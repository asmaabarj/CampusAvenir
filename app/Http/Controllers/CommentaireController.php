<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use App\Models\Publication;

class CommentaireController extends Controller
{

    public function index()
    {
    }


    public function create()
    {
    }

 
    public function store(Request $request)
{
    $request->validate([
        'contenue' => 'required|string|max:255',
        'publication_id' => 'required|integer|exists:publications,id',
    ]);

    $comment = new Commentaire([
        'contenue' => $request->input('contenue'),
        'user_id' => auth()->id(),
        'commentable_type' => Publication::class,
        'commentable_id' => $request->input('publication_id')
    ]);

    $comment->save();

    return response()->json([
        'success' => true,
        'comment' => [
            'contenue' => $comment->contenue,
            'user' => [
                'nom' => $comment->user->nom,
                'prenom' => $comment->user->prenom
            ],
        ]
    ]);
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
