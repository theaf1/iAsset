@extends('Layouts.app')
@section('content')
<div class="container-fuild">
    <div class="col-12 mx-auto">
        <form action="{{ url('/add-computer') }}" method="post" id="computer_form">
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลครุภัณฑ์พื้นฐาน</h4>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- ชนิดของครุภัณฑ์คอมพิวเตอร์ -->
                                <div class="form-group"> 
                                    <label for="type">ชนิด</label>
                                    <select class="form-control" id="type" name="type">
                                        @foreach($clienttypes as $clienttype)
                                            <option value="{{ $clienttype['id'] }}" {{ old('type') == $clienttype['id'] ? 'selected' : ''}}>{{ $clienttype['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div> 
                            </div>     
                            <div class="col-sm-12 col-lg-6"> <!-- รหัส SAP -->
                                <div class="form-group">
                                    <label for="sapid">รหัส SAP</label>
                                    <input type="text" class="form-control" id="sapid" name="sapid" placeholder="กรอกรหัส SAP" value="{{ old('sapid') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- รหัสครุภัณฑ์ -->
                                <div class="form-group">
                                    <label for="pid">รหัสครุภัณฑ์</label>
                                    <input type="text" class="form-control" id="pid" name="pid" placeholder="11006000-I-9999-001-0001/99" value="{{ old('pid') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!-- ห้อง -->
                                <div class="form-group">
                                    <label for="room">ห้อง</label>
                                    <input type="text" class="form-control" name="room" id="room_autocomplete"  value="{{ old('room') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- ตึก -->
                                <div class="form-group">
                                    <label for="building">ตึก</label>
                                    <input type="text" class="form-control" name="building" id="building" value="{{ old('building') }}" readonly/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!-- ชั้น -->
                                <div class="form-group">
                                    <label for="location">ชั้น</label>
                                    <input type="text" class="form-control" name="location" id="location" value="{{ old('location') }}" readonly/>
                                </div>
                            </div>
                        </div>
                        <input hidden type="number" name="location_id" value="{{ old('location_id') }}"><!--ค่า location_id-->
                        <div class="form-row"> 
                            <div class="col-sm-12 col-lg-6"> <!-- ลักษณะการใช้งาน -->
                                <div class="form-group">
                                    <label for="is_mobile">ลักษณะการใช้งาน</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_mobile" id="is_mobile" value="0" {{ old('is_mobile') == 0 && old('is_mobile') !== null ? 'checked' : ''}}><label for="is_mobile">เป็นเครื่องเคลื่อนที่</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="is_mobile" id="is_mobile2" value="1" {{ old('is_mobile') == 1 ? 'checked' : ''}}><label for="is_mobile2">เป็นเครื่องประจำที่</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!-- ระบบงาน -->
                                <div class="form-group">
                                    <label for="function">ระบบงาน</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="function" id="function" value="1" {{ old('function') == 1 ? 'checked' : ''}}><label for="function">สำนักงาน</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="function" id="function2" value="2" {{ old('function') == 2 ? 'checked' : ''}}> <label for="function2">หอผู้ป่วย</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">    
                            <div class="col-sm-12 col-lg-6"> <!-- สถานะของครุภัณฑ์ -->
                                <div class="form-group">
                                    <label for="asset_status">สถานะของครุภัณฑ์</label><br>
                                    <select class="form-control" name="asset_status" id="asset_status">
                                        <option value="" hidden></option>
                                        @foreach($asset_statuses as $asset_status)
                                            <option value="{{ $asset_status['id'] }}" {{ old('asset_status') == $asset_status['id']  ? 'selected' : ''}}> {{ $asset_status['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="asset_use_status">สถานะการใช้งานของครุภัณฑ์</label>
                                    <select class="form-control" name="asset_use_status" id="asset_use_status">
                                        <option value="" hidden></option>
                                        @foreach($asset_use_statuses as $asset_use_status)
                                            <option value="{{ $asset_use_status['id'] }}"  {{ old('asset_use_status') == $asset_use_status['id']  ? 'selected' : ''}}>{{ $asset_use_status['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row"> 
                            <div class="col-sm-12 col-lg-6">  <!-- ชื่อผู้ใช้งาน -->
                                <div class="form-group">
                                    <label for="user">ชื่อผู้ใช้งาน</label><br>
                                    <input type="text" class="form-control" id="user" name="user" value="{{ old('user') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!-- ตำแหน่งผู้ใช้งาน -->
                                <div class="form-group">
                                    <label for="position">ตำแหน่งผู้ใช้งาน</label> 
                                    <input type="text" class="form-control" name="position" id="position" value="{{ old('position') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- หน่วยงาน -->
                                <div class="form-group">
                                    <label for="section">หน่วยงาน</label>
                                    <select class="form-control" name="section" id="section">
                                        <option value="" hidden></option>
                                        @foreach($sections as $section)
                                            <option value="{{ $section['id'] }}" {{ old('section') == $section['id'] ? 'selected' : ''}}>{{ $section['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 pt-2"> <!-- เจ้าของเครื่อง -->
                                <div class="form-group">
                                    <label for="owner">เจ้าของเครื่อง</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="owner" id="owner1" value="1" {{ old('owner') == 1 ? 'checked' : ''}}> <label for="owner1">คณะ</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="owner" id="owner2" value="2" {{ old('owner') == 2 ? 'checked' : ''}}><label for="owner2">ภาควิชา</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6 pt-2"> <!-- สิทธิ์ Admin -->
                                <div class="form-group">
                                    <label for="permission">สิทธิ์ Admin</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label"><input type="radio" class="form-check-input" name="permission" id="admin" value="1" {{ old('permission') == 1 ? 'checked' : ''}}><label for="admin">มีสิทธิ์</label></label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label"><input type="radio" class="form-check-input" name="permission" id="no_permission" value="0" {{ old('permission') == 0 && old('is_mobile') !== null ? 'checked' : ''}}><label for="no_permission">ไม่มีสิทธิ์</label></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>คุณสมบัติของเครื่อง</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ยี่ห้อ-->
                                <div class="form-group">
                                    <label for="brand">ยี่ห้อ</label>
                                    <input class="form-control" name="brand" id="brand" type="text" value="{{ old('brand') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--รุ่น-->
                                <div class="form-group">
                                    <label for="model">รุ่น</label>
                                    <input class="form-control" name="model" id="model" type="text" value="{{ old('model') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--serial no.-->
                                <div class="form-group">
                                    <label for="serial_no">Serial Number จากผู้ผลิต</label>
                                    <input class="form-control" name="serial_no" id="serial_no" type="text" value="{{ old('serial_no') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--cpu model-->
                                <div class="form-group">
                                    <label for="cpu_model">CPU Model</label>
                                    <input class="form-control" name="cpu_model" id="cpu_model" type="text" value="{{ old('cpu_model') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cpu_speed">CPU Speed</label>
                                    <input class="form-control" name="cpu_speed" id="cpu_speed" type="number" min="0" step="0.1" value="{{ old('cpu_speed') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--socket-->
                                <div class="form-group">
                                    <label for="cpu_socket_number">จำนวน Socket CPU</label>
                                    <input class="form-control" name="cpu_socket_number" id="cpu_socket_number" type="number" min="1"  value="{{ old('cpu_socket_number') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--RAM-->
                                <div class="form-group">
                                    <label for="ram_size">RAM Size</label>
                                    <input class="form-control" name="ram_size" id="ram_size" type="number" min="0" step="0.1" value="{{ old('ram_size') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--HDD-->
                                <div class="form-group">
                                    <label for="hdd_no">จำนวน Hard Disk ในเครื่อง</label>
                                    <input class="form-control" name="hdd_no" id="hdd_no" type="number" min="1" value="1" value="{{ old('hdd_no') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--HDD capacity-->
                                <div class="form-group">
                                    <label for=hdd_total_cap>ความจุรวมของ HDD</label>
                                    <input class="form-control" name="hdd_total_cap" id="hdd_total_cap" type="number" min="0" value="{{ old('hdd_total_cap') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--จำนวนจอ-->
                                <div class="form-group"> 
                                    <label for="display_count">จำนวนจอที่ใช้งาน</label>
                                    <select class="form-control" id="display_count" name="display_count" onchange="displayCountSelected(this)">
                                        <option value="" hidden></option>
                                        <option value="1" {{ old('display_count') == 1 ? 'selected' : ''}}>1</option>
                                        <option value="2" {{ old('display_count') == 2 ? 'selected' : ''}}>2</option>
                                        <option value="3" {{ old('display_count') == 3 ? 'selected' : ''}}>3</option>
                                        <option value="4" {{ old('display_count') == 4 ? 'selected' : ''}}>4</option>
                                    </select>
                                </div> 
                            </div>
                        </div>
                        @if (session()->has('displayCount'))
                            @for ($i = 0; $i < session()->get('displayCount') ; $i++)
                                <div class="card mb-2">
                                    <div class="card-header">
                                        จอภาพที่ {{ $i+1 }}
                                    </div>
                                    <div class="card-body pt-1 pb-1" >
                                        <div class="form-row">   
                                            <div class="col-sm-12 col-lg-3"> <!--sap จอ-->
                                                <div class="form-group">
                                                    <label for="display_sapid">SAP จอ</label>
                                                    <input class="form-control" name="display_sapid[]" id="display_sapid" type="text" value="{{ old('display_sapid.' . $i) }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-3"> <!--ครุภัณฑ์จอ-->
                                                <div class="form-group">
                                                    <label for="display_pid">รหัสครุภัณฑ์จอภาพ</label>
                                                    <input class="form-control" name="display_pid[]" id="display_pid" type="text" value="{{ old('display_pid.' . $i) }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-3"> <!--ขนาดจอ-->
                                                <div class="form-group">
                                                    <label for="display_size">ขนาดจอภาพ</label>
                                                    <input class="form-control" name="display_size[]" id="display_size" type="number" min="0" value="{{ old('display_size.' . $i) }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-3">
                                                <div class="form-group">
                                                    <label for="display_ratio">สัดส่วนจอภาพ</label>
                                                    <input class="form-control" name="display_ratio[]" id="display_ratio" type="text" pattern="{0-9}:{0-9}" value="{{ old('display_size.' . $i) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลด้าน software</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--OS-->
                                <div class="form-group">
                                    <label for="os">OS</label>
                                    <input class="form-control" name="os" id="os" type="text" value="{{ old('os') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--os architecture-->
                                <div class="form-group">
                                    <label for="os_arch">OS architecture</label><br>
                                    <div class="form-check form-check-inline">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="os_arch" id="32_bit" value="0" {{ old('os_arch') == 0 ? 'checked' : ''}}><label for="32_bit"> 32 bit</label>
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="os_arch" id="64_bit" value="1" {{ old('os_arch') == 1 ? 'checked' : ''}}><label for="64_bit"> 64 bit</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--office version-->
                                <div class="form-group">
                                    <label for="ms_office_version">Microsoft Office Version</label>
                                    <input type="text" class="form-control" name="ms_office_version" id="ms_office_version" value="{{ old('ms_office_version') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--antivirus-->
                                <div class="form-group">
                                    <label for="antivirus">Antivirus</label>
                                    <input class="form-control" name="antivirus" id="antivirus" type="text" value="{{ old('antivirus') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--pdf reader-->
                                <div class="form-group">
                                    <label for="pdf_reader">PDF reader</label>
                                    <input class="form-control" name="pdf_reader" id="pdf_reader" type="text" value="{{ old('pdf_reader') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--ie version-->
                                <div class="form-group">
                                    <label for="ie_version">IE version</label>
                                    <input class="form-control" name="ie_version" id="ie_version" type="number" value="{{ old('ie_version') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--chrome-version-->
                                <div class="form-group">
                                    <label for="chrome_version">Chrome version</label>
                                    <input class="form-control" name="chrome_version" id="chrome_version" type="text" value="{{ old('chrome_version') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--spss version-->
                                <div class="form-group">
                                    <label for="spss_version">SPSS version</label>
                                    <input class="form-control" name="spss_version" id="spss_version" type="number" value="{{ old('spss_version') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--program ระบบ รพ-->
                                <div class="form-group">
                                    <label for="is_mobile">Software คณะ</label><br>
                                    <div class="form-check-inline">
                                        <label class="checkbox-inline"><input type="checkbox" name="ehis" value="1" {{ old('ehis') == 1 ? 'checked' : ''}} > E-HIS</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="checkbox-inline"><input type="checkbox" name="sipacs" value="1" {{ old('sipacs') == 1 ? 'checked' : ''}} > SiPACS</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="checkbox-inline"><input type="checkbox" name="si_iscan" value="1" {{ old('si_iscan') == 1 ? 'checked' : ''}} > Si-iScan</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="checkbox-inline"><input type="checkbox" name="eclair" value="1" {{ old('eclair') == 1 ? 'checked' : ''}} > eclair</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="checkbox-inline"><input type="checkbox" name="admission_note" value="1" {{ old('admission_note') == 1 ? 'checked' : ''}} > Admission Notes</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="checkbox-inline"><input type="checkbox" name="sinet" value="1" {{ old('sinet') == 1 ? 'checked' : ''}} > SiNet</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--other software details-->
                                <div class="form-group">
                                    <label for="other_software_detail">Software อื่นๆ</label>
                                    <textarea class="form-control" name="other_software_detail" id="other_software_detail" rows="1">{{ old('other_software_detail') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลด้านเครือข่าย</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--lan type-->
                                <div class="form-group">
                                    <label for="owner">ประเภทเครือข่าย</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="no_internet" value="0" {{ old('lan_type') == 0 && old('lan_type') !== null ? 'checked' : ''}}><label for="no_internet"> ไม่เชื่อมต่อ</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="mucnet" value="1" {{ old('lan_type') == 1 ? 'checked' : ''}}><label for="mucnet"> MUCNET</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="internet_hospital" value="2" {{ old('lan_type') == 2 ? 'checked' : ''}}><label for="internet_hospital"> Internet โรงพยาบาล</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="hospital" value="3" {{ old('lan_type') == 3 ? 'checked' : ''}}><label for="hospital"> ระบบภายในโรงพยาบาล</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--lan outlet-->
                                <div class="form-group">
                                    <label for="lan_outlet_no">LAN outlet No</label>
                                    <input class="form-control" name="lan_outlet_no" id="lan_outlet_no" type="text" value="{{ old('lan_outlet_no') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ip address-->
                                <div class="form-group">
                                    <label for="ip_address">IP Address</label>
                                    <input class="form-control" name="ip_address" id="ip_address" type="text" placeholder="127.0.0.1" value="{{ old('ip_addresss') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--mac address-->
                                <div class="form-group">
                                    <label for="mac_address">MAC Address</label>
                                    <input class="form-control" name="mac_address" id="mac_address" type="text" placeholder="12-34-56-78-90-AB" value="{{ old('mac_address') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col sm-12 col-lg-6"><!--computer name-->
                                <div class="form-group">
                                    <label for="computer_name">Computer Name</label>
                                    <input class="form-control" name="computer_name" id="computer_name" type="text" value="{{ old('computer_name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>หมายเหตุและปัญหาในการใช้งาน</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!-- หมายเหตุ -->
                                <div class="form-group">
                                    <label for="remarks">หมายเหตุ</label><br>
                                    <textarea class="form-control" name="remarks" id="remarks" rows="3">{{ old('remarks') }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--issues-->
                                <div class="form-group">
                                    <label for="issues">ปัญหาในการใช้งาน</label>
                                    <textarea class="form-control" name="issues" id="issues" rows="3">{{ old('issues') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-lg btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ url('/js/jquery.autocomplete.min.js') }}"></script>
<script src="{{ url('/js/axios.min.js') }}"></script>
<script>
    let hasDisplay = "<?php echo session()->get('displayCount'); ?>";
    if (hasDisplay > 0) {
        $('#display_count').focus();
    }
    
    var room = null;
    $("#room_autocomplete").autocomplete({
        paramName: "name",
        serviceUrl: "{{ url('rooms') }}",
        minChars: 1,
        transformResult: function(response) {
            return {
                suggestions: $.map($.parseJSON(response), function(item) {
                    console.log(item.location)
                    return {
                        id: item.id,
                        value: item.name,
                        building: item.location.building.name,
                        location: item.location.floor + ' ' + item.location.wing
                    };
                })
            };
        },
        onSelect: function (suggestion) {
            $("#room_autocomplete").val(suggestion.value);
            $("#building").val(suggestion.building);
            $("#location").val(suggestion.location);
            $("input[name=location_id]").val(suggestion.id);
            room = suggestion.value;
            
        },
    });
    $("#room_autocomplete").change(function() {
        if($(this).val() !== room) {
            $(this).val('');
            $("#building").val('');
            $("#location").val('');
        }
    });

    function displayCountSelected(select) {
        let displayCount = select.options[select.selectedIndex].value;
        document.getElementById("computer_form").action = `{{ url('/add-computer?displayCount=${displayCount}')}}`;
        document.getElementById("computer_form").submit();
    }
</script>
@endsection