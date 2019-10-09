@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-11 mx-auto">
            <form>
                <h2 class="mt-4">ข้อมูลครุภัณฑ์พี้นฐาน</h2>
                <div class="form-row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="sapid">รหัส SAP</label>
                            <input type="text" class="form-control" id="sapid" name="sapid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
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
                            <select class="form-control" id="location">
                                <option value="location">location</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="location">ชั้น</label>
                            <select class="form-control" id="location">
                                <option value="location">location</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="location">ปีก</label>
                            <select class="form-control" id="location">
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
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="is_mobile">label</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="1">
                                <label class="form-check-label" for="is_mobile">เป็นเครื่องเคลื่อนที่</label><br>
                                <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="0" checked>
                                <label class="form-check-label" for="is_mobile">เป็นเครื่องประจำที่</label><br>
                            </div><br>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="section">หน่วยงาน</label>
                            <select class="form-control" id="section">
                                <option value="" hidden></option>
                                <option value="1">สำนักงาน</option>
                            </select>
                        </div>
                    </div>
                </div>
                <label for="user">ชื่อผู้ใช้งาน</label><br>
                <input type="text" class="form-control" id="user" name="user">
                <label for="position">ตำแหน่งผู้ใช้งาน</label>
                <input type="text" class="form-control" name="position" id="position">
                <label for="section_status">ประเภทหน่วยงาน</label>
                <select class="form-control" id="section_status">
                <option value="1">สำนักงาน</option>
                <option value="2">หอผู้ป่วย</option>
                <option value="3">ห้องประชุม</option>
                </select>
                <label for="tel_no">หมายเลขโทรศัพท์</label>
                <input type="text" class="form-control" name="tel_no" id="tel_no">
                <label for="function">ระบบงาน</label>
                <select class="form-control" id="function">
                <option value="1">สำนักงาน</option>
                <option value="2">หอผู้ป่วย</option>
                </select>
                <label for="owner">เจ้าของเครื่อง</label><br>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="owner" id="owner" value="1" checked>
                <label class="form-check-label" for="owner">คณะ</label><br>
                <input class="form-check-input" type="radio" name="owner" id="owner" value="2">
                <label class="form-check-label" for="owner">ภาควิชา</label><br>
                </div>
                <label for="asset_status">สถานะของครุภัณฑ์</label>
                <select class="form-control" id="asset_status">
                <option value="status">ใช้งาน</option>
                <option value="status2">ไม่ได้ใช้งาน</option>
                <option value="status3">ส่งคืนแล้ว</option>
                </select>
                <label for="remarks">หมายเหตุ</label><br>
                <textarea class="form-control" name="remarks" id="remarks" rows="5"></textarea>
                <h2>คุณสมบัติของเครื่อง</h2>
                <label for="brand">ยี่ห้อ</label>
                <input class="form-control" name="brand" id="brand" type="text">
                <label for="model">รุ่น</label>
                <input class="form-control" name="model" id="model" type="text">
                <label for="serial_no">Serial Number จากผู้ผลิต</label>
                <input class="form-control" name="serial_no" id="serial_no" type="text">
                <label for="connectivity">วิธีการเชื่อมต่อ</label>
                <select class="form-control" id="connectivity">
                <option value="1">USB</option>
                <option value="2">eSATA</option>
                <option value="3">SAS</option>
                </select>
                <label for="total_capacity">ความจุข้อมูล</label>
                <input class="form-control" name="total_capacity" id="total_capacity" type="number" min="0">
                <div class="form-check form-check-inline">
                <input class="form-check" type="checkbox" name="is_hotswap" id="is_hotswap" value="yes">
                <label class="form-check-label" for="other_software">
                    เป็นอุปกรณ์ hotswap
                </label>
                </div><br>
                <label for="no_of_physical_drive_max">จำนวน Hard Disk สูงสุดที่ยอมรับได้</label>
                <input class="form-control" name="no_of_physical_drive_max" id="no_of_physical_drive_max" type="number" min="2" default="2">
                <label for="no_of_physical_drive_populated">จำนวน Hard Disk ที่มีอยู่</label>
                <input class="form-control" name="no_of_physical_drive_populated" id="no_of_physical_drive_populated" type="number" min="2" default="2">
                <label for="lun_count">จำนวน disk จำลองที่มีอยู่</label>
                <input class="form-control" name="lun_count" id="lun_count" type="number" min="1" default="1">
                <label for="issues">ปัญหาในการใช้งาน</label>
                <textarea class="form-control" name="issues" id="issues" rows="5"></textarea>
            </form>
        </div>
    </div>
@endsection