@extends('Layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-12 mx-auto">
            <form>
                <div class="form-row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="search_class">ต้องการค้นหา</label>
                            <select name="a" id="search_class" class="form-control">
                                <optgroup label="client">
                                    <option value="a">คอมพิวเตอร์</option>
                                </optgroup>
                                <optgroup label="peripherals">
                                    <option value="b">printer</option>
                                    <option value="c">storage device</option>
                                </optgroup>
                                <optgroup label="infrastructure">
                                    <option value="d">server</option>
                                    <option value="e">network device</option>
                                    <option value="f">networked storage</option>
                                    <option value="g">UPS</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="search_arg">ด้วย</label>
                            <input type="search" name="search_arg" id="search_arg" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection