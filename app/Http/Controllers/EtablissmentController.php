<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
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

        $favoritCount = favoris::where('user_id', Auth::id())
        ->where('favori', 1)
        ->count();
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
            'favoritCount'=>$favoritCount
        ]);
    }




}
