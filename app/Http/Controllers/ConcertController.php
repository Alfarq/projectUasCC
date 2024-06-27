<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    // Method untuk menampilkan semua konser di halaman home
    public function index()
    {
        $concerts = Concert::all();
        return view('home', compact('concerts'));
    }

    // Method untuk menampilkan detail konser di halaman detail
    public function show($id)
    {
        // $concert = Concert::findOrFail($id);
        // return view('detail', compact('concert'));

        $concert = Concert::with('guestStars')->findOrFail($id);
        return view('detail', compact('concert'));
    }
}
