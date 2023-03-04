<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Admin\Games\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Game;


class IndexController extends BaseController
{
    public function __invoke(){
        $gamesCount = Game::all()->count();
        return view('layouts.admin.index',['section'=>$this->section], compact('gamesCount'));
    }
}