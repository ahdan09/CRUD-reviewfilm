<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;
use App\Models\genre;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('film.show', compact('films'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('film.tambah', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'synopsis' => 'required',
            'year' => 'required|integer',
            'poster' => 'required|mimes:png,jpg,jpeg|max:2040',
            'genre_id' => 'required',
        ]);
    
        $postername = time().'.'.$request->poster->extension();
        $request->poster->move(public_path('poster'), $postername);
    
        $film = new Film();
        $film->title = $request->title;
        $film->synopsis = $request->synopsis;
        $film->year = $request->year;
        $film->poster = $postername;
        $film->genre_id = $request->genre_id;
        $film->save();
    
        return redirect()->route('films.index')->with('success', 'Film created successfully');
    }    
    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('film.detail', compact('film'));
    }
    
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        $genres = Genre::all();
        return view('film.edit', compact('film', 'genres'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'year' => 'required|integer',
            // tambahkan validasi untuk atribut lainnya
        ]);
    
        $film->update($validatedData);
    
        return redirect()->route('films.index')->with('success', 'Film updated successfully');
    }
       
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect('/films')->with('success', 'Film deleted successfully');
    }}
