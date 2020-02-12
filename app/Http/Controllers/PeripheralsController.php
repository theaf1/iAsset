<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset_statuses;
use App\Asset_use_statuses;
use App\Section;
use App\Peripherals;
use App\Peripheraltype;

class PeripheralsController extends Controller
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
        $Peripheraltypes = Peripheraltype::all();
        $Supplies = array(
            ['id'=>'1', 'name'=>'เบิกได้'],
            ['id'=>'2', 'name'=>'เบิกไม่ได้'],
            ['id'=>'3', 'name'=>'ไม่จำเป็น'],
        );
        $PeripheralConnections = array(
            ['id'=>'1', 'name'=>'USB'],
            ['id'=>'2', 'name'=>'Paralell port'],
            ['id'=>'3', 'name'=>'LAN'],
        );
        $ShareMethods = array(
            ['id'=>'1', 'name'=>'OS share'],
            ['id'=>'2', 'name'=>'network share'],
        );

        return view('addperipherals')->with([
            'asset_statuses'=>$Asset_statuses,
            'asset_use_statuses'=>$Asset_use_statuses,
            'sections'=>$Sections,
            'peripheraltypes'=>$Peripheraltypes,
            'supplies'=>$Supplies,
            'peripheralconnections'=>$PeripheralConnections,
            'sharemethods'=>$ShareMethods,
         
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
        // return $request->all();
        $this->validateData($request);
        $peripherals = Peripherals::create($request->all());
        return redirect()->back()->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
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
    private function validateData($data){
        $rules = [
            'type'=>'required',
            'sapid'=>'nullable',
            'pid'=>'nullable',
            'location_id'=>'required',
            'is_mobile'=>'required',
            'section'=>'required',
            'user'=>'required',
            // // 'section_status'=>'required',
            'tel_no'=>'required',
            'function'=>'required',
            'owner'=>'required',
            'asset_status'=>'required',
            'asset_use_status'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'serial_no'=>'required',
            'supply_consumables'=>'required',
            'connectivity'=>'required',
            'ip_address'=>'required_if:connectivity,3|ipv4',
            'share_name'=>'required_if:is_shared,1',
            'share_method'=>'required_if:is_shared,1',
        ];

        $messages =[
            'type.required'=>'1',
            'location_id.required'=>'2',
            'is_mobile.required'=>'3',
            'section.required'=>'4',
            // // 'section_status.required'=>'5',
            'user.required'=>'nbd',
            'tel_no.required'=>'6',
            'function.required'=>'7',
            'owner.required'=>'8',
            'asset_status.required'=>'9',
            'asset_use_status.required'=>'10',
            'brand.required'=>'11',
            'model.required'=>'12',
            'serial_no.required'=>'13',
            'supply_consumables.required'=>'14',
            'connectivity.required'=>'15',
            'ip_address.required_if'=>'15.9',
            'ip_address.ipv4'=>'16',
            'share_name.required_if'=>'17',
            'share_method.required_if'=>'18',
        ];

        return $this->validate($data, $rules, $messages);
    }
}
