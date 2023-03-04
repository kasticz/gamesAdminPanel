<?php
namespace App\Http\Controllers\User\Games;


use App\Http\Controllers\Controller;
use App\Http\Services\Games\GamesService;
use App\Models\Game;


class BaseController extends Controller{
    public $service;
    public $section = 'user';
    public function __construct(GamesService $service){
        $this->service = $service;
    }
}