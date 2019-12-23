@extends('Layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-12 mx-auto">
            <form action="/add-server" method="post">
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลทั่วไปของครุภัณฑ์</h4>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="sapid">รหัส SAP</label>
                                    <input type="text" class="form-control" id="sapid" name="sapid" autofocus>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="pid">รหัสครุภัณฑ์</label>
                                    <input type="text" class="form-control" id="pid" name="pid" placeholder="11060000-I-9999-001-0001/99">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="room_autocomplete">สถานที่ตั้ง</label>
                                    <input type="text" class="form-control @error('location_id') is-invalid @enderror" name="room" id="room_autocomplete" placeholder="กรุณาระบุห้องที่เครื่องตั้งอยู่" value="{{ old('room') }}"/>
                                    @error('location_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!-- ตึก -->
                                <div class="form-group">
                                    <label for="building">ตึก</label>
                                    <output type="text" class="form-control" name="building" id="building" disabled/>
                                </div>
                            </div>
                        </div>
                        <input hidden type="number" name="location_id"><!--ค่า location_id-->    
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"><!-- ชั้น -->
                                <div class="form-group">
                                    <label for="location">ชั้น</label>
                                    <output type="text" class="form-control" name="location" id="location" disabled/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                <label for="is_mobile">ลักษณะการติดตั้ง</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="1">
                                        <label class="form-check-label" for="is_mobile">เป็นเครื่องเคลื่อนที่</label><br>
                                        <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="0" checked>
                                        <label class="form-check-label" for="is_mobile">เป็นเครื่องประจำที่</label><br>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                <label for="section">หน่วยงาน</label>
                                    <select class="form-control" name="section" id="section">
                                        <option value="" hidden></option>
                                        @foreach($sections as $section)
                                            <option value="{{ $section['id'] }}">{{ $section['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tel_no">หมายเลขโทรศัพท์</label>
                                    <input type="text" class="form-control" name="tel_no" id="tel_no" placeholder="9-9999">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="response_person">ชื่อผู้รับผิดชอบ</label><br>
                                    <input type="text" class="form-control" id="response_person" name="response_person">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--เจ้าของเครื่อง-->
                                <div class="form-group">
                                    <label for="owner">เจ้าของเครื่อง</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="owner" id="owner" value="1" checked>
                                        <label class="form-check-label" for="owner">คณะ</label><br>
                                        <input class="form-check-input" type="radio" name="owner" id="owner" value="2">
                                        <label class="form-check-label" for="owner">ภาควิชา</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="asset_status">สถานะของครุภัณฑ์</label>
                                <select class="form-control" name="asset_status" id="asset_status">
                                    <option value="" hidden></option>
                                    @foreach($asset_statuses as $asset_status)
                                        <option value="{{ $asset_status['id'] }}">{{ $asset_status['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="colsm-12 col-lg-6">
                            <div class="form-group">
                            <label for="asset_use_status">สถานะการใช้งานของครุภัณฑ์</label>
                                <select class="form-control" name="asset_use_status" id="asset_status">
                                    <option value="" hidden></option>
                                    @foreach($asset_use_statuses as $asset_use_status)
                                        <option value="{{ $asset_use_status['id'] }}">{{ $asset_use_status['name'] }}</option>
                                    @endforeach
                                </select>
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
                                    <input class="form-control" name="brand" id="brand" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--รุ่น-->
                                <div class="form-group">
                                    <label for="model">รุ่น</label>
                                    <input class="form-control" name="model" id="model" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="form-factor">ลักษณะของเครื่อง</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="form_factor" id="form_factor" value="1" checked>
                                        <label class="form-check-label" for="form_factor">Tower</label><br>
                                        <input class="form-check-input" type="radio" name="form_factor" id="form_factor" value="2">
                                        <label class="form-check-label" for="owner">Rack Mounted</label><br>
                                    </div>
                                </div>
                            </div>              
                            <div class="col-sm-12 col-lg-6"> <!--serial no.-->
                                <div class="form-group">
                                    <label for="serial_no">Serial Number จากผู้ผลิต</label>
                                    <input class="form-control" name="serial_no" id="serial_no" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">    
                            <div class="col-sm-12 col-lg-6"> <!--cpu model-->
                                <div class="form-group">
                                    <label for="cpu_model">CPU Model</label>
                                    <input class="form-control" name="cpu_model" id="cpu_model" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cpu_speed">CPU Speed (GHz)</label>
                                    <input class="form-control" name="cpu_speed" id="cpu_speed" type="number" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--socket-->
                                <div class="form-group">
                                    <label for="cpu_socket_no">จำนวน Socket CPU</label>
                                    <input class="form-control" name="cpu_socket_no" id="cpu_socket_no" type="number" min="1" value="1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--RAM-->
                                <div class="form-group">
                                    <label for="ram_size">RAM Size (GB)</label>
                                    <input class="form-control" name="ram_size" id="ram_size" type="number" min="0" step="0.1">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="is_raid">RAID</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="is_raid" id="is_raid" value="1"><label for="is_raid">RAID</label></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="no_of_physical_drive_max">จำนวน Hard Disk สูงสุดที่ยอมรับได้</label>
                                    <input class="form-control" name="no_of_physical_drive_max" id="no_of_physical_drive_max" type="number" min="2" default="2">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--จำนวน Hard Disk ที่มีอยู่-->
                                <div class="form-group">
                                    <label for="no_of_physical_drive_populated">จำนวน Hard Disk ที่มีอยู่</label>
                                    <input class="form-control" name="no_of_physical_drive_populated" id="no_of_physical_drive_populated" type="number" min="2" default="2">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--จำนวน disk จำลองที่มีอยู่-->
                                <div class="form-group">
                                    <label for="lun_count">จำนวน disk จำลองที่มีอยู่</label>
                                    <input class="form-control" name="lun_count" id="lun_count" type="number" min="1" default="1">
                                </div>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class="col-sm-12 col-lg-6"> <!--HDD capacity-->
                                <div class="form-group">
                                    <label for=hdd_total_cap>ความจุรวมของ HDD</label>
                                    <input class="form-control" name="hdd_total_cap" id="hdd_total_cap" type="number" min="0" value="1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="display_no">จำนวนจอที่ใช้งาน</label>
                                    <input class="form-control" name="display_no" id="display_no" type="number" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="is_headless">จอภาพ</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="is_headless" id="is_headless" value="1"><label for="is_headless">ไม่มีจอภาพ</label></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--sap จอ-->
                                <div class="form-group">
                                    <label for="display_sapid">SAP จอ</label>
                                    <input class="form-control" name="display_sapid" id="display_sapid" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ครุภัณฑ์จอ-->
                                <div class="form-group">
                                    <label for="display_pid">รหัสครุภัณฑ์จอภาพ</label>
                                    <input class="form-control" name="display_pid" id="display_pid" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลด้าน Software</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--OS-->
                                <div class="form-group">
                                    <label for="os">OS</label>
                                    <input class="form-control" name="os" id="os" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--os architecture-->
                                <div class="form-group">
                                    <label for="os_arch">OS architecture</label><br>
                                    <div class="form-check form-check-inline">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="os_arch" id="32_bit" value="0"><label for="32_bit"> 32 bit</label>
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="os_arch" id="64_bit" value="1"><label for="64_bit"> 64 bit</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="role_class">กลุ่มของบทบาท</label>
                                    <select class="form-control" name="role_class" id="role_class">
                                        <option value="" hidden selected></option>
                                        <option value="1">Infrastructure</option>
                                        <option value="2">Application</option>
                                        <option value="3">Monitoring and security</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="role_subclass">บทบาท</label><br>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="is_ad" id="is_ad" value="1"><label for="is_ad">Active Directory</label><br>
                                        <input type="checkbox" class="form-check-input" name="is_dns" id="is_dns" value="1"><label for="is_dns">DNS</label><br>
                                        <input type="checkbox" class="form-check-input" name="is_dhcp" id="is_dhcp" value="1"><label for="is_dhcp">DHCP</label><br>
                                        <input type="checkbox" class="form-check-input" name="is_fileshare" id="is_fileshare" value="1"><label for="is_fileshare">File Server</label><br>
                                        <input type="checkbox" class="form-check-input" name="is_web" id="is_web" value="1"><label for="is_web">Web Server</label><br>
                                        <input type="checkbox" class="form-check-input" name="is_db" id="is_db" value="1"><label for="is_db">Database Server</label><br>
                                        <input type="checkbox" class="form-check-input" name="is_log" id="is_log" value="1"><label for="is_log">Logging Server</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--other software-->
                                <div class="form-group">
                                    <label for="other_software">Software อื่นๆ</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="other_software" id="other_software" value="1"><label for="other_software">มี Software อื่นๆ</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--other software details-->
                                <div class="form-group">
                                    <label for="other_software_detail">โปรดกรอกรายชื่อ Software</label>
                                    <textarea class="form-control" name="other_software_detail" id="other_software_detail" rows="1"></textarea>
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
                                            <input type="radio" class="form-check-input" name="lan_type" id="no_internet" value="0"><label for="no_internet"> ไม่เชื่อมต่อ</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="mucnet" value="1"><label for="mucnet"> MUCNET</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="internet_hospital" value="3"><label for="internet_hospital"> Internet โรงพยาบาล</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="hospital" value="4"><label for="hospital"> ระบบภายในโรงพยาบาล</label>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="lan_type" id="more_than_1" value="5"><label for="more_than_1"> เชื่อมต่อมากกว่า 1 เครือข่ายในเวลาเดียวกัน</label>
                                            </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--lan outlet-->
                                <div class="form-group">
                                    <label for="lan_outlet_no">LAN outlet No</label>
                                    <input class="form-control" name="lan_outlet_no" id="lan_outlet_no" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ip address-->
                                <div class="form-group">
                                    <label for="ip_address">IP Address</label>
                                    <input class="form-control" name="ip_address" id="ip_address" type="text" placeholder="127.0.0.1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--mac address-->
                                <div class="form-group">
                                    <label for="mac_address">MAC Address</label>
                                    <input class="form-control" name="mac_address" id="mac_address" type="text" placeholder="12-34-56-78-90-AB">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col sm-12 col-lg-6"><!--computer name-->
                                <div class="form-group">
                                    <label for="computer_name">Computer Name</label>
                                    <input class="form-control" name="computer_name" id="computer_name" type="text">
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
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="remarks">หมายเหตุ</label><br>
                                    <textarea class="form-control" name="remarks" id="remarks" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--issues-->
                                <div class="form-group">
                                    <label for="issues">ปัญหาในการใช้งาน</label>
                                    <textarea class="form-control" name="issues" id="issues" rows="2"></textarea>
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

</script>
@endsection