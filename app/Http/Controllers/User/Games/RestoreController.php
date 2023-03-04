<?php

namespace App\Http\Controllers\User\Games;



use App\Models\Game;




class RestoreController extends BaseController
{
    public function __invoke(){
        $games = Game::withTrashed()->where('user_id',auth()->user()->id)->get();
        foreach ($games as $game) {
            if ($game->trashed()) {
                $game->restore();
            }
        }
        return redirect()->route('user.games.index');
    }

}