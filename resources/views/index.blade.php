@extends('layouts.app')
@section('header')
<p><b>mainmenu</b></p>
@endsection
@section('content')




<div class="container">
<form>
<div class="form-group">
<label for="type">ชนิด</label>
    <select class="form-control" id="type">
        <option value="PC">PC</option>
        <option value="Notebook">Notebook</option>
        <option value="allinone">All-In-One</option>
        <option value="workstation">Workstation</option>
    </select>
<label for="sapid">รหัส SAP</label>
<input type="text" class="form-control" id="sapid" name="sapid">
<label for="pid">รหัสครุภัณฑ์</label>
<input type="text" class="form-control" id="pid" name="pid">
<label for="location">ตึก</label>
    <select class="form-control" id="location">
    <option value="location">location</option>
</select>
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
<input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="yes">
<label class="form-check-label" for="is_mobile">เป็นเครื่องเคลื่อนที่</label><br>
<input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="no" checked>
<label class="form-check-label" for="is_mobile">เป็นเครื่องประจำที่</label><br>
</div><br>
<label for="section">หน่วยงาน</label>
    <select class="form-control" id="section">
        <option value="section">หน่วยงาน</option>
    </select>
<label for="user">ชื่อผู้ใช้งาน</label><br>
<input type="text" class="form-control" id="user" name="user">
<p>ตำแหน่งผู้ใช้งาน</p><input type="text" class="form-control" name="position">
<label for="section_status">ประเภทหน่วยงาน</label>
<select class="form-control" id="section_status">
    <option value="สำนักงาน">สำนักงาน</option>
    <option value="หอผู้ป่วย">หอผู้ป่วย</option>
    <option value="ห้องประชุม">ห้องประชุม</option>
</select>
<label for="function">ระบบงาน</label>
<select class="form-control" id="function">
    <option value="สำนักงาน">สำนักงาน</option>
    <option value="หอผู้ป่วย">หอผู้ป่วย</option>
</select>
<label for="owner">เจ้าของเครื่อง</label><br>
<input class="form-check-input" type="radio" name="owner" id="owner" value="1" checked>
<label class="form-check-label" for="owner">คณะ</label><br>
<input class="form-check-input" type="radio" name="owner" id="owner" value="2">
<label class="form-check-label" for="owner">ภาควิชา</label><br>
<label for="accesssiblity">สิทธิ์ Admin</label><br>
<input type="checkbox" name="accessibility" value="yes">มีสิทธิ admin<br>
<label for="asset_status">สถานะของครุภัณฑ์</label>
    <select class="form-control" id="asset_status">
    <option value="status">ใช้งาน</option>
    <option value="status2">ไม่ได้ใช้งาน</option>
    <option value="status3">ส่งคืนแล้ว</option>
    </select>
<label for="function">หมายเหตุ</label><br>
<textarea class="form-control" name="remarks" id="remarks" rows="5"></textarea>
<label for="brand">ยี่ห้อ</label>
ี่<input class="form-control" name="brand" id="brand" type="text">
<label for="model">รุ่น</label>
<input class="form-control" name="model" id="model" type="text">
<label for="serial_no">Serial Number จากผู้ผลิต</label>
<input class="form-control" name="serial_no" id="serial_no" type="text">
<label for="cpu_model">CPU Model</label>
<input class="form-control" name="cpu_model" id="cpu_model" type="text">
<label for="cpu_speed">CPU Speed
<input class="form-control" name="cpu_speed" id="cpu_speed" type="number" min="0">
<label for="cpu_socket_no">จำนวน Socket CPU</label>
<input class="form-control" name="cpu_socket_no" id="cpu_socket_no" type="number" min="1" value="1">
<label for="ram_size">RAM Size</label>
<input class="form-control" name="ram_size" id="ram_size" type="number" min="0">
็<label for="hdd_no">จำนวน Hard Disk ในเครื่อง</label>
<input class="form-control" name="hdd_no" id="hdd_no" type="number" min="1" value="1">
<p>HDD type</p>
<p>HDD Size</p>
<label for="display_no">จำนวนจอที่ใช้งาน</label>
<input class="form-control" name="display_no" id="display_no" type="number" min="0" value="1">
<label for="display_sapid">SAP จอ</label>
<input class="form-control" name="display_sapid" id="display_sapid" type="text">
<label for="display_pid">รหัสครุภัณฑ์จอภาพ</label>
<input class="form-control" name="display_pid" id="display_pid" type="text">
<label for="display_size">ขนาดจอภาพ</label>
<input class="form-control" name="display_size" id="display_size" type="number" min="0">
<label for="display_ratio">สัดส่วนจอภาพ</label>
<input class="form-control" name="display_ratio" id="display_ratio" type="text" pattern="{0-9}:{0-9}">
<label for="os">OS</label>
<input class="form-control" name="os" id="os" type="text">
<label for="os_arch">OS architecture</label><br>
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="os_arch" id="os_arch" value="1">
    <label class="form-check-label" for="os_arch">32 bit<label>
    <input class="form-check-input" type="radio" name="os_arch" id="os_arch" value="2">
    <label class="form-check-label" for="os_arch">64 bit</label>
</div><br>
<label for="ms_office_ver">Microsoft Office Version</label>
<input type="text" class="form-control" name="ms_office_ver" id="ms_office_ver">
<label for="antivirus">Antivirus</label>
<input class="form-control" name="antivirus" id="antivirus" type="text">
<label for="pdf_reader">PDF reader</label>
<input class="form-control" name="pdf_reader" id="pdf_reader" type="text">
<label for="ie_version">IE version</label>
<input class="form-control" name="ie_version" id="ie_version" type="number" value="6">
<label for="chrome_version">Chrome version</label>
<input class="form-control" name="chrome_version" id="chrome_version" type="text">
<label for="spss_version">SPSS version</label>
<input class="form-control" name="spss_version" id="spss_version" type="number" value="17">
<div class="form-check">
    <p></p>
    <input class="form-check-input" type="checkbox" name="ehis" id="ehis" value="1">
    <label class="form-check-label" for="ehis">E-HIS</label>
    <p></p>
    <input class="form-check-input" type="checkbox" name="sipacs" id="sipacs" value="1">
    <label class="form-check-label" for="sipacs">SiPACS</label>
    <p></p>
    <input class="form-check-input" type="checkbox" name="si_iscan" id="si_iscan" value="1">
    <label class="form-check-label" for="si_iscan">i-scan</label>
    <p></p>
    <input class="form-check-input" type="checkbox" name="eclair" id="eclair" value="1">
    <label class="form-check-label" for="eclair">ECLAIR</label>
    <p></p>
    <input class="form-check-input" type="checkbox" name="admission_note" id="admission_note" value="1">
    <label class="form-check-label" for="admission_note">Admission Notes</label>
    <p></p>
    <input class="form-check-input" type="checkbox" name="sinet" id="sinet" value="1">
    <label class="form-check-label" for="sinet">SiNet</label>
</div>
<p>Software อื่นๆ</p>
<input type="checkbox" name="other_software" value="yes">มี Softwareอื่นๆ<br>
<textarea name="other_software_detail" rows="5" columns="180"></textarea>
<p>LAN outlet No<input name="lan_outlet_no" type="text"></p>
<p>IP Address<input name="ip_addresss" type="text"></p>
<p>MAC Address<input name="mac_addresss" type="text"></p>
<p>ประเภทเครือข่าย</p>
<input type="radio" name="lan_type" value="0">ไม่เชื่อมต่อ<br>
<input type="radio" name="lan_type" value="1">MUCNET<br>
<input type="radio" name="lan_type" value="2">Internet โรงพยาบาล<br>
<input type="radio" name="lan_type" value="3">ระบบภายในโรงพยาบาล<br>
<p>Computer Name<input name="computer_name" type="text"></p>
<p>ปัญหาในการใช้งาน</p>
<textarea name="issues" rows="5"></textarea>
</form>
</div>
</div>
@endsection 