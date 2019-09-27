@extends('layouts.app')
@section('content')
<div class="container">
    <form>
    <div class="form-group">
    <h2>ข้อมูลครุภัณฑ์พื้นฐาน</h2>
            <label for="type">ชนิด</label>
            <select class="form-control form-control-lg" id="type">
                <option value="1">PC</option>
                <option value="2">Notebook</option>
                <option value="3">All-In-One</option>
                <option value="4">Workstation</option>
            </select>
        <label for="sapid">รหัส SAP</label>
        <input type="text" class="form-control form-control-sm" id="sapid" name="sapid">
        <label for="pid">รหัสครุภัณฑ์</label>
        <input type="text" class="form-control" id="pid" name="pid">
        <label for="location">ตึก</label>
        <select class="form-control" id="location">
            <option value="location">location</option>
        <select>
        <label for="location">ชั้น</label>
            <select class="form-control" id="location">
                <option value="location">location</option>
            </select>
        <label for="location">ปีก</label>
            <select class="form-control" id="location">
                <option value="location">location</option>
            </select>
        <label for="location">ห้อง</label>
            <select class="form-control" id="location">
                <option value="location">location</option>
            </select>
        <label for="is_mobile">label</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="1">
                <label class="form-check-label" for="is_mobile">เป็นเครื่องเคลื่อนที่</label><br>
                <input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="0" checked>
                <label class="form-check-label" for="is_mobile">เป็นเครื่องประจำที่</label><br>
            </div><br>
        <label for="section">หน่วยงาน</label>
            <select class="form-control" id="section">
                <option value="" hidden></option>
                <option value="1">ตึกอัษฎางค์</option>
            </select>
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
        <label for="function">ระบบงาน</label>
            <select class="form-control" id="function">
                <option value="สำนักงาน">สำนักงาน</option>
                <option value="หอผู้ป่วย">หอผู้ป่วย</option>
            </select>
        <label for="owner">เจ้าของเครื่อง</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="owner" id="owner" value="1" checked>
                <label class="form-check-label" for="owner">คณะ</label><br>
                <input class="form-check-input" type="radio" name="owner" id="owner" value="2">
                <label class="form-check-label" for="owner">ภาควิชา</label><br>
            </div>
        <label for="accesssiblity">สิทธิ์ Admin</label><br>
        <input type="checkbox" name="accessibility" value="yes">มีสิทธิ admin<br>
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
    </div>
    </form>
</div>
@endsection