<?php

namespace App\Http\Controllers\Portfolio;

use App\Models\Admin\About;
use App\Models\Admin\Skill;
use Illuminate\Http\Request;
use App\Models\Admin\Portfolio;
use App\Models\Admin\CvAndResume;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $about = About::find(1);
        $portfolios = Portfolio::all();
        $cv_and_resume = CvAndResume::find(1);
        return view('portfolio.pages.home.index', compact('skills', 'about', 'portfolios', 'cv_and_resume'));
    }

    public function edventure()
    {
        return view('portfolio.pages.portfolio-details.edventure');
    }

    public function doctorsBlog()
    {
        return view('portfolio.pages.portfolio-details.doctors-blog');
    }

    public function elmo()
    {
        return view('portfolio.pages.portfolio-details.el-mo1');
    }

    public function daruchini()
    {
        return view('portfolio.pages.portfolio-details.daruchini');
    }

    public function cowpik()
    {
        return view('portfolio.pages.portfolio-details.cowpik');
    }
}
