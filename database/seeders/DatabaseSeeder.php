<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TimeSeeder;
use Database\Seeders\FieldSeeder;
use Database\Seeders\GroupSeeder;
use Database\Seeders\WeekDaySeeder;
use Database\Seeders\UserPrimarySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserPrimarySeeder::class,
            FieldSeeder::class,
            TimeSeeder::class,
            WeekDaySeeder::class,
            GroupSeeder::class,
        ]);
    }
}
