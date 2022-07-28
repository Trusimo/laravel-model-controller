<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    function index()
    {
        $film = Movie::all();
        return view('app', 
        ["movies" => $film]);
    }
}

