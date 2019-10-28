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
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                    <label for="location">สถานที่ตั้ง</label>
                                    <input type="text" class="form-control" id="location" name="location" disabled> 
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
                                        <option value="1">สำนักงาน</option>
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
                                    <select class="form-control" id="asset_status">
                                        <option value="" hidden></option>
                                        <option value="0">รอการขึ้นทะเบียน</option>
                                        <option value="1">ไม่จำเป็น/ไม่สามารถขึ้นทะเบียนได้</option>
                                        <option value="2">มีรหัสทรัพย์สินแล้ว</option>
                                        <option value="3">รอการส่งคืน</option>
                                        <option value="4">ส่งคืนแล้วโดยไม่ได้รับทดแทน</option>
                                        <option value="5">ส่งคืนแล้วโดยได้รับทดแทน</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="asset_use_status">สถานะการใช้งานของครุภัณฑ์</label>
                                    <select class="form-control" id="asset_status">
                                        <option value="" hidden></option>
                                        <option value="0">รอการติดตั้ง</option>
                                        <option value="1">ใช้งาน</option>
                                        <option value="2">ไม่ได้ใช้งาน</option>
                                        <option value="3">ส่งซ่อม</option>
                                        <option value="4">ส่งคืนแล้ว</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header card-background text-white">
                        <h4>คุณลักษณะของครุภัณฑ์</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="type">ชนิดของอุปกรณ์</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" id="type" value="1">
                                        <label class="form-check-label" for="owner">NAS</label><br>
                                        <input class="form-check-input" type="radio" name="type" id="type" value="2">
                                        <label class="form-check-label" for="owner">SAN</label><br>
                                    </div>                            
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
                                    <label for="serial_no">Serial Number</label>
                                    <input class="form-control" name="serial_no" id="serial_no" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="hdd_total_cap">ความจุข้อมูลรวม</label>
                                    <input class="form-control" type="number" name="hdd_total_cap" id="hdd_total_cap">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="no_of_physical_drive_max">จำนวน Hard Disk สูงสุดที่ยอมรับได้</label>
                                    <input type="number" class="form-control" name="no_of_physical_drive_max" id="no_of_physical_drive_max">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="no_of_physical_drive_populated">จำนวน Hard Disk ที่มีอยู่</label>
                                    <input type="number" class="form-control" name="no_of_physical_drive_populated" id="no_of_physical_drive_populated">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="lun_count">จำนวน disk จำลองที่มีอยู่</label>
                                    <input type="number" name="lun_count" id="lun_count" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="device_name">ชื่อเครื่อง</label>
                                    <input type="text" name="device_name" id="device_name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="device_management_address">IP Address ที่ใช้ควบคุมเครื่อง</label>
                                    <input type="text" name="device_management_address" id="device_management_address" class="form-control">
                                </div>                       
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="device_communication_address">Address ที่ใช้รับส่งข้อมูล</label>
                                    <input type="text" name="device_communication_address" id="device_communication_address" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="type">Protocol ที่ใช้รับส่งข้อมูล</label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="device_communication_protocol" id="device_communication_protocol" value="1"><label for="device_communication_protocol">SMB</label></label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="device_communication_protocol" id="device_communication_protocol" value="2"><label for="device_communication_protocol">Fiber Channel</label></label>
                                        <label class="form-check-label"><input type="checkbox" class="form-check-input" name="device_communication_protocol" id="device_communication_protocol" value="3"><label for="device_communication_protocol">iSCSI</label></label>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="cardheader card-background text-white">
                        <h4>หมายเหตุและปัญหาในการใช้งาน</h4>
                    </div>
                    <div class="card-body">
                        <p>test</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection