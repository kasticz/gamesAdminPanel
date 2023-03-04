<?php

namespace App\Http\Controllers\User\Games;



use App\Http\Requests\Games\UpdateRequest;
use App\Models\Game;




class UpdateController extends BaseController
{
    public function __invoke(Game $game,UpdateRequest $request){
        $this->authorize('update',[auth()->user(),$game]);
        $data = $request->validated();

        $data = $this->service->update($game,$data);

        return $data instanceof Game ? redirect()->route('user.games.show', $data) : view('home',compact('data')) ;
    }

}