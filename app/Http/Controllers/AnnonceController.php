<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\User;
use App\Http\Requests\CreateAnnonceRequest;

class AnnonceController extends Controller
{
    public function index()
    {
        $users=User::where('role','user')->get();
        $annonces = Annonce::all();
        return view('Admin.publicity', ['annonces' => $annonces,
                                        'users'=>$users
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

        $users=User::where('role','user')->get();
        return view('Admin.editPublicity', ['editAnnonce' => $annonce,
    'users'=>$users
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
        $users=User::where('role','user')->get();
        return view('Admin.addPublicity',['users'=>$users
    ]);
    }
}
