<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use App\Models\film;
use App\Models\Cast;


class PeranController extends Controller
{
    public function index()
    {
        $perans = Peran::all();
        return view('peran.show', compact('perans'));
    }

    public function create()
    {
        // Ambil data film dan cast untuk dropdown
        $films = Film::all();
        $casts = Cast::all();
        return view('peran.tambah', compact('films', 'casts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
        ]);

        Peran::create($request->all());

        return redirect()->route('perans.index')->with('success', 'Peran created successfully');
    }

    public function show(Peran $peran)
    {
        return view('peran.detail', compact('peran'));
    }

    public function edit(Peran $peran)
    {
        // Ambil data film dan cast untuk dropdown
        $films = Film::all();
        $casts = Cast::all();
        return view('peran.edit', compact('peran', 'films', 'casts'));
    }

    public function update(Request $request, Peran $peran)
    {
        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
        ]);

        $peran->update($request->all());

        return redirect()->route('perans.index')->with('success', 'Peran updated successfully');
    }

    public function destroy(Peran $peran)
    {
        $peran->delete();

        return redirect()->route('perans.index')->with('success', 'Peran deleted successfully');
    }
}