<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!session()->has('status')) {
            session(['status' => 'You are logged in!']);
        }

        return view('home')->with('status', session('status'));
    }

    public function showDetail()
    {
    

        // Kembali ke view detail dengan data
        return view('/detail');
    }
}
