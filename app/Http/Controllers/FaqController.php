<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateFaqRequest;

class FaqController extends Controller
{
    public function index()
    {
        $users=User::where('role','user')->get();
        $faqs = Faq::all();
         
        return view('Admin.faqs', 
        [
            'faqs' => $faqs,'users'=>$users
           
    ]);
    }

    public function store(CreateFaqRequest $request)
    {
        $data = $request->validated();
        Faq::create([
            'question' => $data['question'],
            'reponse' => $data['reponse'],
        ]);
        return redirect()->back()->with('success', 'FAQ ajoutée avec succès.');
    }

    public function edit($id)
    {
        $users=User::where('role','user')->get();
        $faq = Faq::findOrFail($id);
        return view('Admin.editFaqs', ['editFaq' => $faq,
        'users'=>$users]);
    }

    public function update(CreateFaqRequest $request, $id)
    {
        $data = $request->validated();
        $faq = Faq::findOrFail($id);
        $faq->update([
            'question' => $data['question'],
            'reponse' => $data['reponse'],
        ]);
        return redirect('/faqs')->with('success', 'FAQ mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->back()->with('success', 'FAQ supprimée avec succès.');
    }


    public function show()
    {
        $faqs = Faq::all();
        $domainesnav = Domaine::inRandomOrder()
        ->limit(5)
        ->get();  
        $favoritCount = favoris::where('user_id', Auth::id())
        ->where('favori', 1)
        ->count(); 
        return view('faqs', ['faqs' => $faqs,
                             'domainesnav' => $domainesnav,
                             'favoritCount'=>$favoritCount    
                            ]);
    }
}
