<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        return view('new-genre');
    }

    public function store(Request $request) {
        $request->validate([
            'genre_title' => 'required|string|min:5|max:255'
        ]);

        Genre::create([
            'genre_title' => $request->genre_title
        ]);

        return view('new-genre')->with('success', 'Genre added successfully! ');
    }
}
