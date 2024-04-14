<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Domaine;
use App\Models\Etablissment;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
 
public function index()
{
    $etablissments = Etablissment::all(); 
    $domaines = Domaine::inRandomOrder()
                        ->limit(3)
                        ->get();

    $annonces = Annonce::orderBy('created_at', 'desc')->get();

    return view('HomePage', [
        'annonces' => $annonces,
        'domaines' => $domaines,
        'etablissments'=>$etablissments
    ]);
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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
