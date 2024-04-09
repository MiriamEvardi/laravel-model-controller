<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function getStars($vote)
    {
        $stars = [];
        $vote = round($vote / 2);

        for ($i = 0; $i < $vote; $i++) {
            $stars[] = 'fa-solid fa-star';
        }

        return $stars;
    }
}
