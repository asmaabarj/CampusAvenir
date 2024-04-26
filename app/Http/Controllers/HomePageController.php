<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{

    public function index()
    {
        $user = Auth::check() ? User::find(Auth::id()) : null;
        $universities = Etablissment::all();
        $domaines = Domaine::inRandomOrder()->limit(3)->get();
        $annonces = Annonce::orderBy('created_at', 'desc')->get();
        $domainesnav = Domaine::inRandomOrder()->limit(5)->get();
        $universitiesnav = Etablissment::inRandomOrder()->limit(5)->get();  
    
        foreach ($universities as $university) {
            $averageRating = $university->reviews->avg('note');
            $university->ratingUniversity = round($averageRating);
        }
    
        return view('HomePage', [
            'annonces' => $annonces,
            'domaines' => $domaines,
            'universities' => $universities,
            'domainesnav' => $domainesnav,
            'user' => $user,
            'universitiesnav' => $universitiesnav,
        ]);
    }
    



}
