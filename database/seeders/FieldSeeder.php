<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields= [
            [
                'name' => 'فرانت-اند'
            ],
            [
                'name' => 'بک-اند'
            ],
            [
                'name' => 'هوش مصنوعی'
            ]
        ];

        foreach ($fields as  $field) {
            Field::create($field);
        }
    }
}
