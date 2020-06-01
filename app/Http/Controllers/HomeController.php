<?php

namespace App\Http\Controllers;

use App\categorie;
use App\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $categories=categorie::all();
        $uploads=upload::all();
        return view('home',compact('categories','uploads'));
    }
}
