<?php

namespace App\Http\Controllers;
use App\Asset_statuses;
use App\Asset_use_statuses;
use App\Section;
use App\Client;
use App\Display;
use App\Clienttype;
use App\NetworkConnection;
use Illuminate\Http\Request;

class ClientController extends Controller
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
        $Clienttypes = Clienttype::all();
        $NetworkConnections = NetworkConnection::all();

        return view('addcomputer')->with([
            'asset_statuses'=>$Asset_statuses,
            'asset_use_statuses'=>$Asset_use_statuses,
            'sections'=>$Sections,
            'clienttypes'=>$Clienttypes,
            'networkconnections'=>$NetworkConnections,
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
        if (request()->has('displayCount')) {
            $displayCount = request()->input('displayCount');
            return redirect()->back()->with('displayCount', $displayCount)->withInput();
        }

        $client = Client::create($request->all());

        $displayCount = request()->input('display_count');
        for ($i = 0; $i < $displayCount; $i++)
        {
            $display =  [ 
                            'client_id' => $client->id, 
                            'display_sapid' => request()->input('display_sapid')[$i],
                            'display_pid' => request()->input('display_pid')[$i],
                            'display_size' => request()->input('display_size')[$i],
                            'display_ratio' => request()->input('display_ratio')[$i],
                        ];
            Display::create($display);
        } 

        return redirect()->back()->with('displayCount', $displayCount)->withInput();


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
    private function validateData($data){
        $rules = [
            'type' =>'required',
            'sapid' => 'nullable|regex:/^[0-9]{12}+$/',
            'pid' => 'nullable',
            'location_id' => 'required',
            'function' => 'required',
            'asset_status' => 'required',
            'asset_use_status' => 'required',
            'user' =>'required',
            'section' => 'required',
            'owner' => 'required',
            'tel_no' => 'required',
            'brand' => 'nullable',
            'model' => 'nullable',
            'serial_no' => 'nullable',
            'cpu_model' => 'required',
            'cpu_speed' => 'required',
            'cpu_socket_number' =>'required',
            'hdd_no'=> 'required',
            'hdd_total_cap'=>'required',
            'display_count' => 'required',
            'os'=>'required',
            'os_arch'=>'required',
            'ms_office_version'=>'required',
            'antivirus'=>'required',
            'pdf_reader'=>'required',
            'ie_version'=>'required',
            'chrome_version'=>'nullable',
            'spss_version'=>'nullable',
            'other_software_detail'=>'nullable',
            'lan_type'=>'required',
            'lan_outlet_no'=>'nullable',
            'ip_address'=>'required_unless:lan_type,1|ipv4',
            'mac_address'=>'required_unless:lan_type,1|regex:/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/',
            'computer_name'=>'required',
            'remarks' => 'nullable',
            'issues' => 'nullable',
        ];

        $messages = [
            'sapid.regex'=>'กรุณาตรวจสอบรหัส SAP',
            'location_id.required'=>'กรุณาระบุสถานที่ตั้งเเครื่อง',
            'function.required'=>'',
            'asset_status.required'=>'',
            'asset_use_status.required'=>'',
            'section.required'=>'',
        ];
    }
}
