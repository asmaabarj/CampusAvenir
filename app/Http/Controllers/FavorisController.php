<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Domaine;
use App\Models\favoris;
use App\Models\Etablissment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateFavorisRequest;

class FavorisController extends Controller
{
    public function store(Request $request)
{
    $userId = Auth::id();
    $etablissmentId = $request->input('etablissment_id');

    $existingFavorit = favoris::where('etablissment_id', $etablissmentId)
        ->where('user_id', $userId)
        ->first();

    if (!$existingFavorit) {
        favoris::create([
            'user_id' => $userId,
            'etablissment_id' => $etablissmentId,
            'favori' => '1'
        ]);
        $favoriStatus = '1';
    } else {
        $existingFavorit->update([
            'favori' => $existingFavorit->favori === '1' ? '0' : '1'
        ]);
        $favoriStatus = $existingFavorit->favori === '1' ? '1' : '0';
    }

    return response()->json(['message' => 'Favoris updated successfully', 'favori' => $favoriStatus], 200);
}



    public function show()
{
    $domainesnav = Domaine::inRandomOrder()->limit(5)->get();
    $user = Auth::check() ? User::find(Auth::id()) : null;
    $userId = Auth::id();
    $favoriteUniversities = Etablissment::whereHas('favoris', function ($query) use ($userId) {
        $query->where('favori', '1')->where('user_id', $userId);
    })->get();
    $favoritesCount = Etablissment::whereHas('favoris', function ($query) use ($userId) {
        $query->where('favori', '1')->where('user_id', $userId);
    })->count();
    $isFavoritedData = [];
    $universitiesnav=Etablissment::inRandomOrder()
    ->limit(5)
    ->get();
    foreach ($favoriteUniversities as $university) {
        $isFavoritedData[$university->id] = $university->favoris
            ->where('user_id', $userId)
            ->where('favori', '1')
            ->isNotEmpty();
    }
return view('favoris', [
        'universities' => $favoriteUniversities,
        'domainesnav' => $domainesnav,
        'isFavoritedData' => $isFavoritedData,
        'user'=>$user,
        'universitiesnav'=>$universitiesnav,
        'favoritesCount'=>$favoritesCount
    ]);
}

    
}
    