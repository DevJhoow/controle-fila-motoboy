<?php

namespace Database\Seeders;

use App\Models\Restaurante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurante::firstOrCreate(
            ['nome' => 'Rancho Colonial Grill'],
            [
                'latitude' => -23.550520,
                'longitude' => -46.633308,
            ]
        );
    }
}
