<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = Player::factory(10)->create();

        $players->each(function ($player) {
            Section::factory()->create([
                'player_id' => $player->id,  // Make sure the section is linked to the player
            ]);

        });
    }
}
