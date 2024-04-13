<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
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
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            $data['photo'] = $path;
        }

        Domaine::create([
            'titre' => $data['titre'],
            'photo' => $data['photo'],
        ]);

        return redirect()->back()->with('success', 'Domaine ajouté avec succès.');
    }

    public function edit($id)
    {
        $domaine = Domaine::findOrFail($id);
        return view('Admin.editDomaine', ['editDomaine' => $domaine]);
    }

    public function update(CreateDomaineRequest $request, $id)
    {
        $data = $request->validated();
        $domaine = Domaine::findOrFail($id);

        $domaine->update([
            'titre' => $data['titre'],
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            $domaine->update(['photo' => $path]);
        }

        return redirect('/domaine')->with('success', 'Domaine mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $domaine = Domaine::findOrFail($id);
        $domaine->delete();
        return redirect()->back()->with('success', 'Domaine supprimé avec succès.');
    }
}
