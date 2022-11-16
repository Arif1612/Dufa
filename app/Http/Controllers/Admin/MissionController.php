<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MissionFormRequest;
use App\Models\Mission;
use toastr;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mission = Mission::all();
        return view('admin.mission.index', compact('mission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MissionFormRequest $request)
    {
        $data = $request->validated();

        $mission = new Mission;
        $mission->mdetails = $data['mdetails'];
        $mission->vdetails = $data['vdetails'];

        $mission->status = $request->status == true ? '1':'0';
        $mission->save();

        return redirect('mission')->with('messege','Data Inserted Successfully');

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
    public function edit($mission_id)
    {
        $mission = Mission::find($mission_id);
        return view('admin.mission.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MissionFormRequest $request, $mission_id)
    {
        $data = $request->validated();

        $mission = Mission::find($mission_id);
        $mission->mdetails = $data['mdetails'];
        $mission->vdetails = $data['vdetails'];

        $mission->status = $request->status == true ? '1':'0';
        $mission->update();

        return redirect('mission')->with('messege','Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($mission_id)
    {
        $mission = Mission::findorFail($mission_id);
        $mission->delete();

        return redirect('mission')->with('messege','Data Updated Successfully');
    }
}
