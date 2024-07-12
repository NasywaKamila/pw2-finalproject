<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'id' => 1,
            'title' => 'Toyota fortuner',
            'type_id' => 1,
            'photo' => 'car-01.jpg',
            'cost_per_day' => '250.000',
            'year' => 2016,
            'license_plate' => 'B 1234 ABC',
        ]);

        Car::create([
            'id' => 2,
            'title' => 'Honda Odyssey',
            'type_id' => 2,
            'photo' => 'car-02.jpg',
            'cost_per_day' => '280.000',
            'year' => 2013,
            'license_plate' => 'G 7890 MNO',
        ]);

        Car::create([
            'id' => 3,
            'title' => 'Suzuki Ignis',
            'type_id' => 3,
            'photo' => 'car-03.jpg',
            'cost_per_day' => '270.000',
            'year' => 2016,
            'license_plate' => 'D 0123 VWX',
        ]);

        Car::create([
            'id' => 4,
            'title' => 'Mazda CX-3',
            'type_id' => 4,
            'photo' => 'car-04.jpg',
            'cost_per_day' => '266.000',
            'year' => 2015,
            'license_plate' => 'G 6789 HIJ',
        ]);

        Car::create([
            'id' => 5,
            'title' => 'Toyota Corolla Verso',
            'type_id' => 5,
            'photo' => 'car-05.jpg',
            'cost_per_day' => '269.000',
            'year' => 2004,
            'license_plate' => 'D 0123 KLM',
        ]);
    }
}
        