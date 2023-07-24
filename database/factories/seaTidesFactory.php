<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SeaTides>
 */
class seaTidesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $facker = Faker::create();

        return [
            "date" => $facker->dateTime(),
            "terbit" => $facker->time(),
            "transit" => $facker->time(),
            "terbenam" => $facker->time(),
            "durasi_siang" => $facker->time(),
            "pasang_surut" => $facker->time(),
            "ketinggian_surut" => $facker->randomFloat(1, 0, 10),
            "koefisien_surut" => $facker->numberBetween(0, 100),
            "pasang_naik" => $facker->time(),
            "ketinggian_naik" => $facker->randomFloat(1, 0, 10),
            "koefisien_naik" => $facker->numberBetween(0, 100),
        ];
    }
}
