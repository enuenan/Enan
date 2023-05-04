<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\CvAndResume;
use App\Http\Controllers\Controller;

class CVAndResmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cv_and_resume = CvAndResume::find(1);
        return view('admin.pages.cv_and_resume.index', compact('cv_and_resume'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.cv_and_resume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cv_and_resume = new CvAndResume();
        $this->saveData($cv_and_resume, $request);

        return redirect()->route('cv-and-resume.index')->with(['success' => 'Inserted successfully']);
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
    public function edit(CvAndResume $cv_and_resume)
    {
        return view('admin.pages.cv_and_resume.edit', compact('cv_and_resume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CvAndResume $cv_and_resume)
    {
        $this->saveData($cv_and_resume, $request);

        return redirect()->route('cv-and-resume.index')->with(['success' => 'Updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CvAndResume $cv_and_resume)
    {
        $cv_and_resume->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully']);
    }

    public function saveData($cv_and_resume, $request)
    {
        $cv_and_resume->show = 1;
        $cv_and_resume->cv_link = $request->cv_link;
        $cv_and_resume->resume_link = $request->resume_link;

        $cv_and_resume->save();
    }
}
