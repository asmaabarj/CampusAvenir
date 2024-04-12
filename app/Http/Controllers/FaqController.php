<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFaqRequest;

class FaqController extends Controller
{


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(CreateFaqRequest $request)
    {
        $validatedData=$request->validated();
        $faq = new Faq([
            'question'=>$validatedData['question'],
            'reponse'=>$validatedData['reponse'],
    ]);
        $faq->save(); 
        return redirect()->back()->with('success', 'La FAQ a été ajoutée avec succès.');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
