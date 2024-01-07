<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 1000; $i++) {

            DB::table('projects')->insert([
                'name' => fake()->name(),
                'description' => fake()->text(),
            ]);
        }
    }
}