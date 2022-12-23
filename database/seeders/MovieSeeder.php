<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        DB::table('movies')->insert([
            'title' => 'The Matrix Resurrections',
            'description' => 'Return to a world of two realities: one, everyday life; the other, what lies behind it. To find out if his reality is a construct, to truly know himself, Mr. Anderson will have to choose to follow the white rabbit once more.',
            'genre' => 'ActionSci-Fi',
            'character_name' => 'Neo / Thomas Anderson',
            'director' => 'Lana Wachowski',
            'release_date' => '2021-12-22', 
            'thumbnail' => 'thematrixresurrectionsation2.jpg',
            'background' => 'thematrixresurrectionsation1.jpeg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Resident Evil: Welcome to Raccoon City',
            'description' => 'Set in 1998, this origin story explores the secrets of the mysterious Spencer Mansion and the ill-fated Raccoon City.',
            'genre' => 'ActionSci-Fi',
            'character_name' => 'Claire Redfield',
            'director' => 'Johannes Roberts',
            'release_date' => '28/12/2021', 
            'thumbnail' => 'ResidentE1.jpg',
            'background' => 'ResidentE2.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Venom: Let There Be Carnage',
            'description' => 'Eddie Brock attempts to reignite his career by interviewing serial killer Cletus Kasady, who becomes the host of the symbiote Carnage and escapes prison after a failed execution.',
            'genre' => 'ActionThriller',
            'character_name' => 'Eddie Brock / Venom',
            'director' => 'Andy Serkis',
            'release_date' => '17/11/2021', 
            'thumbnail' => 'Venom2.jpg',
            'background' => 'Venom1.jpg'
        ]);

        DB::table('movies')->insert([
            'title' => 'Encanto',
            'description' => 'A Colombian teenage girl has to face the frustration of being the only member of her family without magical powers.',
            'genre' => 'AnimationMusical',
            'character_name' => 'Abuela Alma',
            'director' => 'Jared BushByron, HowardCharise, Castro Smith',
            'release_date' => '24/11/2021', 
            'thumbnail' => 'Encanto2.jpeg',
            'background' => 'Encanto1.png'
        ]);

        DB::table('movies')->insert([
            'title' => 'Spider-Man: No Way Home',
            'description' => 'With Spider-Man is identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.',
            'genre' => 'ActionFantasy',
            'character_name' => 'Peter Parker / Spider-Man',
            'director' => 'Jon Watts',
            'release_date' => '15/11/2021', 
            'thumbnail' => 'SpiderManNoWayHome1.jpg',
            'background' => 'SpiderManNoWayHome2.jpg'
        ]);
    }
}