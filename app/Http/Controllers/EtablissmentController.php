<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateUniversityRequest;

class EtablissmentController extends Controller
{
    public function index()
    {
        $admin = User::findOrFail(Auth::id());

        $etablissments = Etablissment::all();
        return view('Admin.university', [
            'etablissments' => $etablissments,
            'admin' => $admin
        ]);
    }

    public function create()
    {
        $domaines = Domaine::all();
        $admin = User::findOrFail(Auth::id());
        return view('Admin.addUniversity', [
            'domaines' => $domaines,
            'admin' => $admin
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
            'admin' => $admin
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
        $user = Auth::check() ? User::find(Auth::id()) : null;
        $annonces = Annonce::orderBy('created_at', 'desc')->limit(2)->get();
        $domaines = domaine::all();
        $universities = Etablissment::all();
        $domainesnav = Domaine::inRandomOrder()
            ->limit(5)
            ->get();
        $favorites = favoris::where('favori', '1')
            ->where('user_id', Auth::id())
            ->get();

        $universitiesnav = Etablissment::inRandomOrder()
            ->limit(5)
            ->get();
            foreach ($universities as $university) {
                $averageRating = $university->reviews->avg('note');
                $university->ratingUniversity = round($averageRating);
            }
        return view('universities', [
            'universities' => $universities,
            'domainesnav' => $domainesnav,
            'favorites' => $favorites,
            'domaines' => $domaines,
            'annonces' => $annonces,
            'user' => $user,
            'universitiesnav' => $universitiesnav
        ]);
    }

    public function filter(Request $request)
    {
        $type = $request->input('type');
        $domaine = $request->input('domaine');

        $filteredUniversities = Etablissment::where('type', $type)
            ->where('domaine_id', $domaine)
            ->get();
            foreach ($filteredUniversities as $university) {
                $averageRating = $university->reviews->avg('note');
                $university->ratingUniversity = round($averageRating);
            }
        return response()->json($filteredUniversities);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $filteredUniversities = Etablissment::where('nom', 'like', "%$query%")->get();
        foreach ($filteredUniversities as $university) {
            $averageRating = $university->reviews->avg('note');
            $university->ratingUniversity = round($averageRating);
        }
        return response()->json($filteredUniversities);
    }


    public function showSingle($id)
    {
        $user = Auth::check() ? User::find(Auth::id()) : null;
        $domainesnav = Domaine::inRandomOrder()->limit(5)->get();

        $commentCount = Commentaire::where('commentable_type', 'App\Models\Etablissment')
            ->where('commentable_id', $id)
            ->count();

        $university = Etablissment::findOrFail($id);
        $comments = Commentaire::where('commentable_type', 'App\Models\Etablissment')
            ->where('commentable_id', $id)
            ->get();
                $averageRating = $university->reviews->avg('note');
                $university->ratingUniversity = round($averageRating);
        $universitiesnav = Etablissment::inRandomOrder()
            ->limit(5)
            ->get();

        return view('etablissment', [
            'university' => $university,
            'domainesnav' => $domainesnav,
            'user' => $user,
            'comments' => $comments,
            'commentCount' => $commentCount,
            'universitiesnav' => $universitiesnav,
            'averageRating'=>$averageRating
        ]);
    }

    public function favoritStyle($id)
    {

        $etablissment = favoris::where('etablissment_id', $id)->first();
        return response()->json([
            'etablissment' => $etablissment,
        ]);
    }
}
