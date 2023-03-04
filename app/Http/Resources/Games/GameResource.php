<?php

namespace App\Http\Resources\Games;

use App\Http\Resources\Developer\DeveloperResource;
use App\Http\Resources\Genre\GenreResource;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
    

        return [
            'title'=>$this->title,
            'gameScore'=>$this->gameScore,
            'length'=>$this->length,
            'releaseDate'=>$this->releaseDate,
            'developer'=>new DeveloperResource($this->developer),
            'genres'=>GenreResource::collection($this->genres),
            'user'=> new UserResource($this->user),
        ];
    }
}
