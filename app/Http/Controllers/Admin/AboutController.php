<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AboutFormRequest;
use App\Models\About;
use Illuminate\Support\Facades\File;
use toastr;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutFormRequest $request)
    {
        $data = $request->validated();

        $about = new About;
        $about->name = $data['name'];
        $about->title = $data['title'];
        $about->details = $data['details'];


        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            //$extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/about/',$filename);
            $about->image = $filename;
        }

        $about->status = $request->status == true ? '1':'0';
        $about->save();

        return redirect('about')->with('messege','Data Inserted Successfully');

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
    public function edit($about_id)
    {
        $about = About::find($about_id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutFormRequest $request, $about_id)
    {
        $data = $request->validated();

        $about = About::find($about_id);
        $about->name = $data['name'];
        $about->title = $data['title'];
        $about->details = $data['details'];


        if ($request->hasfile('image'))
        {
            $destination = 'uploads/about/'.$about->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            //$extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/about/',$filename);
            $about->image = $filename;
        }

        $about->status = $request->status == true ? '1':'0';
        $about->update();

        return redirect('about')->with('messege','Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($about_id)
    {
        $about = About::find($about_id);

        if ($about)
        {
            $destination = 'uploads/about/'.$about->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $about->delete();
            return redirect('about')->with('messege','Data Deleted Successfully');
        }
        else
        {
         return redirect('about')->with('messege','Data Not Deleted Successfully');   
        }
    }
}