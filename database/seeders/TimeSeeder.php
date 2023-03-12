<?php

namespace Database\Seeders;

use App\Models\Time;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $times= [
            [
                'name' => '08:30 - 10'
            ],
            [
                'name' => '10:30 - 12'
            ],
            [
                'name' => '12:30 - 14'
            ],
            [
                'name' => '14:30 - 16'
            ],
            [
                'name' => '16:30 - 18'
            ],
        ];

        foreach ($times as  $time) {
            Time::create($time);
        }
    }
}
