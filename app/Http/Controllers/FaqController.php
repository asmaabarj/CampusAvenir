<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFaqRequest;

class FaqController extends Controller
{


    public function index()
    {
        $faqs = Faq::all();
        return view('Admin.faqs', ['faqs' => $faqs]);
    }

    public function store(CreateFaqRequest $request)
    {
        $validatedData = $request->validated();
        $faq = new Faq([
            'question' => $validatedData['question'],
            'reponse' => $validatedData['reponse'],
        ]);
        $faq->save();
        return redirect()->back()->with('success', 'La FAQ a été ajoutée avec succès.');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('Admin.editFaqs', ['editFaq' => $faq]);
    }

    
    public function update(CreateFaqRequest $request, $id)
    {
        $validatedData = $request->validated();
        $faq = Faq::findOrFail($id);

        $faq->question = $validatedData['question'];
        $faq->reponse = $validatedData['reponse'];

        $faq->save();
        return redirect('/faqs')->with('success', 'FAQ mise à jour avec succès.');
    }



    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->back()->with('success', 'FAQ supprimée avec succès.');
    }
}
