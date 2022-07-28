<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    function index()
    {
        $film = Movie::all()
        ->get();
        return view('movies.index', 
        ["movies" => '']);
    }
}

