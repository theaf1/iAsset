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
        <label for="cpu_model">CPU Model</label>
        <input class="form-control" name="cpu_model" id="cpu_model" type="text">
        <label for="cpu_speed">CPU Speed</label>
        <input class="form-control" name="cpu_speed" id="cpu_speed" type="number" min="0">
        <label for="cpu_socket_no">จำนวน Socket CPU</label>
        <input class="form-control" name="cpu_socket_no" id="cpu_socket_no" type="number" min="1" value="1">
        <label for="ram_size">RAM Size</label>
        <input class="form-control" name="ram_size" id="ram_size" type="number" min="0">
        <label for="hdd_no">จำนวน Hard Disk ในเครื่อง</label>
        <input class="form-control" name="hdd_no" id="hdd_no" type="number" min="1" value="1">
    
        <label for=hdd_total_cap>ความจุรวมของ HDD</label>
        <input class="form-control" name="hdd_total_cap" id="hdd_total_cap" type="number" min="0" value="1">
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
        <h2>ข้อมูลด้าน software</h2>
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
                <input class="form-check-input" type="checkbox" name="ehis" id="ehis" value="1">
                <label class="form-check-label" for="ehis">E-HIS</label><br>
                <input class="form-check-input" type="checkbox" name="sipacs" id="sipacs" value="1">
                <label class="form-check-label" for="sipacs">SiPACS</label><br>
                <input class="form-check-input" type="checkbox" name="si_iscan" id="si_iscan" value="1">
                <label class="form-check-label" for="si_iscan">i-scan</label><br>
                <input class="form-check-input" type="checkbox" name="eclair" id="eclair" value="1">
                <label class="form-check-label" for="eclair">ECLAIR</label><br>
                <input class="form-check-input" type="checkbox" name="admission_note" id="admission_note" value="1">
                <label class="form-check-label" for="admission_note">Admission Notes</label><br>
                <input class="form-check-input" type="checkbox" name="sinet" id="sinet" value="1">
                <label class="form-check-label" for="sinet">SiNet</label><br>
            </div>
        <p>Software อื่นๆ</p>
            <div class="form-check">
                <input class="form-check" type="checkbox" name="other_software" id="other_software" value="yes">
                <label class="form-check-label" for="other_software">มี Softwareอื่นๆ</label><br>
            </div>
            <textarea class="form-control" name="other_software_detail" id="other_software_detail" rows="5"></textarea>
        <h2>ข้อมูลด้านเครือข่าย</h2>
        <p>ประเภทเครือข่าย</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="lan_type" id="lan_type" value="0">
                <label class="form-check-label" for="lan-type">ไม่เชื่อมต่อ</label><br>
                <input class="form-check-input" type="radio" name="lan_type" id="lan_type" value="1">
                <label class="form-check-label" for="lan-type">MUCNET</label><br>
                <input class="form-check-input" type="radio" name="lan_type" id="lan_type" value="2">
                <label class="form-check-label" for="lan-type">Internet โรงพยาบาล</label><br>
                <input class="form-check-input" type="radio" name="lan_type" id="lan_type" value="3">
                <label class="form-check-label" for="lan-type">ระบบภายในโรงพยาบาล</label><br>
            </div>
            <label for="lan_outlet_no">LAN outlet No</label>
            <input class="form-control" name="lan_outlet_no" id="lan_outlet_no" type="text">
            <label for="ip_address">IP Address</label>
            <input class="form-control" name="ip_addresss" id="ip_address" type="text">
            <label for="mac_address">MAC Address</label>
            <input class="form-control" name="mac_addresss" id="mac_address" type="text">
            <label for="computer_name">Computer Name</label>
            <input class="form-control" name="computer_name" id="computer_name" type="text">
            <label for="issues">ปัญหาในการใช้งาน</label>
            <textarea class="form-control" name="issues" id="issues" rows="5"></textarea>
        </div>
    </form>

</div>
@endsection