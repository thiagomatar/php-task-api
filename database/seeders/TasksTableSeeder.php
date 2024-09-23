<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('tasks')->insert([
           'name' => 'Aprendendo PHP',
           'complete' => false,
       ]);

        DB::table('tasks')->insert([
            'name' => 'Aprendendo Javascript',
            'complete' => false,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Aprendendo Laravel',
            'complete' => false,
        ]);
    }
}
