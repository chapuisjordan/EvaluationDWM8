<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Support;
use App\Language;
use App\Author;

class gamesController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }
    public function listing()
    {
        $games = Game::all();
        $supportsAll = Support::all();
        $supports =[];
        foreach ($supportsAll as $value)
        {
            $supports[$value->id] = $value->support;
        }
        $languagesAll = Language::all();
        $languages =[];
        foreach ($languagesAll as $value)
        {
            $languages[$value->id] = $value->language;
        }
        $authorsAll = Author::all();
        $authors =[];
        foreach ($authorsAll as $value)
        {
            $authors[$value->id] = $value->author;
        }
        return view('listing', ['games' => $games, 'supports' => $supports, 'languages' => $languages, 'authors' => $authors]);
    }



}
