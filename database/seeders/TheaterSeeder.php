<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Theater;

class TheaterSeeder extends Seeder
{
    public function run():void
    {
        Theater::factory()->count(10)->create();
    }
}
