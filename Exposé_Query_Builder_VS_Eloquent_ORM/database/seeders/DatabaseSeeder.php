<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PostSeeder::class,
            // ProjectSeeder::class
        ]);
    }
}
/*
ORM elquent     => 3,501 ms     -> 1000 insert
Query Builder   => 3,270 ms     -> 1000 insert

ORM elquent     => 40,490  ms     -> 10000 insert
Query Builder   => 33,751 ms     -> 10000 insert
*/