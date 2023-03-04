<?php

namespace App\Http\Controllers\User\Games;



use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;




class SearchController extends BaseController
{
    public function __invoke(){
        $devs = Developer::all();
        $genres = Genre::all();
        $gamesCount = Game::where('user_id',auth()->user()->id)->count();
        return view('admin.games.search',['section'=>$this->section],compact('gamesCount','devs','genres'));
    }

}