<?php

namespace Database\Seeders;

use App\Models\WeekDay;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WeekDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $week_days= [
            [
                'name' => 'شنبه'
            ],
            [
                'name' => 'یک‌‌شنبه'
            ],
            [
                'name' => 'دوشنبه'
            ],
            [
                'name' => 'سه‌شنبه'
            ],
            [
                'name' => 'چهارشنبه'
            ]
        ];

        foreach ($week_days as  $week_day) {
            WeekDay::create($week_day);
        }
    }
}
