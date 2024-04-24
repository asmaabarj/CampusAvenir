<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Domaine;
use App\Models\Etablissment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateDomaineRequest;

class DomaineController extends Controller
{
    public function index()
    {
        $admin = User::findOrFail(Auth::id());
        $domaines = Domaine::all();
        return view('Admin.domaine', [
                                      'domaines' => $domaines,
                                      'admin'=>$admin
                                      ]);
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
            'description'=>$data['description'],
            'photo' => $data['photo'],
        ]);

        return redirect()->back()->with('success', 'Domaine ajouté avec succès.');
    }

    public function edit($id)
    {
        $admin = User::findOrFail(Auth::id());
        $domaine = Domaine::findOrFail($id);
        return view('Admin.editDomaine', [
                                          'editDomaine' => $domaine,
                                          'admin'=>$admin
                                         ]);
    }

    public function update(CreateDomaineRequest $request, $id)
    {
        $data = $request->validated();
        $domaine = Domaine::findOrFail($id);

        $domaine->update([
            'titre' => $data['titre'],
            'description'=>$data['description'],
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

    public function show()
    {
        $user = Auth::check() ? User::find(Auth::id()) : null;
        $domainesnav = Domaine::inRandomOrder()
        ->limit(5)
        ->get();  
        $domaines = Domaine::all();
        $universitiesnav=Etablissment::inRandomOrder()
            ->limit(5)
            ->get(); 
        return view('domaines', ['domaines' => $domaines,
                                 'domainesnav'=>$domainesnav,
                                 'universitiesnav'=>$universitiesnav,
                                 'user'=>$user
    ]);
    

    }
    public function showAdmin(){
        $admin = User::findOrFail(Auth::id());
        return view('Admin.addDomaine', [
            'admin'=>$admin
            ]);
    }

    public function showSingleDomaine($id){
        $user = Auth::check() ? User::find(Auth::id()) : null;
        $domainesnav = Domaine::inRandomOrder()
        ->limit(5)
        ->get();  
        $domaines = Domaine::all();
        $universitiesnav=Etablissment::inRandomOrder()
            ->limit(5)
            ->get(); 
        $domain = Domaine::findOrFail($id);
        $universities=Etablissment::where('domaine_id',$id)->get();
        return view('domaineUniversities', ['domaines' => $domaines,
                                 'domainesnav'=>$domainesnav,
                                 'universitiesnav'=>$universitiesnav,
                                 'user'=>$user,
                                 'universities'=>$universities,
                                 'domain'=>$domain
    ]);
    }
}
