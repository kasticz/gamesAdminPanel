<?php

namespace App\Http\Controllers\Admin\Games;



use App\Http\Resources\Games\GameResource;
use App\Models\Game;



class ShowController extends BaseController
{
    public function __invoke(Game $game){
        $game->genresString = implode(', ', $game->genres->pluck('title')->toArray());
        $gamesCount = Game::all()->count();
        return view('admin.games.show',['section'=>$this->section], compact('game','gamesCount'));
    }

}