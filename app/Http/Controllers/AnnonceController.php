<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Http\Requests\CreateAnnonceRequest;

class AnnonceController extends Controller
{

    public function index()
    {
        $annonces = Annonce::all();
        return view('Admin.publicity', ['annonces' => $annonces]);
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

    public function edit($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('Admin.editPublicity', ['editAnnonce' => $annonce]);
    }

    public function update(CreateAnnonceRequest $request, $id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->update($request->validated());
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('uploads', 'public');
            $annonce->update(['photo' => $path]);
        }
        return redirect('/publicity')->with('success', 'Annonce mise à jour avec succès.');
    }


    public function destroy($id)
    {
        $annonce = annonce::findOrFail($id);
        $annonce->delete();
        return redirect()->back()->with('success', 'annonce supprimé avec succès.');
    }
}
