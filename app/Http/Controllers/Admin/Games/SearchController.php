<?php

namespace App\Http\Controllers\Admin\Games;



use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;




class SearchController extends BaseController
{
    public function __invoke(){
        $devs = Developer::all();
        $genres = Genre::all();
        $gamesCount = Game::all()->count();
        return view('admin.games.search',['section'=>$this->section],compact('gamesCount','devs','genres'));
    }

}