<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\FaqService;
use App\Http\Requests\CreateFaqRequest;
use App\Models\Domaine;
use App\Models\Etablissment;

class FaqController extends Controller
{
    protected $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->faqService = $faqService;
    }

    public function index()
    {
        $admin = $this->faqService->admin();
        $faqs = $this->faqService->all();
        return view('Admin.faqs', compact('faqs', 'admin'));
    }

    public function store(CreateFaqRequest $request)
    {
        $data = $request->validated();
        $this->faqService->create([
            'question' => $data['question'],
            'reponse' => $data['reponse'],
        ]);

        return redirect()->back()->with('success', 'FAQ ajoutée avec succès.');
    }

    public function edit($id)
    {
        $admin = auth()->user();
        $editFaq = $this->faqService->find($id);

        return view('Admin.editFaqs', compact('editFaq', 'admin'));
    }

    public function update(CreateFaqRequest $request, $id)
    {
        $data = $request->validated();
        $this->faqService->update($data, $id);

        return redirect('/faqs')->with('success', 'FAQ mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $this->faqService->delete($id);

        return redirect()->back()->with('success', 'FAQ supprimée avec succès.');
    }

    public function show()
    {
        $faqs = $this->faqService->all();
        $user = auth()->user();

        $domainesnav = Domaine::inRandomOrder()->limit(5)->get();
        $universitiesnav = Etablissment::inRandomOrder()->limit(5)->get();

        return view('faqs', compact('faqs', 'domainesnav', 'universitiesnav', 'user'));
    }
}
