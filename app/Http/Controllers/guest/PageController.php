<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        if (1 === 1) {
            $movies = Movie::all();
            return view('home', compact('movies'));
        }
    }
}
