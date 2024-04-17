<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{

    public function index()
    {

        $universities = Etablissment::all();
        $domaines = Domaine::inRandomOrder()
            ->limit(3)
            ->get();

        $annonces = Annonce::orderBy('created_at', 'desc')->get();
        $favoritCount = favoris::where('user_id', Auth::id())
        ->where('favori', 1)
        ->count();
        $favorites = favoris::where('favori', '1')
            ->where('user_id', Auth::id())
            ->get();
            $domainesnav = Domaine::inRandomOrder()
                        ->limit(5)
                        ->get();    
        return view('HomePage', [
            'annonces' => $annonces,
            'domaines' => $domaines,
            'universities' => $universities,
            'domainesnav'=>$domainesnav,
            'favoritCount'=>$favoritCount,
            'favorites' => $favorites,
        ]);
    }




}
