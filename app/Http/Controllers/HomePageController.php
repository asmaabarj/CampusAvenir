<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\note;

class HomePageController extends Controller
{

    public function index()
{
    $avgNote = Review::selectRaw('AVG(note) as average_note, etablissment_id')
                    ->groupBy('etablissment_id');
    
    $universities = Etablissment::select('*')
                                ->joinSub($avgNote, 'avg_note', function ($join) {
                                    $join->on('etablissments.id', '=', 'avg_note.etablissment_id');
                                })
                                ->orderByDesc('avg_note.average_note')
                                ->limit(3)->get();
    
    $user = Auth::check() ? User::find(Auth::id()) : null;
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
