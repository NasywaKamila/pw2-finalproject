<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Nasywa Kamila',
            'username' => 'nasywa',
            'password' => 'matahari',
            'email' => 'nasywa@gmail.com',
        ]);

        User::create([
            'fullname' => 'Niswatun Khasanah D',
            'username' => 'niswa',
            'password' => 'niswa123',
            'email' => 'niswa@gmail.com',
        ]);

        User::create([
            'fullname' => 'Audy Naira A',
            'username' => 'audy',
            'password' => 'audy123',
            'email' => 'audy@gmail.com',
        ]);

        User::create([
            'fullname' => 'Adinda Dwi A',
            'username' => 'adinda',
            'password' => 'adinda123',
            'email' => 'adinda@gmail.com',
        ]);

        User::create([
            'fullname' => 'Zahra Nathania P.W',
            'username' => 'nathan',
            'password' => 'nathan123',
            'email' => 'zahra@gmail.com',
        ]);





    }
}
