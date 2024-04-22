<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Etablissment;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'etablissment_id' => 'required',
            'rating' => 'required|integer|between:1,5',
        ]);
    
        $existingReview = Review::where('etablissment_id', $request->etablissment_id)
                                ->where('user_id', auth()->id())
                                ->first();
    
        if($existingReview) {
            $existingReview->update([
                'note' => $request->rating,
            ]);
            $message = 'Note mise à jour avec succès.';
        } else {
            Review::create([
                'etablissment_id' => $request->etablissment_id,
                'note' => $request->rating,
                'user_id' => auth()->id(),
            ]);
        }
    
        return response()->json(['message' => $message]);
    }
    

}
