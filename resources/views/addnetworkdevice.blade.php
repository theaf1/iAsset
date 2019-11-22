@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <form action="/add-networkdev" method="post">
        <div class="col-12 mx-auto">
        @if ( $message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ $message }}
        </div>
        @endif
            <div class="card mt-4">
                <div class="card-header card-background text-white">
                    <h4>ข้อมูลพื้นฐานของครุภัณฑ์</h4>
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
                                <label for="room">ห้อง</label>
                                <input type="text" class="form-control" name="room" id="room_autocomplete"/> 
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!-- ตึก -->
                            <div class="form-group">
                                <label for="building">ตึก</label>
                                <input type="text" class="form-control" name="building" id="building" disabled/>
                            </div>
                        </div>
                    </div>
                    <input hidden type="number" name="location_id"><!--ค่า location_id-->    
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"><!-- ชั้น -->
                            <div class="form-group">
                                    <label for="location">ชั้น</label>
                                    <input type="text" class="form-control" name="location" id="location" disabled/>
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
                                <select class="form-control" id="section">
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
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="asset_use_status">สถานะการใช้งานของครุภัณฑ์</label>
                                <select class="form-control" name="asset_use_status" id="asset_use_status">
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
                    <h4>ข้อมูลจำเพาะ</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="device_subtype">ชนิดของอุปกรณ์</label>
                                <select class="form-control" name="device_subtype" id="device_subtype">
                                    <option value="" hidden></option>
                                    <option value="1">HUB</option>
                                    <option value="2">Unmanaged Switch</option>
                                    <option value="3">Managed Switch</option>
                                    <option value="4">Router</option>
                                    <option value="5">Wireless Accesss Point</option>
                                    <option value="6">other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--ยี่ห้อ-->
                            <div class="form-group">
                                <label for="brand">ยี่ห้อ</label>
                                <input class="form-control" name="brand" id="brand" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--รุ่น-->
                            <div class="form-group">
                                <label for="model">รุ่น</label>
                                <input class="form-control" name="model" id="model" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="is_modular">ความสามารถในการขยายขนาด</label>
                                <div class="form-check">
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input" name="is_modular" id="is_modular" value="1"><label for="is_modular">ขยายขนาดได้</label></label>
                                </div> 
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="port_count">จำนวน port</label>
                                <input type="number" class="form-control" name="port_count" id="port_count" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="port_count">จำนวน power supply</label>
                                <input type="number" class="form-control" name="psu_count" id="psu_count" min="1" default="1">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="device_management_address">IP address ที่ใช้ตั้งค่า</label>
                                <input class="form-control" type="text" name="device_management_address" id="device_management_address" placeholder="127.0.0.1">   
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="software_version">Software Version</label>
                                <input class="form-control" type="text" name="software_version" id="software_version"> 
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
                                <label for="issues">ปัญหาในการใช้งาน</label>
                                <textarea class="form-control" name="issues" id="issues" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="remarks">หมายเหตุ</label><br>
                                <textarea class="form-control" name="remarks" id="remarks" rows="1"></textarea>
                            </div>
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