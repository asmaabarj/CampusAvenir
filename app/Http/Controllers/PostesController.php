<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreatePosteRequest;

class PostesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = User::findOrFail(Auth::id());
        $postes=publication::where('status','0')->get();
        return view('Admin.managePosts', [
        'postes'=>$postes ,'admin'=>$admin, 
        ]);
    
    }


    public function store(CreatePosteRequest $request)
    {
        $request->validated();
    
        $data = [
            'contenue' => $request->input('description'),
            'photo' => null, 
            'user_id' => Auth::id() 
        ];
    
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public');
            $data['photo'] = $path;
        }
    
        Publication::create($data);
    
        return redirect()->back()->with('success', "Publication ajoutée avec succès. Veuillez attendre l'acceptation de l'administrateur.");
    }
    

    public function show()
    {

        Carbon::setLocale('fr');
        $user = User::findOrFail(Auth::id());
        $postes=publication::where('status','1')->get();
        $domainesnav = Domaine::inRandomOrder()
        ->limit(5)
        ->get();  

        $publications = Publication::with(['user', 'commentaires.user'])
        ->orderBy('created_at', 'desc')
        ->get();
        return view('posts', [
        'domainesnav'=>$domainesnav,
        'postes'=>$postes,
        'publications' => $publications,
        'user'=>$user
         ]);
        }
        

        public function update(CreatePosteRequest $request, $id)
        {
            $publication = Publication::findOrFail($id);
    
            $validatedData = $request->validated();
            
            $publication->contenue = $validatedData['description'];
            
            if ($request->hasFile('photo')) {
                if ($publication->photo) {
                    Storage::disk('public')->delete($publication->photo);
                }
                $path = $request->file('photo')->store('uploads', 'public');
                $publication->photo = $path;
            }
            
            $publication->save();
            
            return redirect()->back()->with('success', 'Publication mise à jour avec succès.');
        }
        

    public function updateStatus($id)
{
    $publication = publication::findOrFail($id);

    $publication->status = 1;
    $publication->save();

    return redirect()->back()->with('success', 'Publication acceptée avec succès.');
}

    public function destroy($id)
    {
        $publication = publication::findOrFail($id);
        $publication->delete();
        return redirect()->back()->with('success', 'Publication supprimée avec succès.');
    }


}
