<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SeaTides;
use App\Models\Weather;
use App\Models\Weather_date;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Weather_date::factory()
            ->has(Weather::factory()->count(7), "cuaca")
            ->create();
        SeaTides::factory()->count(7)->create();
    }
}
