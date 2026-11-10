<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index ()
    {
        $games = $this->getGames();
        $existenJuegos = count($games) > 0 ? true : false;
        return view('games.index', compact('games', 'existenJuegos'));
    }

    private function getGames()
    {
        return [
            ['id' => 1, 'img' => 'https://en.wikipedia.org/wiki/Special:FilePath/The_Legend_of_Zelda_Breath_of_the_Wild.jpg', 'name' => 'The Legend of Zelda', 'genre' => 'Action-adventure'],
            ['id' => 2, 'img' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1593500/library_600x900.jpg', 'name' => 'God of War', 'genre' => 'Action-adventure'],
            ['id' => 3, 'img' => 'https://en.wikipedia.org/wiki/Special:FilePath/Gears_of_War_E-Day.jpg', 'name' => 'Gears of War E-Day', 'genre' => 'Action-adventure'],
            ['id' => 4, 'img' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/2000950/library_600x900.jpg', 'name' => 'Call of Duty Modern Warfare', 'genre' => 'Action-adventure'],
            ['id' => 5, 'img' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/292030/library_600x900.jpg', 'name' => 'The Witcher 3', 'genre' => 'Action-adventure']
        ];
    }
}
