<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowerUpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('power_ups')->insert([
            [
                'name' => 'Supersonic',
                'description' => 'Players can get 1.5x the score for 20 seconds when they play at a faster speed.',
                'effect' => '1.5x score for 20 seconds',
                'duration' => 20,
            ],
            [
                'name' => 'Streak Booster',
                'description' => 'Boosts the number in the player\'s streak counter.',
                'effect' => 'Boost streak counter',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => 'Gift',
                'description' => 'Players can send another player an extra score of 800.',
                'effect' => 'Send 800 extra score',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => 'Double Jeopardy',
                'description' => 'Players get double the score if they choose the correct answer but lose it all if they choose the wrong answer.',
                'effect' => 'Double score or lose all',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => '2X',
                'description' => 'Players get twice the score for answering a question correctly.',
                'effect' => '2x score for correct answer',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => '50-50',
                'description' => 'Eliminates half of the incorrect answer options.',
                'effect' => 'Eliminate half of incorrect options',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => 'Eraser',
                'description' => 'Eliminates one wrong option.',
                'effect' => 'Eliminate one wrong option',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => 'Immunity',
                'description' => 'A player can attempt the same question twice in case they answered it incorrectly the first time.',
                'effect' => 'Attempt question twice',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => 'Time Freeze',
                'description' => 'The timer is frozen to allow players to answer 1 question.',
                'effect' => 'Freeze timer for 1 question',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => 'Power Play',
                'description' => 'All players in the session get 50% more score in 20 seconds.',
                'effect' => '50% more score for all players',
                'duration' => 20,
            ],
            [
                'name' => 'Streak Saver',
                'description' => 'Protects a player’s streak against an incorrect answer.',
                'effect' => 'Protect streak',
                'duration' => 0, // Tidak ada durasi
            ],
            [
                'name' => 'Glitch',
                'description' => 'All players\' screens glitch for 10 seconds (does not affect scores).',
                'effect' => 'Glitch screens for 10 seconds',
                'duration' => 10,
            ],
        ]);
    }
}
