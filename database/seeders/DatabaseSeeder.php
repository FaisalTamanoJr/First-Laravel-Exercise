<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::count() < 3) {
            User::create([
                'firstname' => 'Kinzo',
                'middlename' => 'A.',
                'lastname' => 'Ushiromiya',
                'address' => 'Rokkenjima Island',
                'age' => 95,
            ]);
            User::create([
                'firstname' => 'Krauss',
                'middlename' => 'A.',
                'lastname' => 'Ushiromiya',
                'address' => 'Rokkenjima Island',
                'age' => 50,
            ]);
            User::create([
                'firstname' => 'Eva',
                'middlename' => 'A.',
                'lastname' => 'Ushiromiya',
                'address' => 'Japan',
                'age' => 47,
            ]);
        }
    }
}
