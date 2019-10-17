@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <form>
        <div class="col-11 mx-auto">
            <h2 class="mt-4">ข้อมูลพื้นฐานของครุภัณฑ์</h2>
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
                                <option value="status">ใช้งาน</option>
                                <option value="status2">ไม่ได้ใช้งาน</option>
                                <option value="status3">ส่งคืนแล้ว</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="remarks">หมายเหตุ</label><br>
                            <textarea class="form-control" name="remarks" id="remarks" rows="1"></textarea>
                        </div>
                    </div>
                </div>
            <h2 class="mt-4">ข้อมูลจำเพาะ</h2>
                <div class="form-row">
                    <div class="col-sm12 col-lg-6">
                        <div class="form-group">
                            <select class="form-control" id="device_subtype">
                                <option value="" hidden></option>
                                <option value="1">HUB</option>
                                <option value="2">Unmanaged Switch</option>
                                <option value="3">Managed Switch</option>
                                <option value="4">Router</option>
                                <option value="5">Wireless Accesss Point</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
    </form>
</div>
@endsection