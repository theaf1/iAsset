@extends('layouts.app')
@section('content')
    <title>title</title>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>สำรวจภาระงานและจำนวนบุคลากร เพื่อแบ่งงานให้ยุติธรรมตามที่อ.ความถนัด และใช้เป็นเกณฑ์ในการประเมิน</p>
            </div>
            <div class="col-6">
                <p>สำรวจภาระงานและจำนวนบุคลากร เพื่อแบ่งงานให้ยุติธรรมตามที่อ.ความถนัด และใช้เป็นเกณฑ์ในการประเมิน เป็นที่ยอมรับของทุกคน</p>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                <h1>halp!!</h1>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="first_name">ชื่อ</label>
                            <input class="form-control" type="text" name="first_name" id="first_name">
                        </div> 
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="last_name">ชื่อสกุล</label>
                            <input class="form-control" type="text" name="last_name" id="last_name">
                        </div> 
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-primary">test</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection