<?php

namespace App\View\Components\company;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class timeline extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $companies = collect(
            [
                [
                    'image' => 'portfolio/assets/img/talent_pro-removedbg.png',
                    'name' => 'Talent Pro',
                    'link' => 'https://talentpro.global/',
                    'period' => 'Nov 2022 - Present',
                    'worked_as' => 'Laravel Backend Developer',
                    'keywords' => 'Laravel, Inertia, React, MySQL'
                ],
                [
                    'image' => 'portfolio/assets/img/Dynamicflow.png',
                    'name' => 'Dynamicflowit',
                    'link' => 'http://dynamicflowit.com/',
                    'period' => 'Sep 2021 - Nov 2022',
                    'worked_as' => 'Fullstack Developer',
                    'keywords' => 'Laravel, Shopify, Craft CMS'
                ],
                [
                    'image' => 'portfolio/assets/img/top5way.jpg',
                    'name' => 'Top5Way',
                    'link' => 'https://www.top5way.com/',
                    'period' => 'June 2020 - Nov 2021',
                    'worked_as' => 'Laravel Backend Developer',
                    'keywords' => 'Laravel, Inertia, React, MySQL'
                ],
            ]
        );

        return view('components.company.timeline', compact('companies'));
    }
}
