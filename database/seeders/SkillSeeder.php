<?php

namespace Database\Seeders;

use App\Models\Admin\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'icon' => '<i class="fa-brands fa-laravel" style="color: #ff2d20 !important;"></i>',
                'name' => 'Laravel',
                'description' => 'I am a laravel wev developer. Fully skilled in Laravel.',
            ],
            [
                'icon' => '<i class="fa-brands fa-js" style="color: #f7df1e !important"></i>',
                'name' => 'JavaScript',
                'description' => 'Know JavaScript at midlevel.',
            ],
            [
                'icon' => '<span class="iconify" data-icon="cib:vue-js"></span>',
                'name' => 'VUE js',
                'description' => 'Can build web apps with VUE Js. Mid level expert at VUE Js.',
            ],
            [
                'icon' => '<span class="iconify" data-icon="logos:shopify"></span>',
                'name' => 'Shopify',
                'description' => 'I can build your ecommerce website with Shopify.',
            ],
            [
                'icon' => '<i class="iconify" data-icon="logos:craftcms"></i>',
                'name' => 'Craft CMS',
                'description' => 'I can build your website with Craft CMS.',
            ],
            [
                'icon' => '<i class="fa-thin fa-database"></i>',
                'name' => 'Database',
                'description' => 'Expert at MySQL.',
            ],
            [
                'icon' => '<span class="iconify" data-icon="logos:bootstrap"></span>',
                'name' => 'Bootstrap',
                'description' => 'Can design a website with Bootstrap.',
            ],
            [
                'icon' => '<span class="iconify" data-icon="logos:tailwindcss-icon"></span>',
                'name' => 'Tailwind',
                'description' => 'Can design a website with Tailwind.',
            ]
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
