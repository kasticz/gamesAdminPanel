<?php

namespace App\Http\Controllers\User\Games;



use App\Http\Requests\Games\StoreRequest;
use App\Models\Game;




class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $data = $this->service->store($data);


        return $data instanceof Game ? redirect()->route('user.games.show', $data) : view('home',compact('data')) ;

    }

}