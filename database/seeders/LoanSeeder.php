<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::create([
            'car_id' => 1,
            'user_id' => 1,
            'loan_date' => '12-06-2024',
            'return_date' => '13-06-2024',
            'total_cost' => '280.000',
            'status' => 'Lunas',
        ]);

        Loan::create([
            'car_id' => 2,
            'user_id' => 2,
            'loan_date' => '14-06-2024',
            'return_date' => '15-06-2024',
            'total_cost' => '1.000.000',
            'status' => 'Lunas',
        ]);

        Loan::create([
            'car_id' => 3,
            'user_id' => 3,
            'loan_date' => '16-06-2024',
            'return_date' => '17-06-2024',
            'total_cost' => '290.000',
            'status' => 'Lunas',
        ]);

        Loan::create([
            'car_id' => 4,
            'user_id' => 4,
            'loan_date' => '18-06-2024',
            'return_date' => '19-06-2024',
            'total_cost' => '295.000',
            'status' => 'Lunas',
        ]);

        Loan::create([
            'car_id' => 5,
            'user_id' => 5,
            'loan_date' => '20-06-2024',
            'return_date' => '21-06-2024',
            'total_cost' => '275.000',
            'status' => 'Lunas',
        ]);
    }
}
        