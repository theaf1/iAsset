@extends('Layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-12 mx-auto">
            <form action="/store" method="post">
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
                                    <label for="user">ชื่อผู้ใช้งาน</label><br>
                                    <input type="text" class="form-control" id="user" name="user">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--ตำแหน่งผู้ใช้งาน-->
                                <div class="form-group">
                                    <label for="position">ตำแหน่งผู้ใช้งาน</label>
                                    <input type="text" class="form-control" name="position" id="position">
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
                            <div class="col-sm-12 col-lg-6"> <!--หมายเหตุ-->
                                <div class="form-group">
                                    <label for="asset_use_status">สถานะการใช้งานของครุภัณฑ์</label>
                                    <select class="form-control" id="asset_use_status">
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
                        <h4>คุณสมบัติของเครื่อง</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-sm12 col-lg-6"> <!--ยี่ห้อ-->
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
                            <div class="col-sm-12 col-lg-6"> <!--serial number-->
                                <div class="form-group">
                                    <label for="serial_no">Serial Number จากผู้ผลิต</label>
                                    <input class="form-control" name="serial_no" id="serial_no" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--วิธีการเชื่อมต่อ-->
                                <div class="form-group">
                                    <label for="connectivity">วิธีการเชื่อมต่อ</label>
                                    <select class="form-control" id="connectivity">
                                        <option value="1">USB</option>
                                        <option value="2">eSATA</option>
                                        <option value="3">SAS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--ความจุข้อมูล-->
                                <div class="form-group">
                                    <label for="total_capacity">ความจุข้อมูล</label>
                                    <input class="form-control" name="total_capacity" id="total_capacity" type="number" min="0">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--เป็นอุปกรณ์ hotswap-->
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check" type="checkbox" name="is_hotswap" id="is_hotswap" value="yes">
                                        <label class="form-check-label" for="is_hotswap">เป็นอุปกรณ์ hotswap</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--จำนวน Hard Disk สูงสุดที่ยอมรับได้-->
                                <div class="form-group">
                                    <label for="no_of_physical_drive_max">จำนวน Hard Disk สูงสุดที่ยอมรับได้</label>
                                    <input class="form-control" name="no_of_physical_drive_max" id="no_of_physical_drive_max" type="number" min="2" default="2">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6"> <!--จำนวน Hard Disk ที่มีอยู่-->
                                <div class="form-group">
                                    <label for="no_of_physical_drive_populated">จำนวน Hard Disk ที่มีอยู่</label>
                                    <input class="form-control" name="no_of_physical_drive_populated" id="no_of_physical_drive_populated" type="number" min="2" default="2">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 col-lg-6"> <!--จำนวน disk จำลองที่มีอยู่-->
                                <div class="form-group">
                                    <label for="lun_count">จำนวน disk จำลองที่มีอยู่</label>
                                    <input class="form-control" name="lun_count" id="lun_count" type="number" min="1" default="1">
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
                            <div class="col-sm-12 col-lg-6"> <!--ปัญหาในการใช้งาน-->
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