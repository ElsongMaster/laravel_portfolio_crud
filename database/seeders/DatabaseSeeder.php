<?php

namespace Database\Seeders;

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
            TitreSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            FactSeeder::class,
            PortfolioSeeder::class,
            ServiceSeeder::class,
            SkillSeeder::class
                ]);
        // \App\Models\User::factory(10)->create();
    }
}
