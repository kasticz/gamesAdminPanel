<?php

namespace App\Http\Services\Games;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;
use Exception;
use Illuminate\Support\Facades\DB;

class GamesService{
    public function store($data){
        try{
            DB::beginTransaction();
            $genres = $data['genres'];
            unset($data['genres']);
            $data['user_id'] = auth()->user()->id;
    
            $newGame = Game::updateOrCreate(['title'=>$data['title']],$data);
            $newGame->genres()->attach($genres);
            DB::commit();
            return $newGame;

        }catch(Exception $err){
            DB::rollBack();
            return $err->getMessage();
        }

    }

    public function update($game,$data){
        try{
            DB::beginTransaction();
            $genres = $data['genres'];
            unset($data['genres']);
            $data['user_id'] = auth()->user()->id;
            $game->update($data);
    
            $game->genres()->sync($genres);
            DB::commit();
            return $game->fresh();

        }catch(Exception $err){
            DB::rollBack();
            return $err->getMessage();
        }
    }

}