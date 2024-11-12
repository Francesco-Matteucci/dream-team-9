<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     //
        $games = [
            [
                'title' => 'Counter-Strike: Global Offensive',
                'description' => 'Uno sparatutto in prima persona di Valve con intensa modalità multiplayer.',
                'price' => 0, // Free-to-play
                'release_date' => '2012-08-21',
                'thumb' => 'csgo.jpg'
            ],
            [
                'title' => 'Dota 2',
                'description' => 'MOBA strategico con una vasta gamma di eroi e modalità competitive.',
                'price' => 0, // Free-to-play
                'release_date' => '2013-07-09',
                'thumb' => 'dota2.jpg'
            ],
            [
                'title' => 'PUBG: Battlegrounds',
                'description' => 'Battle royale con azione adrenalinica e ambienti realistici.',
                'price' => 29.99,
                'release_date' => '2017-12-20',
                'thumb' => 'pubg.jpg'
            ],
            [
                'title' => 'Apex Legends',
                'description' => 'Battle royale in prima persona con personaggi unici e capacità speciali.',
                'price' => 0, // Free-to-play
                'release_date' => '2019-02-04',
                'thumb' => 'apex_legends.jpg'
            ],
            [
                'title' => 'Lost Ark',
                'description' => 'Gioco di ruolo action con ambientazione fantasy ed epiche battaglie.',
                'price' => 0, // Free-to-play
                'release_date' => '2022-02-11',
                'thumb' => 'lost_ark.jpg'
            ],
            [
                'title' => 'Team Fortress 2',
                'description' => 'Classico sparatutto a squadre di Valve con stili di gioco vari e frenetici.',
                'price' => 0, // Free-to-play
                'release_date' => '2007-10-10',
                'thumb' => 'tf2.jpg'
            ],
            [
                'title' => 'Grand Theft Auto V',
                'description' => 'Gioco open world che permette al giocatore di esplorare e commettere crimini.',
                'price' => 29.99,
                'release_date' => '2013-04-14',
                'thumb' => 'gta_v.jpg'
            ],
            [
                'title' => 'Destiny 2',
                'description' => 'Sparatutto online in un mondo condiviso, con vari elementi RPG.',
                'price' => 0, // Free-to-play
                'release_date' => '2017-09-06',
                'thumb' => 'destiny2.jpg'
            ],
            [
                'title' => 'Rust',
                'description' => 'Gioco di sopravvivenza multiplayer dove tutto è una minaccia.',
                'price' => 39.99,
                'release_date' => '2018-02-08',
                'thumb' => 'rust.jpg'
            ],
            [
                'title' => 'Cyberpunk 2077',
                'description' => 'RPG d’azione futuristico ambientato in una città del futuro distopico.',
                'price' => 59.99,
                'release_date' => '2020-12-10',
                'thumb' => 'cyberpunk_2077.jpg'
            ],
        ];

        foreach ($games as $game){
            $newGame = new Game();
            $newGame->title = $game["title"];
            $newGame->description = $game["description"];
            $newGame->price = $game["price"];
            $newGame->release_date = $game["release_date"];
            $newGame->thumb = $game["thumb"];
            $newGame->save();
        }

    }
}
