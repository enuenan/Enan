<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::addNamespace(
        //     config('portfolio.view_namespace'),
        //     config('portfolio.portfolio_base_path')
        // );

        View::addNamespace(
            config('portfolio.view_namespace', 'portfolio'),
            config('portfolio.portfolio_base_path', resource_path('views/portfolio-v2'))
        );
    }
}
