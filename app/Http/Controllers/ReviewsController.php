<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guardian;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function showReviews($id)
    {
        $guardian = Guardian::find($id);
        $reviews = $guardian->reviews; // Zakładając, że relacja "reviews" jest zdefiniowana w modelu Guardian
        return view('reviews.guardian_reviews', compact('guardian', 'reviews'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);

        $guardian = Guardian::find($id);
        $review = new Review();
        $review->content = $request->input('content');
        $review->guardian_id = $guardian->id;
        $review->author = $request->user()->name; // Zakładając, że użytkownik jest zalogowany
        $review->save();

        return redirect()->route('showGuardianReviews', $guardian->id)->with('success', 'Review added successfully.');
    }
}
