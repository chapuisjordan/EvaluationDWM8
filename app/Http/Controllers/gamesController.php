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
    public function add()
    {
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
        return view('add', ['supports' => $supports, 'languages' => $languages]);
    }
    public function addAction(Request $request)
    {
        $game = new Game;
        $game->name = $request->name;
        $game->updated_date = $request->updated_date;
        $game->created_date = $request->created_date;
        $game->save();
        $game->supports()->attach($request->supports);
        $game->languages()->attach($request->languages);
        return redirect ('/');
    }
    public function delete()
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
        return view('delete', ['games' => $games, 'supports' => $supports, 'languages' => $languages, 'authors' => $authors]);
    }

    /**
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $game = Game::find($id);
        $game->delete();
        return redirect('/delete');
    }
    public function updateList()
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
        return view('updatelist', ['games' => $games, 'supports' => $supports, 'languages' => $languages, 'authors' => $authors]);
    }
    public function update(Request $request, $id)
    {
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
        $game = Game::find($id);
        return view('update', ['game' => $game, 'supports' => $supports, 'languages' => $languages, 'authors' => $authors]);
    }
    public function updateAction(Request $request,$id)
    {
        $game = Game::find($request->id);
        $game->name = $request->name;
        $game->created_date = $request->created_date;
        $game->updated_date = $request->updated_date;
        $game->save();
        return redirect('/');
    }

}
