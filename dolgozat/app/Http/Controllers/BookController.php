<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        //return view('new-book');
        return view('new-book', ['genres' => Genre::all()]);
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'author' => 'required|string|min:1|max:255',
            'release_year' => 'required|string',
            'genre_id' => 'required|integer'
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'release_year' => $request->release_year,
            'genre_id' => $request->genre_id
        ]);

        return redirect()->route('new-book.index')->with('success', 'New book added successfully! ');
    }

    public function books_index() {
        return view('books', ['books' => Book::all()]);
    }

    public function book_index($id) {
        return view('book', ['book' => Book::findOrFail($id)]);
    }

    public function destroy($id) {
        $book = Book::findOrFail($id);
        Book::destroy($id);
        return redirect()->back()->with('success', 'Book deleted successfully! ');
    }

}
