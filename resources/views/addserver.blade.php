@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-11 mx-auto">
            <form>
                <h2 class="mt-4">ข้อมูลทั่วไปของครุภัณฑ์</h2>
                <div class="form-row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="sapid">รหัส SAP</label>
                            <input type="text" class="form-control" id="sapid" name="sapid">
                        </div>
                    </div>
                </div>
                <h2 class="mt-4">คุณสมบัติของเครื่อง</h2>
                <h2 class="mt-4">ข้อมูลด้านเครือข่าย</h2>
            </form>
        </div>
    </div>
@endsection