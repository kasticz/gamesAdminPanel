<?php

namespace App\Http\Controllers\User\Games;



use App\Http\Resources\Games\GameResource;
use App\Models\Game;



class ShowController extends BaseController
{
    public function __invoke(Game $game){
        $this->authorize('view',[auth()->user(),$game]);

        $game->genresString = implode(', ', $game->genres->pluck('title')->toArray());
        $gamesCount = Game::where('user_id',auth()->user()->id)->count();
        return view('admin.games.show',['section'=>$this->section], compact('game','gamesCount'));
    }

}