@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-12 mx-auto">
            <form>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>ข้อมูลครุภัณฑ์พี้นฐาน</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--รหัส SAP-->
                                <div class="form-group">
                                    <label for="sapid">รหัส SAP</label>
                                    <input type="text" class="form-control" id="sapid" name="sapid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--รหัสครุภัณฑ์-->
                                <div class="form-group">
                                    <label for="pid">รหัสครุภัณฑ์</label>
                                    <input type="text" class="form-control" id="pid" name="pid">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> 
                                <div class="form-group">
                                    <label for="location">ตึก</label>
                                    <select class="form-control" id="location" disabled>
                                        <option value="location">location</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="location">ชั้น</label>
                                    <select class="form-control" id="location" disabled>
                                        <option value="location">location</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="location">ปีก</label>
                                    <select class="form-control" id="location" disabled>
                                        <option value="location">location</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="location">ห้อง</label>
                                    <select class="form-control" id="location">
                                        <option value="location">location</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ลักษณะการติดตั้ง-->
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
                            <div class="col-sm-12 col-lg-6"> <!--หน่วยงาน-->
                                <div class="form-group">
                                    <label for="section">หน่วยงาน</label>
                                    <select class="form-control" id="section">
                                        <option value="" hidden></option>
                                        <option value="1">สำนักงาน</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ชื่อผู้ใช้งาน-->
                                <div class="form-group">
                                    <label for="user">ชื่อผู้รับผิดชอบ</label><br>
                                    <input type="text" class="form-control" id="user" name="user">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ประเภทหน่วยงาน-->
                                <div class="form-group">
                                    <label for="section_status">ประเภทหน่วยงาน</label>
                                    <select class="form-control" id="section_status">
                                        <option value="1">สำนักงาน</option>
                                        <option value="2">หอผู้ป่วย</option>
                                        <option value="3">ห้องประชุม</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--หมายเลขโทรศัพท์-->
                                <div class="form-group">
                                    <label for="tel_no">หมายเลขโทรศัพท์</label>
                                    <input type="text" class="form-control" name="tel_no" id="tel_no">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ระบบงาน-->
                                <div class="form-group">
                                    <label for="function">ระบบงาน</label>
                                    <select class="form-control" id="function">
                                        <option value="1">สำนักงาน</option>
                                        <option value="2">หอผู้ป่วย</option>
                                    </select>
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
                            <div class="col-sm-12 col-lg-6"> <!--สถานะของครุภัณฑ์-->
                                <div class="form-group">
                                    <label for="asset_status">สถานะของครุภัณฑ์</label>
                                    <select class="form-control" id="asset_status">
                                        <option value="status">ใช้งาน</option>
                                        <option value="status2">ไม่ได้ใช้งาน</option>
                                        <option value="status3">ส่งคืนแล้ว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--หมายเหตุ-->
                                <div class="form-group">
                                    <label for="remarks">หมายเหตุ</label><br>
                                    <textarea class="form-control" name="remarks" id="remarks" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>คุณสมบัติเฉพาะ</h4>
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
                                    <label for="serial_no">Serial Number จากผู้ผลิต</label>
                                    <input class="form-control" name="serial_no" id="serial_no" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                <label for="form-factor">ลักษณะของตัวเครื่อง</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="form_factor" id="form_factor" value="1" checked>
                                        <label class="form-check-label" for="form_factor">Tower</label><br>
                                        <input class="form-check-input" type="radio" name="form_factor" id="form_factor" value="2">
                                        <label class="form-check-label" for="form_factor">Rack Mounted</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="topology">หลักการทำงาน</label>
                                    <select class="form-control" id="topology">
                                        <option value="" hidden></option>
                                        <option value="0">Dynamic</option>
                                        <option value="1">stand-by</option>
                                        <option value="2">line interactive</option>
                                        <option value="3">true on-line</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="capacity">กำลังไฟรองรับได้สูงสุด</label>
                                    <input class="form-control" type="number" name="capacity" id="capacity" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-4 col-lg-3">
                                <div class="form-group">
                                <label for="is_modular">ความสามารถในการเปลี่ยนกำลังไฟสูงสุด</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_modular" id="is_modular" value="0" checked>
                                        <label class="form-check-label" for="is_modular">ไม่ได้</label><br>
                                        <input class="form-check-input" type="radio" name="is_modular" id="is_modular" value="1">
                                        <label class="form-check-label" for="is_modular">ได้</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-3">
                                <div class="form-group">
                                    <label for="battery_type">ชนิดของแบตเตอรี่</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="battery_type" id="battery_type" value="1">
                                        <label class="form-check-label" for="battery_type">ตะกั่ว-กรด (ปิดผนึก)</label><br>
                                        <input class="form-check-input" type="radio" name="battery_type" id="battery_type" value="2">
                                        <label class="form-check-label" for="battery_type">ตะกั่ว-กรด (เติมน้ำกลั่น)</label><br>
                                        <input class="form-check-input" type="radio" name="battery_type" id="battery_type" value="3">
                                        <label class="form-check-label" for="battery_type">ลิเธียมไอออน</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-3">
                                <div class="form-group">
                                    <label for="has_external_battery">แบตเตอรี่ภายนอก</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="has_external_battery" id="has_external_battery" value="1">
                                        <label class="form-check-label" for="has_external_battery">ไม่มี</label><br>
                                        <input class="form-check-input" type="radio" name="has_external_battery" id="has_external_battery" value="2">
                                        <label class="form-check-label" for="has_external_battery">มี</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="device_management_address">IP address ที่ใช้ควบคุมเครื่อง</label>
                                    <input class="form-control" name="device_management_address" id="device_management_address" type="text" placeholder="127.0.0.1">
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
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">    
                                    <label for="issues">ปัญหาในการใช้งาน</label><br>
                                    <textarea class="form-control" name="issues" id="issues" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection