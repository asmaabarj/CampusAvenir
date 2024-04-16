<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Etablissment;
use App\Models\favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    public function favorit(Request $request)
    {
        $data = $request->validate([
            'favori' => 'required',
            'etablissment_id' => 'required',
            'user_id' => ''
        ]);

        $data['user_id'] = Auth::id();

        $existingFavorit = favoris::where('etablissment_id', $data['etablissment_id'])
            ->where('user_id', $data['user_id'])
            ->first(['favori']);

        if (!$existingFavorit) {
            favoris::create($data);
        } else {
            if ($existingFavorit->favori === '1') {
                favoris::where('user_id', $data['user_id'])
                    ->where('etablissment_id', $data['etablissment_id'])
                    ->update(['favori' => '0']);
            } else {
                favoris::where('user_id', $data['user_id'])
                    ->where('etablissment_id', $data['etablissment_id'])
                    ->update(['favori' => '1']);
            }
        }

        return redirect()->back();
    }

    public function show()
{
    $domainesnav = Domaine::inRandomOrder()->limit(5)->get();
    
    $userId = Auth::id();
    $favoriteUniversities = Etablissment::whereHas('favoris', function ($query) use ($userId) {
        $query->where('favori', '1')->where('user_id', $userId);
    })->get();
    $isFavoritedData = [];
    
    foreach ($favoriteUniversities as $university) {
        $isFavoritedData[$university->id] = $university->favoris
            ->where('user_id', $userId)
            ->where('favori', '1')
            ->isNotEmpty();
    }
    $favoritCount = favoris::where('user_id', Auth::id())
    ->where('favori', 1)
    ->count();
return view('favoris', [
        'universities' => $favoriteUniversities,
        'domainesnav' => $domainesnav,
        'isFavoritedData' => $isFavoritedData,
        'favoritCount'=>$favoritCount
    ]);
}

    
}
    