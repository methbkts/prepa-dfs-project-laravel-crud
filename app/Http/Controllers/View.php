<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Serie as Serie;
Use App\Actor as Actor;
Use App\Genre as Genre;

class View extends Controller
{
    public function contact($name){
    return view('contact', [
    "name" => $name,
    "data" => [
        "pizza",
        "tofu",
        "poivron",
        "herbe",
        "piments",
    ],
    'showAside' => true,
    ]);
    }
    
    public function home() {
        return view('home');
    }

    public function listShows()
    {
        $series = Serie::all();
        // var_dump($series);
        // dd($series);
        // dd($series[0]->genres);
        return view('shows', ['series' => $series]);
    }

    public function createShow()
    {
        $actors = Actor::all();
        $genres = Genre::all();
        return view('newshow', [
            "actors" => $actors,
            "genres" => $genres,
        ]);
    }

    public function updateShow(Request $request)
    {
        $serie = Serie::find($request->input('id'));
        $actors = Actor::all();
        $genres = Genre::all();
        return view('updateshow', [
            'serie' => $serie,
            'actors' => $actors,
            'genres' => $genres,
            ]);
    }
}
