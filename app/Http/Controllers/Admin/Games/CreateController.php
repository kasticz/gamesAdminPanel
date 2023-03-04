<?php

namespace App\Http\Controllers\Admin\Games;


use App\Http\Controllers\Admin\Games\BaseController;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;


class CreateController extends BaseController
{
    public function __invoke(){
        $devs = Developer::all();
        $genres = Genre::all();
        $gamesCount = Game::all()->count();
        
        return view('admin.games.create',['section'=>$this->section], compact('devs', 'genres','gamesCount'));
    }

}