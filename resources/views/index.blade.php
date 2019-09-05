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
<label for="location">สถานที่ตั้ง</label>
    <select class="form-control" id="location">
    <option value="location">location</option>
</select>

<input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="no" checked>
<label class="form-check-label" for="is_mobile">
เป็นเครื่องเคลื่อนที่
</label>
<input class="form-check-input" type="radio" name="is_mobile" id="is_mobile" value="yes">
<label class="form-check-label" for="is_mobile">
เป็นเครื่องประจำที่
</label>
<!-- <input type="radio" name="is_mobile" value="yes">ใช่<br>
<input type="radio" name="is_mobile" value="no">ไม่ใช่<br> -->
<p>หน่วยงาน</p>
<select name="section">
    <option value="section">section</option>
</select>
<p>ชื่อผู้ใช้งาน</p><input name="user" type="text">
<p>ตำแหน่งผู้ใช้งาน</p><input name="position" type="text">
<p>ประเภทหน่วยงาน</p>
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
<textarea name="remarks" rows="5" columns="180"></textarea>
<p>ยี่ห้อ<input name="brand" type="text"></p>
<p>รุ่น<input name="model" type="text"></p>
<p>Serial Number<input name="serial_no" type="text"></p>
<p>CPU Model<input name="cpu_model" type="text"></p>
<p>CPU Speed<input name="cpu_speed" type="text"></p>
<p>CPU Socket Number<input name="cpu_socket_no" type="number" min="1" value="1"></p>
<p>RAM Size<input name="ram_size" type="number" min="0"></p>
็<p>HDD number<input name="hdd_no" type="number" min="1" value="1"></p>
<p>HDD type</p>
<p>HDD Size</p>
<p>จำนวนจอที่ใช้งาน<input name="display_no" type="number" min="0" value="1"></p>
<p>SAP จอ<input name="display_sapid" type="text"></p>
<p>รหัสครุภัณฑ์จอภาพ<input name="display_pid" type="text"></p>
<p>ขนาดจอภาพ<input name="display_size" type="number"></p>
<p>สัดส่วนจอภาพ<input name="display_ratio" type="text" pattern="{0-9}:{0-9}"></p>
<p>OS<input name="os" type="text"></p>
<p>OS architecture</p>
<input type="radio" name="os_arch" value="yes">32 bit<br>
<input type="radio" name="os_arch" value="no">64 bit<br>
<p>Microsoft Office Version<input name="ms_office_ver" type="text"></p>
<p>Antivirus<input name="antivirus" type="text"></p>
<p>PDF reader<input name="pdf_reader" type="text"></p>
<p>IE version<input name="ie_version" type="number" value="6"></p>
<p>Chrome version<input name="chrome_version" type="text"></p>
<p>SPSS version<input name="spss_version" type="number" value="17"></p>
<p>E-HIS</p>
<input type="radio" name="ehis" value="yes">มี<br>
<input type="radio" name="ehis" value="no">ไม่มี<br>
<p>SiPACS</p>
<input type="radio" name="sipac" value="yes">มี<br>
<input type="radio" name="sipac" value="no">ไม่มี<br>
<p>i-scan</p>
<input type="radio" name="si_iscan" value="yes">มี<br>
<input type="radio" name="si_iscan" value="no">ไม่มี<br>
<p>ECLAIR</p>
<input type="radio" name="eclair" value="yes">มี<br>
<input type="radio" name="eclair" value="no">ไม่มี<br>
<p>Admission Notes</p>
<input type="radio" name="admission_note" value="yes">มี<br>
<input type="radio" name="admission_note" value="no">ไม่มี<br>
<p>SiNET</p>
<input type="radio" name="sinet" value="yes">มี<br>
<input type="radio" name="sinet" value="no">ไม่มี<br>
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
@endsection 