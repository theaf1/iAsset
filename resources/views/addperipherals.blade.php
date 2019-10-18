@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <form>
        <div class="col-11 mx-auto">
            <div class="card mt-4">
                <div class="card-header card-background text-white">
                    <h4>ข้อมูลครุภัณฑ์พื้นฐาน</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--ชนิดครุภัณฑ์-->
                            <div class="form-group">
                                <label for="type">ชนิด</label>
                                <select class="form-control" id="type">
                                    <option value="1">Printer</option>
                                    <option value="2">Scanner</option>
                                    <option value="3">Barcode Printer</option>
                                    <option value="4">Barcode Scanner</option>
                                    <option value="5">Multifunction Machine</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--รหัส SAP-->
                            <div class="form-group">
                                <label for="sapid">รหัส SAP</label>
                                <input type="text" class="form-control" id="sapid" name="sapid">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--รหัสครุภัณฑ์-->
                            <div class="form-group">
                                <label for="pid">รหัสครุภัณฑ์</label>
                                <input type="text" class="form-control" id="pid" name="pid">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="location">ตึก</label>
                                <select class="form-control" id="location">
                                    <option value="location">location</option>
                                <select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="location">ชั้น</label>
                                <select class="form-control" id="location" disabled>
                                    <option value="location">location</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="location">ปีก</label>
                                <select class="form-control" id="location" disabled>
                                    <option value="location">location</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="location">ห้อง</label>
                                <select class="form-control" id="location" disabled>
                                    <option value="location">location</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--ลักษณะการติดตั้ง-->
                            <div class="form-group">
                                <label for="is_mobile">ลักษณะการติดตั้ง</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="1">
                                    <label class="form-check-label" for="is_mobile">เป็นเครื่องเคลื่อนที่</label><br>
                                    <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="0" checked>
                                    <label class="form-check-label" for="is_mobile">เป็นเครื่องประจำที่</label><br>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--หน่วยงาน-->
                        <div class="form-group"> 
                            <label for="section">หน่วยงาน</label>
                                <select class="form-control" id="section">
                                    <option value="" hidden></option>
                                    <option value="1">สำนักงาน</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--ชื่อผู้ใช้งาน-->
                            <div class="form-group">
                                <label for="user">ชื่อผู้ใช้งาน</label><br>
                                <input type="text" class="form-control" id="user" name="user">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--ตำแหน่งผู้ใช้งาน-->
                            <div class="form-group">
                                <label for="position">ตำแหน่งผู้ใช้งาน</label>
                                <input type="text" class="form-control" name="position" id="position">
                            </div>
                        </div>
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
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--หมายเลขโทรศัพท์-->
                            <div class="form-group">
                                <label for="tel_no">หมายเลขโทรศัพท์</label>
                                <input type="text" class="form-control" name="tel_no" id="tel_no" placeholder="9-9999">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--ระบบงาน-->
                            <div class="form-group">
                                <label for="function">ระบบงาน</label>
                                <select class="form-control" id="function">
                                    <option value="สำนักงาน">สำนักงาน</option>
                                    <option value="หอผู้ป่วย">หอผู้ป่วย</option>
                                </select>
                            </div>
                        </div>                
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--เจ้าของเครื่อง-->
                            <div class="form-group">
                                <label for="owner">เจ้าของเครื่อง</label><br>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="owner" id="owner" value="1" checked>
                                    <label class="form-check-label" for="owner">คณะ</label><br>
                                    <input class="form-check-input" type="radio" name="owner" id="owner" value="2">
                                    <label class="form-check-label" for="owner">ภาควิชา</label><br>
                                </div>
                            </div>
                        </div>
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
                    </div>
                    <div class="form-row">
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
                        <div class="col-sm-12 col-lg-6"> <!--รุ่น-->
                            <div class="form-group">
                                <label for="model">รุ่น</label>
                                <input class="form-control" name="model" id="model" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--serial number-->
                            <div class="form-group">
                                <label for="serial_no">Serial Number จากผู้ผลิต</label>
                                <input class="form-control" name="serial_no" id="serial_no" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--วัสดุสึกหรอสิ้นเปลือง-->
                            <div class="form-group">
                                <label for="supply_consumables">สามารถเบิกวัสดุสึกหรอสิ้นเปลืองได้</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="supply_consumables" id="suppy_consumables" value="1">
                                    <label class="form-check-label" for="supply_consumables">เบิกได้</label><br>
                                    <input class="form-check-input" type="radio" name="supply_consumables" id="supply_consumables" value="2">
                                    <label class="form-check-label" for="supply_consumables">เบิกไม่ได้</label><br>
                                    <input class="form-check-input" type="radio" name="supply_consumables" id="supply_consumables" value="3">
                                    <label class="form-check-label" for="supply_consumables">ไม่จำเป็น</label><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--วิธีการเชื่อมต่อ-->
                            <div class="form-group">
                                <label for="connectivity">วิธีการเชื่อมต่อ</label>
                                <select class="form-control" id="connectivity">
                                    <option value="1">USB</option>
                                    <option value="2">Paralell Port</option>
                                    <option value="3">LAN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"> <!--ip address-->
                            <div class="form-group">
                                <label for="ip_address">IP adress ของเครื่อง</label>
                                <input type="text" class="form-control" id="ip_address" name="ip_address">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"> <!--Lan outlet-->
                            <div class="form-group">
                                <label for="share_name">Lan Outlet No.</label>
                                <input type="text" class="form-control" id="lan_outlet_no" name="lan_outlet_no">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="is_shared">สถานะการใช้งานร่วมกัน</label><br>
                                <input type="checkbox" name="is_shared" value="yes">เป็นเครื่องใช้งานร่วมกัน<br>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6"><!--share name-->
                            <div class="form-group">
                                <label for="share_name">Share Name</label>
                                <input type="text" class="form-control" id="share_name" name="share_name">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6"><!--issues-->
                            <div class="form-group">
                                <label for="issues">ปัญหาในการใช้งาน</label>
                                <textarea class="form-control" name="issues" id="issues" rows="1"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection