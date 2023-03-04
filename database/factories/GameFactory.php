<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Game::class;
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(rand(1,4)),
            'gameScore'=>rand(0,100) / 10,
            'length'=>rand(5,50),
            'releaseDate'=>$this->faker->dateTimeBetween(),
            'developer_id'=>Developer::inRandomOrder()->limit(1)->get()->pluck('id')[0],
            'user_id'=>User::inRandomOrder()->limit(1)->get()->pluck('id')[0],
        ];
    }
}
