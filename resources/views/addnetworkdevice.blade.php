@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <form>
        <div class="col-12 mx-auto">
            <div class="card mt-4">
                <div class="card-header card-background text-white">
                    <h4>ข้อมูลพื้นฐานของครุภัณฑ์</h4>
                </div>
                <div class="card-body">
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
                    <h4>ข้อมูลจำเพาะ</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="device_subtype">ชนิดของอุปกรณ์</label>
                                <select class="form-control" id="device_subtype">
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
    </form>
</div>
@endsection