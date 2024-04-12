<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAnnonceRequest;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(CreateAnnonceRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('uploads', 'public');
            $validatedData['photo'] = $path;
        }
        $annonce = new Annonce([
            'titre' => $validatedData['titre'],
            'date' => $validatedData['date'],
            'temps' => $validatedData['temps'],
            'lieu' => $validatedData['lieu'],
            'photo' => $validatedData['photo'],
            'description' => $validatedData['description'],
        ]);
        $annonce->save();

        return redirect()->back()->with('success', 'L\'annonce a été ajoutée avec succès.');
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
