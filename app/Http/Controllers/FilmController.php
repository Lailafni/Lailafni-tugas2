<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;



class FilmController extends Controller
{
    

    public function index(Request $request)
    {

        return view('pages.films.index');
    }

    public function store(Request $request)
{
    $request->validate([
        'judul_film' => 'required|max:255',
        'genre' => 'required',
        'tanggal_rilis' => 'required|date',
    ]);

    Film::create($request->all());

    return redirect()->route('films.index')
        ->with('success', 'Film berhasil ditambahkan!');
}

public function update(Request $request, Film $film)
{
    $request->validate([
        'judul_film' => 'required|max:255',
        'genre' => 'required',
        'tanggal_rilis' => 'required|date',
    ]);

    $film->update($request->all());

    return redirect()->route('films.index')
        ->with('success', 'Film berhasil diperbarui!');
}

}