<?php

namespace App\Http\Controllers\Admin\Games;



use App\Http\Requests\Games\UpdateRequest;
use App\Models\Game;




class UpdateController extends BaseController
{
    public function __invoke(Game $game,UpdateRequest $request){
        $data = $request->validated();

        $this->service->update($game,$data);

        return redirect()->route('admin.games.show', $game);
    }

}