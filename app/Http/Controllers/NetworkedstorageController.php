<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset_statuses;
use App\Asset_use_statuses;
use App\Section;
use App\NetworkedStorage;

class NetworkedstorageController extends Controller
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

        return view('addnetworkedstorage')->with([
            'asset_statuses'=>$Asset_statuses,
            'asset_use_statuses'=>$Asset_use_statuses,
            'sections'=>$Sections,
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
        $this->validateData($request);
        return $request->all();
        // $NetworkedStorage = NetworkedStorage::create($request->all());
        // return redirect()->back()->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
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
            'pid' =>'nullable',
            'location_id' => 'required',
            'section' => 'required',
            'response_person' => 'required',
            'asset_status' => 'required',
            'asset_use_status' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'serial_no' => 'required',
            'hdd_total_cap' => 'required',
            'no_of_physical_drive_max' => 'required|gte:2',
            'no_of_physical_drive_populated' => 'required|lte:no_of_physical_drive_max',
            'lun_count' => 'required',
        ];

        $messages = [
            'sapid.regex' => 'กรุณาใส่รหัส SAP ให้ถูกต้อง',
            'location_id.required' => 'กรุณาระบุที่ตั้ง',
            'section.required' => 'กรุณาเลือกหน่วยงาน',
            'response_person.required' => 'กรุณาระบุผู้รับผิดชอบ',
            'asset_status.required' => 'กรุณาระบุสถานะทางทะเบียนครุภัณฑ์',
            'asset_use_status.required' => 'กรุณาระบุสถานะการใช้งานครุภัณฑ์',
            'type.required' => 'กรุณาระบุชนิดของอุปกรณ์',
            'brand.required' => 'กรุณาระบุยี่ห้อ',
            'model.required' => 'กรุณาระบุรุ่น',
            'serial_no.required' => 'กรุณาระบุ Serial Number ของเครื่อง',
            'hdd_total_cap.required' => 'test 0',
            'no_of_physical_drive_max.required' => 'test1',
            'no_of_physical_drive_max.gte' => 'test1.1',
            'no_of_physical_drive_populated.required' => 'test2',
            'no_of_physical_drive_populated.lte' => 'test2.1',
            'lun_count.required' => 'กรุณาระบุจำนวน disk จำลอง',

        ];

        return $this->validate($data, $rules, $messages);
    }
}
