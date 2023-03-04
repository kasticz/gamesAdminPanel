<?php

namespace App\Http\Controllers\User\Games;



use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;


class CreateController extends BaseController
{
    public function __invoke(){
        $devs = Developer::all();
        $genres = Genre::all();
        $gamesCount = Game::where('user_id',auth()->user()->id)->count();
        
        return view('admin.games.create',['section'=>$this->section], compact('devs', 'genres','gamesCount'));
    }

}