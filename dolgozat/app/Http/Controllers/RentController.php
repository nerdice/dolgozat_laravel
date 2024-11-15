<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'email' => 'required|string|min:5|max:255',
            'book_id' => 'required|integer|min:1|max:255',
            'rent_out' => 'required|date',
            'rent_return' => 'date'
        ]);

        Rent::create([
            'email' => $request->email,
            'book_id' => $request->book_id,
            'rent_out' => $request->rent_out,
            'rent_return' => $request->rent_return
        ]);

        return redirect()->back()->with('success', 'Book rented out successfully! ');
    }
}
