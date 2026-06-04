<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.pages.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
            'link' => 'required|url',
            'period' => 'required|string',
            'worked_as' => 'required|string',
            'keywords' => 'required|string',
        ]);

        $company = new Company();
        $this->saveData($company, $request);

        return redirect()->route('companies.index')->with(['success' => 'Company inserted successfully']);
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
    public function edit(Company $company)
    {
        return view('admin.pages.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image',
            'link' => 'required|url',
            'period' => 'required|string',
            'worked_as' => 'required|string',
            'keywords' => 'required|string',
        ]);

        $this->saveData($company, $request);

        return redirect()->route('companies.index')->with(['success' => 'Company updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->back()->with(['success' => 'Company deleted successfully']);
    }

    public function saveData($company, $request)
    {
        $company->name = $request->name;
        $company->link = $request->link;
        $company->period = $request->period;
        $company->worked_as = $request->worked_as;
        $company->keywords = $request->keywords;

        if ($request->hasFile('image')) {
            $company->image = Storage::url($request->image->store('public/companies'));
        }

        $company->save();
    }
}
