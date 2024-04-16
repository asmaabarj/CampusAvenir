<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateUniversityRequest;

class EtablissmentController extends Controller
{
    public function index()
    {
        $etablissments = Etablissment::all();
        return view('Admin.university', ['etablissments' => $etablissments]);
    }

    public function create()
    {
        $domaines = Domaine::all();
        return view('Admin.addUniversity', ['domaines' => $domaines]);
    }

    public function store(CreateUniversityRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            $data['photo'] = $path;
        }

        Etablissment::create($data);

        return redirect()->back()->with('success', 'Établissement ajouté avec succès.');
    }

    public function edit($id)
    {
        $etablissment = Etablissment::findOrFail($id);
        $domaines = Domaine::all();

        return view('Admin.editUniversity', [
            'editEtablissment' => $etablissment,
            'domaines' => $domaines,
        ]);
    }

    public function update(CreateUniversityRequest $request, $id)
    {
        $data = $request->validated();
        $etablissment = Etablissment::findOrFail($id);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            $data['photo'] = $path;
        }

        $etablissment->update($data);

        return redirect('/university')->with('success', 'Établissement mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $etablissment = Etablissment::findOrFail($id);
        $etablissment->delete();
        return redirect()->back()->with('success', 'Établissement supprimé avec succès.');
    }

    public function show()
    {

        $universities = Etablissment::all();
        $domainesnav = Domaine::inRandomOrder()
            ->limit(5)
            ->get();
        $favorites = favoris::where('favori', '1')
            ->where('user_id', Auth::id())
            ->get();
        return view('universities', [
            'universities' => $universities,
            'domainesnav' => $domainesnav,
            'favorites' => $favorites
        ]);
    }
}
