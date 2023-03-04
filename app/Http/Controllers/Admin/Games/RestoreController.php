<?php

namespace App\Http\Controllers\Admin\Games;



use App\Models\Game;




class RestoreController extends BaseController
{
    public function __invoke(){
        $games = Game::withTrashed()->get();
        foreach ($games as $game) {
            if ($game->trashed()) {
                $game->restore();
            }
        }
        return redirect()->route('admin.games.index');
    }

}