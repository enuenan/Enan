<?php

namespace Database\Seeders;

use App\Models\Admin\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = About::create([
            'image' => '/storage/about/vodq5mhbUaH2qVcz0pZcC94h6sBjWEpfdo7Pfelu.jpg',
            'title' => 'I\'m a Laravel Web Developer who love clean, simple, secure easily maintainable and modular codes.',
            'description' => 'Have the true desire to deliver maximum possible effort to get things done & strong will to learn as well as a self-motivated person. I do have the intention to serve any esteemed organization with utmost sincerity that offers challenges to accomplish missions, to achieve set goals with optimum perfection on the way to building up a career as a professional.',
        ]);
    }
}
