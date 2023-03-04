<?php
namespace App\Http\Controllers\Admin\Games;


use App\Http\Controllers\Controller;
use App\Http\Services\Games\GamesService;


class BaseController extends Controller{
    public $service;
    public $section = 'admin';
    public function __construct(GamesService $service){
        $this->service = $service;
    }
}