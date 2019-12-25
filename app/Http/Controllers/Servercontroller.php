<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset_statuses;
use App\Asset_use_statuses;
use App\Section;
use App\ServerOS;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Asset_statuses = Asset_statuses::all();
        $Asset_use_statuses = Asset_use_statuses::all();
        $Sections = Section::all();
        $ServerOSes = ServerOS::all();

        return view('addserver')->with([
            'asset_statuses'=>$Asset_statuses,
            'asset_use_statuses'=>$Asset_use_statuses,
            'sections'=>$Sections,
            'server_oses'=>$ServerOSes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validateData($data)
    {
        $rules = [
            'sapid' => 'nullable|regex:/^[0-9]{12}+$/',
            'pid' => 'nulllable',
            'location_id' => 'required',
            'section' => 'required',
            'tel_no' => 'required',
            'response_person' => 'required',
            'asset_status' => 'required',
            'asset_use_status' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'serial_no' => 'required',
            'cpu_model' => 'required',
            'cpu_speed' => 'required',
            'no_of_physical_drive_max' => 'required_if:is_raid,1',
            'no_of_physical_drive_populated' => 'required_if:is_raid,1|lte:no_of_physical_drive_max',
            'lun_count' => 'required_if:is_raid,1',
            'hdd_total_cap' => 'required',
            'display_sapid' => 'nullable',
            'display_pid' => 'nullable',

        ];

        $messages = [
            //
        ];

        return $this->validate($data, $rules, $messages);
    }
}