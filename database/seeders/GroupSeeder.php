<?php

namespace Database\Seeders;

use App\Models\Time;
use App\Models\Group;
use App\Models\WeekDay;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $week_days = WeekDay::all();
        $times = Time::all();

        foreach ($week_days as $week_day){
            foreach ($times as $time){
                Group::create([
                    'time_id' => $time->id,
                    'week_day_id' => $week_day->id,
                ]);
            }
        }
    }
}
