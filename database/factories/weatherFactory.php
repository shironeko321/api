<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weather>
 */
class weatherFactory extends Factory
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
            "waktu_cuaca" => strval($facker->time()),
            "kondisi_cuaca" => Arr::random(["cerah", "berawan", "gerimis", "hujan", "badai"]),
            "suhu_cuaca" => strval($facker->numberBetween(25, 40)),
            "persentase_hujan_cuaca" => strval($facker->numberBetween(0, 100)),
            "arah_angin_cuaca" => strval($facker->numberBetween(0, 50)),
        ];
    }
}
