<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostSeeder::class,
            TypeSeeder::class,
            TecnologySeeder::class,
            UserSeeder::class,
            UserDetailSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
            ProjectSeeder::class,
            ProjectTecnologySeeder::class
        ]);
    }
}
