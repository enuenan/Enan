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
                'icon' => '<i class="fa-brands fa-vuejs fa-lg" style="color: #41b879;"></i>',
                'name' => 'VUE js',
                'description' => 'Can build web apps with VUE Js. Mid level expert at VUE Js.',
            ],
            [
                'icon' => '<i class="fa-brands fa-react fa-lg" style="color: #61dbfb;"></i>',
                'name' => 'React js',
                'description' => 'Can build web apps with React Js. Mid level expert at React Js.',
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
            ],
            [
                'icon' => '<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 31" class="w-32"><path d="M24.324 5.188a3.695 3.695 0 0 0-7.39 0v19.708a3.695 3.695 0 0 0 7.39 0V5.188Z" stroke="#4F46E5" stroke-miterlimit="10"></path> <path d="M39.001 7.464a3.695 3.695 0 1 0-5.82-4.554L17.75 22.632a3.695 3.695 0 0 0 5.82 4.554L39 7.464ZM23.528 7.465a3.695 3.695 0 0 0-5.82-4.554L2.277 22.633a3.695 3.695 0 0 0 5.82 4.554L23.529 7.465Z" stroke="#4F46E5" stroke-miterlimit="10"></path> <path d="M39.782 5.188a3.695 3.695 0 1 0-7.39 0v19.708a3.695 3.695 0 0 0 7.39 0V5.188Z" stroke="#4F46E5" stroke-miterlimit="10"></path> <path d="M74.64 17.863v8.868c0 .986-.862 1.848-1.847 1.848s-1.724-.74-1.724-1.848V17.74c0-1.971-1.602-3.572-3.695-3.572-1.971 0-3.696 1.6-3.696 3.572v8.991c0 .986-.739 1.848-1.724 1.848-.986 0-1.848-.74-1.848-1.848V17.74a3.575 3.575 0 0 0-3.572-3.572c-1.97 0-3.695 1.6-3.695 3.572v8.991c0 .986-.739 1.848-1.724 1.848-.986 0-1.848-.74-1.848-1.848V17.74c0-3.942 3.202-7.144 7.267-7.144 2.094 0 4.065.985 5.42 2.463 1.355-1.601 3.325-2.463 5.42-2.463 3.941 0 7.267 3.202 7.267 7.144v.123ZM94.718 19.587v7.021c0 .986-.739 1.848-1.847 1.848-.74 0-1.725-.74-1.725-1.848-1.601 1.232-3.326 1.848-5.296 1.848-5.05 0-9.115-3.819-9.115-8.869a9.094 9.094 0 0 1 9.115-9.114c5.05.123 8.868 4.064 8.868 9.114Zm-3.572 0c0-2.956-2.34-5.543-5.296-5.543-2.957 0-5.543 2.587-5.543 5.543 0 2.957 2.586 5.297 5.543 5.297 3.079.123 5.296-2.217 5.296-5.297ZM97.305 6.408c-.37-.37-.493-.74-.493-1.232 0-.493.246-.985.493-1.232.37-.37.739-.492 1.231-.492.493 0 .986.246 1.232.492.37.37.493.74.493 1.232 0 .493-.123.985-.493 1.232-.37.37-.739.492-1.232.492-.37 0-.862-.123-1.231-.492Zm-.493 20.323V12.32c0-.985.739-1.724 1.848-1.724.985 0 1.724.739 1.724 1.724v14.411c0 .986-.74 1.848-1.724 1.848-1.109 0-1.848-.862-1.848-1.848ZM117.259 26.731c0 .986-.739 1.848-1.725 1.848h-11.208c-.739 0-1.355-.37-1.602-.985-.369-.616-.246-1.355.124-1.848l8.991-11.578h-7.513c-.986 0-1.725-.863-1.725-1.848 0-.985.739-1.724 1.725-1.724h11.208c.739 0 1.355.37 1.602.985.369.616.246 1.355-.124 1.848l-8.991 11.578h7.637c.862 0 1.601.739 1.601 1.724ZM134.134 26.731c0 .986-.739 1.848-1.725 1.848H121.2c-.739 0-1.355-.37-1.601-.985-.369-.616-.246-1.355.123-1.848l8.992-11.578h-7.637c-.985 0-1.724-.863-1.724-1.848 0-.985.739-1.724 1.724-1.724h11.209c.739 0 1.355.37 1.601.985.37.616.247 1.355-.123 1.848l-8.992 11.578h7.637c.986 0 1.725.739 1.725 1.724ZM136.228 26.731V3.328c0-.985.739-1.724 1.847-1.724.986 0 1.725.739 1.725 1.724v23.403c0 .986-.739 1.848-1.725 1.848-1.108 0-1.847-.862-1.847-1.848ZM160 19.464c0 .986-.739 1.725-1.848 1.725h-12.44c.739 2.093 2.71 3.695 5.173 3.695.862 0 2.34-.123 4.065-1.232.862-.493 1.971 0 2.34.862.37.863 0 1.848-.862 2.34-2.34 1.602-4.188 1.602-5.543 1.602a8.963 8.963 0 0 1-8.992-8.992c0-4.927 4.065-8.991 8.992-8.991 4.434 0 9.115 3.202 9.115 8.991Zm-14.165-1.724h10.347c-.739-2.464-3.08-3.695-5.174-3.695-2.463 0-4.434 1.478-5.173 3.695Z" fill="#1E293B"></path></svg>',
                'name' => 'Maizzle',
                'description' => 'I can build email template with Maizzle. Maizzle use Tailwind css to build email.',
            ]
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
