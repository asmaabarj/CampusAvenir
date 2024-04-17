<?php

namespace App\Http\Controllers;

use App\Models\Concour;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateConcourRequest;

class ConcourController extends Controller
{
    public function index()
    {
        $users=User::where('role','user')->get();
        $concours = Concour::all();
        $etablissments = Etablissment::all();
        return view('Admin.concour', ['concours' => $concours,
                                      'etablissments' => $etablissments,
                                      'users'=>$users
                                    ]);
    }



    public function store(CreateConcourRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('pdf')) {
            $filePath = $request->file('pdf')->store('concours', 'public');

            Concour::create([
                'titre' => $validatedData['titre'],
                'pdf' => $filePath,
                'date' => $validatedData['date'],
                'etablissment_id' => $validatedData['etablissment']
            ]);
        }

        return redirect()->back()->with('success', 'Concour ajouté avec succès!');
    }


    public function edit($id)
    {
        $etablissments = Etablissment::all();
        $users=User::where('role','user')->get();
        $concour = Concour::findOrFail($id);
        return view('Admin.editConcour', ['editConcour' => $concour, 'etablissments' => $etablissments,
        'users'=>$users]);
    }


    public function update(CreateConcourRequest $request, $id)
{
    $validatedData = $request->validated();

    $concour = Concour::findOrFail($id);

    $concour->titre = $validatedData['titre'];
    $concour->date = $validatedData['date'];
    $concour->etablissment_id = $validatedData['etablissment'];

    if ($request->hasFile('pdf')) {
        $filePath = $request->file('pdf')->store('concours', 'public');

        $concour->pdf = $filePath;
    }

    $concour->save();

    return redirect('/concour')->with('success', 'Concour mis à jour avec succès!');
}



    public function destroy($id)
    {
        $concour = Concour::findOrFail($id);
        $concour->delete();
        return redirect()->back()->with('success', 'Concour supprimé avec succès.');
    }

    public function show()
    {
        $domainesnav = Domaine::inRandomOrder()
        ->limit(5)
        ->get(); 
        $favoritCount = favoris::where('user_id', Auth::id())
        ->where('favori', 1)
        ->count();
        $concours = concour::all();
        return view('concours', ['concours' => $concours,
                                  'favoritCount'=>$favoritCount,
                                  'domainesnav'=>$domainesnav
                                ]);
    }
}
