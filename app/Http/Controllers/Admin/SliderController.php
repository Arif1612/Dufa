<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use toastr;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderFormRequest $request)
    {
        $data = $request->validated();

        $slider = new Slider;
        $slider->title = $data['title'];
        $slider->description = $data['description'];


        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            //$extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->status = $request->status == true ? '1':'0';
        $slider->save();

        return redirect('slider')->with('messege','Data Inserted Successfully');

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
    public function edit($slider_id)
    {
        $slider = Slider::find($slider_id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderFormRequest $request, $slider_id)
    {
        $data = $request->validated();

        $slider = Slider::find($slider_id);
        $slider->title = $data['title'];
        $slider->description = $data['description'];


        if ($request->hasfile('image'))
        {
            $destination = 'uploads/slider/'.$slider->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            //$extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->status = $request->status == true ? '1':'0';
        $slider->update();

        return redirect('slider')->with('messege','Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slider_id)
    {
        $slider = Slider::find($slider_id);

        if ($slider)
        {
            $destination = 'uploads/slider/'.$slider->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $slider->delete();
            return redirect('slider')->with('messege','Data Deleted Successfully');
        }
        else
        {
         return redirect('slider')->with('messege','Data Not Deleted Successfully');   
        }
    }
}
