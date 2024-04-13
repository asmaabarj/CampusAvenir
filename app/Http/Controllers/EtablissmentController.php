<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Etablissment;
use Illuminate\Http\Request;
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
            $path = $request->file('photo')->store('uploads', 'storage');
            $data['photo'] = $path;
        }
        Etablissment::create($data);

        return redirect()->back()->with('success', 'Établissement ajoutée avec succès.');
    }




    public function show(string $id)
    {
        //
    }


    public function edit($id)
    {
        $etablissment = Etablissment::findOrFail($id);
        return view('Admin.editUniversity', ['editEtablissment' => $etablissment]);
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy($id)
    {
        $etablissment = Etablissment::findOrFail($id);
        $etablissment->delete();
        return redirect()->back()->with('success', 'Etablissment supprimée avec succès.');
    }
}
