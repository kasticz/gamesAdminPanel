<?php

namespace App\Http\Controllers\User;



use App\Http\Controllers\Controller;
use App\Http\Controllers\User\Games\BaseController;
use App\Models\Game;


class IndexController extends BaseController
{
    public function __invoke(){
        $gamesCount = Game::where('user_id',auth()->user()->id)->count();
        return view('layouts.admin.index',['section'=>$this->section], compact('gamesCount'));
    }
}