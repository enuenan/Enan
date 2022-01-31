<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::find(1);
        return view('admin.pages.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = Storage::url($request->image->store('public/about'));
            $this->saveData($request, $image);
        } else {
            $image = About::select('image')->first();
            $this->saveData($request, $image->image);
        }

        return redirect()->route('about.index')->with(['success' => 'Successfully created a bakers merche']);
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
    public function edit(About $about)
    {
        return view('admin.pages.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $image = Storage::url($request->image->store('public/about'));
            $findPreviousImage = About::select('image')->first();
            if ($findPreviousImage) {
                $storageImage = public_path($findPreviousImage->image);
                if ($storageImage) {
                    $deleted = File::delete(public_path($findPreviousImage->image));
                }
            }
            $this->saveData($request, $image);
        } else {
            $image = About::select('image')->first();
            $this->saveData($request, $image->image);
        }

        return redirect()->route('about.index')->with(['success' => 'Successfully created a bakers merche']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully']);
    }

    public function saveData($request, $image)
    {
        DB::table('abouts')->updateOrInsert(
            ['id' => 1,],
            [
                'image' => $image,
                'title' => $request->title,
                'description' => $request->description,
            ]
        );
    }
}
