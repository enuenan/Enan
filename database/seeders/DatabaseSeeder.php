<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PortfolioSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            AboutSeeder::class,
            SkillSeeder::class,
            CategorySeeder::class,
            PortfolioSeeder::class,
        ]);
    }
}
