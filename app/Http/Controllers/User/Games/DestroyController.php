<?php

namespace App\Http\Controllers\User\Games;



use App\Models\Game;




class DestroyController extends BaseController
{
    public function __invoke(Game $game){
        $this->authorize('delete',[auth()->user(),$game]);

        $game->delete();
        return redirect()->route('user.games.index');
    }

}