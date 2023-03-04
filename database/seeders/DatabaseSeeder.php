<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Developer;
use App\Models\Game;
use App\Models\GameGenre;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $genres = [['title'=>"Hack'n'slash"], //1
        ['title'=>'Shooter'], //2
        ['title'=>'Action-Adventure'], //3
        ['title'=>'RPG'], //4
        ['title'=>'Racing'], //5
        ['title'=>'Interactive movie'], //6
        ['title'=>'Strategy'], //7
        ['title'=>'Sandbox'],// 8
        ['title'=>'Soulslike'], //9
        ['title'=>'Puzzle'], // 10
        ['title'=>'Platformer']]; // 11

        $devs = [['title'=>'From Software'],['title'=>'Electronic Arts'],['title'=>'Rockstar Games'],['title'=>'CDProject Red'],['title'=>'Ubisoft'],['title'=>'Quantic Dream'],['title'=>'Sony Santa Monica'],['title'=>'Activision'],['title'=>'Platinum Games'],['title'=>'Blizzard']];

        foreach($devs as $dev){
            Developer::create($dev);
        }
        foreach($genres as $genres){
            Genre::create($genres);
        }
        $games = [['title'=>'Dark souls','gameScore'=>9,'length'=>25,'releaseDate'=>'2011-09-22','developer_id'=>1,'user_id'=>1],
        ['title'=>'Sekiro','gameScore'=>9.5,'length'=>20,'releaseDate'=>'2019-03-22','developer_id'=>1,'user_id'=>1],
        ['title'=>'Need for Speed: Most Wanted','gameScore'=>8.5,'length'=>15,'releaseDate'=>'2005-11-15','developer_id'=>2,'user_id'=>1],
        ['title'=>'Grand Theft Auto V','gameScore'=>8,'length'=>25,'releaseDate'=>'2013-09-17','developer_id'=>3,'user_id'=>1],
        ['title'=>'Witcher 3: Wild Hunt','gameScore'=>10,'length'=>40,'releaseDate'=>'2015-05-19','developer_id'=>4,'user_id'=>1],
        ['title'=>"Assassin's Creed",'gameScore'=>8,'length'=>10,'releaseDate'=>'2007-11-13','developer_id'=>5,'user_id'=>1],
        ['title'=>'Heavy rain','gameScore'=>6,'length'=>10,'releaseDate'=>'2010-02-18','developer_id'=>6,'user_id'=>1],
        ['title'=>'God of war','gameScore'=>9,'length'=>15,'releaseDate'=>'2005-03-22','developer_id'=>7,'user_id'=>1],
        ['title'=>'Call of Duty 4: Modern Warfare','gameScore'=>7,'length'=>10,'releaseDate'=>'2007-11-5','developer_id'=>8,'user_id'=>1],
        ['title'=>'Metal Gear Rising: Revengeance','gameScore'=>10,'length'=>15,'releaseDate'=>'2013-03-19','developer_id'=>9,'user_id'=>1],
        ['title'=>'Warcraft III: The Frozen Throne','gameScore'=>10,'length'=>40,'releaseDate'=>'2003-07-01','developer_id'=>10,'user_id'=>1],
        ['title'=>'Unravel Two','gameScore'=>5,'length'=>15,'releaseDate'=>'2018-06-19','developer_id'=>2,'user_id'=>1]];

        foreach($games as $game){
            Game::create($game);
        }



        $gameGenres = [['game_id'=>1,'genre_id'=>9],
        ['game_id'=>1,'genre_id'=>4],
        ['game_id'=>2,'genre_id'=>9],
        ['game_id'=>2,'genre_id'=>4],
        ['game_id'=>2,'genre_id'=>1],
        ['game_id'=>3,'genre_id'=>5],
        ['game_id'=>4,'genre_id'=>8],
        ['game_id'=>4,'genre_id'=>2],
        ['game_id'=>4,'genre_id'=>3],
        ['game_id'=>5,'genre_id'=>4],
        ['game_id'=>5,'genre_id'=>8],
        ['game_id'=>5,'genre_id'=>3],
        ['game_id'=>6,'genre_id'=>3],
        ['game_id'=>6,'genre_id'=>8],
        ['game_id'=>7,'genre_id'=>6],
        ['game_id'=>8,'genre_id'=>3],
        ['game_id'=>8,'genre_id'=>1],
        ['game_id'=>9,'genre_id'=>2],
        ['game_id'=>10,'genre_id'=>7],
        ['game_id'=>10,'genre_id'=>3],
        ['game_id'=>11,'genre_id'=>7],
        ['game_id'=>12,'genre_id'=>11],
        ['game_id'=>12,'genre_id'=>10]];

        foreach($gameGenres as $gameGenre){
            GameGenre::create($gameGenre);
        }


    }
}
