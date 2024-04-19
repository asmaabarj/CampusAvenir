<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateAnnonceRequest;

class AnnonceController extends Controller
{
    public function index()
    {
        $admin = User::findOrFail(Auth::id());
        $annonces = Annonce::all();
        return view('Admin.publicity', ['annonces' => $annonces,
                                        'admin'=>$admin
                                    ]);
    }

    public function store(CreateAnnonceRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('uploads', 'public');
            $data['photo'] = $path;
        }

        Annonce::create($data);

        return redirect()->back()->with('success', 'Annonce ajoutée avec succès.');
    }

    public function edit($id)
    {
        $annonce = Annonce::findOrFail($id);

        $admin = User::findOrFail(Auth::id());
        return view('Admin.editPublicity', ['editAnnonce' => $annonce,
    'admin'=>$admin
    ]);
    }

    public function update(CreateAnnonceRequest $request, $id)
    {
        $annonce = Annonce::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('uploads', 'public');
            $data['photo'] = $path;
        }

        $annonce->update($data);

        return redirect('/publicity')->with('success', 'Annonce mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->delete();

        return redirect()->back()->with('success', 'Annonce supprimée avec succès.');
    }

    public function show(){
        $admin = User::findOrFail(Auth::id());
        return view('Admin.addPublicity',['admin'=>$admin
    ]);
    }
}
