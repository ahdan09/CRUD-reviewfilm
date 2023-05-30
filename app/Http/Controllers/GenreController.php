<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        return view('genre.show', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('genre.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        genre::create([
            "name" => $request->name
        ]);
        return redirect('/genres');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $genres = Genre::all();
        return view('genre.show', compact('genres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $genre->update([
            'name' => $request->name
        ]);

        return redirect()->route('genres.show', $genre->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $genre = Genre::find($id);

    if (!$genre) {
        return redirect()->back()->with('error', 'Genre not found');
    }

    $genre->delete();

    return redirect('/genres')->with('success', 'Genre deleted successfully');
    }
}
