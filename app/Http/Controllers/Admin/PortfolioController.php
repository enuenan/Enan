<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Portfolio;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.pages.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.portfolios.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $this->saveData($portfolio, $request);

        return redirect()->route('portfolio.index')->with(['success' => 'Inserted successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $categories = Category::all();
        return view('admin.pages.portfolios.edit', compact('portfolio', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->saveData($portfolio, $request);

        return redirect()->route('portfolio.index')->with(['success' => 'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully']);
    }

    public function saveData($portfolio, $request)
    {
        $portfolio->name = $request->name;
        $portfolio->slug = Str::slug($request->name);
        if ($request->hasFile('image')) {
            $portfolio->image = Storage::url($request->image->store('public/portfolio'));
        }

        $portfolio->description_title = $request->description_title;
        $portfolio->description = $request->description;
        $portfolio->client = $request->client;
        $portfolio->project_date = $request->project_date;
        $portfolio->git_url = $request->git_url;
        $portfolio->project_url = $request->project_url;
        $portfolio->category_id = $request->category_id;

        $portfolio->save();
    }
}
