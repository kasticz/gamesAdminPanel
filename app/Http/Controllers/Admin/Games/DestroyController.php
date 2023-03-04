<?php

namespace App\Http\Controllers\Admin\Games;



use App\Models\Game;




class DestroyController extends BaseController
{
    public function __invoke(Game $game){
        $game->delete();
        return redirect()->route('admin.games.index');
    }

}