<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\film;
use App\Models\User;


class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('review.show', compact('reviews'));
    }

    public function create()
    {
        {
            $users = User::all();
            $films = Film::all();
        
            return view('review.tambah', compact('users', 'films'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'film_id' => 'required',
            'rating' => 'required',
            'comment' => 'required',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review created successfully');
    }

    public function show(Review $review)
    {
        return view('review.detail', compact('review'));
    }

    public function edit($id)
{
    $review = Review::findOrFail($id);
    $users = User::all();
    $films = Film::all();

    return view('review.edit', compact('review', 'users', 'films'));
}

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'user_id' => 'required',
            'film_id' => 'required',
            'rating' => 'required',
            'comment' => 'required',
        ]);

        $review->update($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully');
    }
}