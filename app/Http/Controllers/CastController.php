<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function tambah()
    {
        return view ('Cast.tambah');
    }

    public function store (Request $request)
    {
        DB::table('cast')->insert([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['bio']
        ]);
        return redirect('/cast');
    }

    public function index()
    {
        $peran = DB::table('cast')->get();
 
        return view('Cast.show', ['peran' => $peran]);
    }

    public function show($id)
    {
        $cast = DB::table('cast')->find($id);
 
        return view('Cast.detail', ['cast' => $cast]);
    }

    public function edit($id)
    {
        $cast = DB::table('cast')->find($id);
 
        return view('Cast.edit', ['cast' => $cast]);
    }

    public function update(Request $request, $id)
    {
        DB::table('cast')
        ->where('id', $id)
        ->update(
            [
                'name' => $request['name'],
                'age' => $request['age'],
                'bio' => $request['bio']
            ]
        );
        return redirect('/cast');
    }

    public function destroy($id)
    {
        $deleted = DB::table('cast')->where('id', '=', $id)->delete();

        return redirect('/cast');
    }

}
