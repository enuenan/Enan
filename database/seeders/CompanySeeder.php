<?php

namespace Database\Seeders;

use App\Models\Admin\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    // php artisan db:seed --class=CompanySeeder

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'image' => 'portfolio/assets/img/talent_pro-removedbg.png',
                'name' => 'Talent Pro',
                'link' => 'https://talentpro.global/',
                'period' => 'Nov 2022 - Present',
                'worked_as' => 'Laravel Backend',
                'keywords' => 'Laravel, Inertia, React, MySQL',
            ],
            [
                'image' => 'portfolio/assets/img/Dynamicflow.png',
                'name' => 'Dynamicflowit',
                'link' => 'https://dynamicflowit.com/',
                'period' => 'Sep 2021 - Oct 2022',
                'worked_as' => 'Fullstack',
                'keywords' => 'Laravel, Shopify, Craft CMS, MySQL, Maizzle, React',
            ],
            [
                'image' => 'portfolio/assets/img/top5way.jpg',
                'name' => 'Top5Way',
                'link' => 'https://www.top5way.com/',
                'period' => 'June 2020 - Nov 2021',
                'worked_as' => 'Fullstack',
                'keywords' => 'Laravel, Livewire, MySQL',
            ],
        ];

        foreach ($companies as $company) {
            Company::updateOrCreate(['name' => $company['name']], $company);
        }
    }
}
