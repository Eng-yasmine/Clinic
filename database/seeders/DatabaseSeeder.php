<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Major;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MajorSeeder;
use Database\Seeders\DoctorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory(100)->create();


        $this->call([
            MajorSeeder::class,
            DoctorSeeder::class,
        ]);
    }
}
