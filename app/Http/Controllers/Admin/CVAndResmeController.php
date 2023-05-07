<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\CvAndResume;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        $cv_and_resume = CvAndResume::latest()->first();
        if (!$cv_and_resume) {
            $cv_and_resume = new CvAndResume();
        }
        if ($request->hasFile('cv')) {
            $cv = Storage::url($request->cv->store('public/cv_and_resume'));
        } else {
            $cv = null;
        }
        if ($request->hasFile('resume')) {
            $resume = Storage::url($request->resume->store('public/cv_and_resume'));
        } else {
            $resume = null;
        }
        $this->saveData($cv_and_resume, $request, $cv, $resume);

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
        if ($request->hasFile('cv')) {
            $cv = Storage::url($request->cv->store('public/cv_and_resume'));
        } else {
            $cv = null;
        }
        if ($request->hasFile('resume')) {
            $resume = Storage::url($request->resume->store('public/cv_and_resume'));
        } else {
            $resume = null;
        }
        $this->saveData($cv_and_resume, $request, $cv, $resume);
        // $this->saveData($cv_and_resume, $request, $cv_and_resume->cv, $cv_and_resume->resume);

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

    public function saveData($cv_and_resume, $request, $cv, $resume)
    {
        $cv_and_resume->show = $request->show;
        if ($cv) {
            $cv_and_resume->cv = $cv;
        }
        if ($resume) {
            $cv_and_resume->resume = $resume;
        }

        $cv_and_resume->save();
    }
}
