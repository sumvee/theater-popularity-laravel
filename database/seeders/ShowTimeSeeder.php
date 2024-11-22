<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShowTime;

class ShowTimeSeeder extends Seeder
{
    public function run():void
    {
        ShowTime::factory()->count(10)->create();
    }
}
