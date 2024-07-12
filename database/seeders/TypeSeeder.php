<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'id' => 1,
            'name' => 'SUV',
            'description' => 'Memiliki ketangguhan daya jelajah dari pengaplikasian teknologi ground clearance, mesin bertenaga besar.',
        ]);

        Type::create([
            'id' => 2,
            'name' => 'MPV',
            'description' => 'Keunggulan di interior seperti ruangan yang nyaman dan besar.',
        ]);

        Type::create([
            'id' => 3,
            'name' => 'City Car',
            'description' => 'Keunggulan nya irit bahan bakar.',
        ]);

        Type::create([
            'id' => 4,
            'name' => 'Crossover',
            'description' => 'Mobil ini digabungkan untuk memunculkan sisi kepraktisan pada sebuah kendaraan.',
        ]);

        Type::create([
            'id' => 5,
            'name' => 'Station Wagon',
            'description' => 'Mobil station wagon adalah mobil sedan yang memiliki bagasi diperpanjang. ',
        ]);
    }
}
