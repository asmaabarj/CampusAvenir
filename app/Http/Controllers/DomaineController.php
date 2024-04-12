<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDomaineRequest;

class DomaineController extends Controller
{

    public function index()
    {
        $domaines = Domaine::all();
        return view('Admin.domaine', ['domaines' => $domaines]);
    }

    public function store(CreateDomaineRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            $validatedData['picture'] = $path;
        }
        $domaine = new Domaine([
            'titre' => $validatedData['titre'],
            'photo' => $validatedData['picture'],
        ]);
        $domaine->save();
        return redirect()->back()->with('success', 'Le domaine a été ajouté avec succès.');
    }

    public function edit($id)
    {
        $domaine = Domaine::findOrFail($id);
        return view('Admin.editDomaine', ['editDomaine' => $domaine]);
    }

    public function update(CreateDomaineRequest $request, $id)
    {
        $validatedData = $request->validated();
        $domaine = Domaine::findOrFail($id);
        $domaine->titre = $validatedData['titre'];
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            $domaine->photo = $path;
        }
        $domaine->save();
        return redirect('/domaine')->with('success', 'Domaine mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $domaine = Domaine::findOrFail($id);
        $domaine->delete();
        return redirect()->back()->with('success', 'Domaine supprimé avec succès.');
    }
}
