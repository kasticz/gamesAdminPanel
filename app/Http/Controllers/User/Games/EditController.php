<?php

namespace App\Http\Controllers\User\Games;



use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;



class EditController extends BaseController
{
    public function __invoke(Game $game){
        $this->authorize('view',[auth()->user(),$game]);
        $developers = Developer::all();
        $genres = Genre::all();
        $game->genresIds = $game->genres->pluck('id')->toArray();
        $gamesCount = Game::where('user_id',auth()->user()->id)->count();


        return view('admin.games.edit',['section'=>$this->section], compact('game', 'developers', 'genres','gamesCount'));
    }

}