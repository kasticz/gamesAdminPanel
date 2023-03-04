<?php

namespace App\Http\Controllers\User\Games;


use App\Helpers\CollectionPaginator;
use App\Http\Filters\GamesFilter;
use App\Http\Requests\Games\FilterRequest;
use App\Http\Resources\Games\GameResource;
use App\Models\Developer;
use App\Models\Game;
use App\Models\GameGenre;
use App\Models\Genre;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){
        $data = $request->validated();
        $filter = app()->make(GamesFilter::class,['queryParams'=>array_filter($data)]);
        $games = Game::filter($filter)->where('user_id',auth()->user()->id);
        if(isset($data['genres'])){
            $games = $this->getGamesWithFilteredGenres($request->genres,$games->get());
        }else{
            $games = $games->paginate(10);
        }
        $gamesCount = Game::where('user_id',auth()->user()->id)->count();
        return view('admin.games.index',['section'=>$this->section], compact('games','gamesCount'));
    }


    private function getGamesWithFilteredGenres($genres,$currGames){
        $genresCount = count($genres);

        $finalGames = $currGames->filter(function($value,$key) use ($genresCount,$genres){
            $currGameGenres = $value->genres;
            $currGameGenresLength = $currGameGenres->count();
            if($genresCount > $currGameGenresLength){
                return false;
            }
            
            $currGameGenres = $currGameGenres->pluck('id')->toArray();
            if($genresCount == $currGameGenresLength){
                return $currGameGenres == $genres;
            }else{
                return !array_diff($genres,$currGameGenres);
            }            
        });
        return  CollectionPaginator::paginate($finalGames,10); 
    }
}