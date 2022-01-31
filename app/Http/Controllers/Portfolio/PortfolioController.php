<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Skill;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('portfolio.pages.home.index', compact('skills'));
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
