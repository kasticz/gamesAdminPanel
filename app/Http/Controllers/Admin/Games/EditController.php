<?php

namespace App\Http\Controllers\Admin\Games;



use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;



class EditController extends BaseController
{
    public function __invoke(Game $game){
        $developers = Developer::all();
        $genres = Genre::all();
        $game->genresIds = $game->genres->pluck('id')->toArray();
        $gamesCount = Game::all()->count();


        return view('admin.games.edit',['section'=>$this->section], compact('game', 'developers', 'genres','gamesCount'));
    }

}