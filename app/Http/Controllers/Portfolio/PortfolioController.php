<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Category;
use App\Models\Admin\CvAndResume;
use App\Models\Admin\Portfolio;
use App\Models\Admin\Skill;

class PortfolioController extends Controller
{
    protected string $viewNamespace;

    public function __construct()
    {
        $this->viewNamespace = config('portfolio.view_namespace', 'portfolio');
    }

    public function index()
    {
        $skills = Skill::all();
        $about = About::find(1);
        $portfolios = Portfolio::all();
        $categories = Category::all();
        $cv_and_resume = CvAndResume::latest()->first();

        return view(
            $this->viewNamespace . '::pages.home.index',
            compact('skills', 'about', 'portfolios', 'cv_and_resume', 'categories')
        );
    }

    public function edventure()
    {
        return view($this->viewNamespace . '::pages.portfolio-details.edventure');
    }

    public function doctorsBlog()
    {
        return view($this->viewNamespace . '::pages.portfolio-details.doctors-blog');
    }

    public function elmo()
    {
        return view($this->viewNamespace . '::pages.portfolio-details.el-mo1');
    }

    public function daruchini()
    {
        return view($this->viewNamespace . '::pages.portfolio-details.daruchini');
    }

    public function cowpik()
    {
        return view($this->viewNamespace . '::pages.portfolio-details.cowpik');
    }
}
