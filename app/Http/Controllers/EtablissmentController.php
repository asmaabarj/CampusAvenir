<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateUniversityRequest;

class EtablissmentController extends Controller
{
    public function index()
    {
        $admin = User::findOrFail(Auth::id());

        $etablissments = Etablissment::all();
        return view('Admin.university', ['etablissments' => $etablissments,
                                        'admin'=>$admin
                                        ]);
     }

    public function create()
    {
        $domaines = Domaine::all();
        $admin = User::findOrFail(Auth::id());
        return view('Admin.addUniversity', ['domaines' => $domaines,
                                            'admin'=>$admin
                                            ]);
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
        $admin = User::findOrFail(Auth::id());
        $etablissment = Etablissment::findOrFail($id);
        $domaines = Domaine::all();

        return view('Admin.editUniversity', [
            'editEtablissment' => $etablissment,
            'domaines' => $domaines,
            'admin'=>$admin
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
        $annonces = Annonce::orderBy('created_at', 'desc')->limit(2)->get();
        $domaines = domaine::all();
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
            'favorites' => $favorites,
            'domaines'=>$domaines,
            'annonces'=>$annonces   
        ]);
    }

    public function filter(Request $request)
{
    $type = $request->input('type');
    $domaine = $request->input('domaine');

    $filteredUniversities = Etablissment::where('type', $type)
        ->where('domaine_id', $domaine)
        ->get();

    return response()->json($filteredUniversities);
}

public function search(Request $request)
{
    $query = $request->input('query');

    $filteredUniversities = Etablissment::where('nom', 'like', "%$query%")->get();

    return response()->json($filteredUniversities);
}


public function showSingle($id)
{
    $domainesnav = Domaine::inRandomOrder()
            ->limit(5)
            ->get();
    $university = Etablissment::findOrFail($id);
    return view('etablissment', ['university' => $university,
                                 'domainesnav'=>$domainesnav
                                ]);
}

}
