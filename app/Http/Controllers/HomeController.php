<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $movie = Movie::all();
        return view('home', compact('movie'));
    }

    public function search(Request $request) {
        //
        $movie = Movie::where('title', 'LIKE', "%$request->search%");
        return view('home')->with('movies', $movie);
    }
}
