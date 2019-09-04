@extends('layouts.app')
@section('header')
<p><b>mainmenu</b></p>
@endsection
@section('content')
<form>
<p>ชนิด</p>
<select name="type">
    <option value="PC">PC</option>
    <option value="Notebook">Notebook</option>
    <option value="allinone">All-In-One</option>
</select>
<p>รหัส SAP</p><input name="sapid" type="text">
<p>รหัสครุภัณฑ์</p><input name="pid" type="text">
<p>ตึก</p>
<select name="location">
    <option value="location">location</option>
</select>
<p>เป็นคอมพิวเตอร์เคลื่อนที่</p>
<input type="radio" name="is_mobile" value="yes">ใช่<br>
<input type="radio" name="is_mobile" value="no">ไม่ใช่<br>
<p>หน่วยงาน</p>
<select name="section">
    <option value="section">section</option>
</select>
<p>ชื่อผู้ใช้งาน</p><input name="user" type="text">
<p>xitหน่วยงาน</p>
<select name="section_status">
    <option value="สำนักงาน">สำนักงาน</option>
    <option value="หอผู้ป่วย">หอผู้ป่วย</option>
    <option value="ห้องประชุม">ห้องประชุม</option>
</select>
<p>ระบบงาน</p>
<select name="function">
    <option value="สำนักงาน">สำนักงาน</option>
    <option value="หอผู้ป่วย">หอผู้ป่วย</option>
</select>
<p>เจ้าของ</p>
<input type="radio" name="owner" value="yes">คณะ<br>
<input type="radio" name="owner" value="no">ภาควิชา<br>
<p>สิทธิ์ admin</p>
<input type="checkbox" name="accessibility" value="yes">มีสิทธิ admin<br>
<p>สถานะของครุภัณฑ์</p>
<select name="asset_status">
    <option value="status">ใช้งาน</option>
    <option value="status2">ไม่ได้ใช้งาน</option>
    <option value="status3">ส่งคืนแล้ว</option>
</select>
<p>หมายเหตุ</p>
<textarea name="remarks" rows="5" columns="180">
</textarea>
</form>
@endsection 