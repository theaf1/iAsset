<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Storageperipherals extends Controller
{
    public function store(Request $request){
        return $request->all();
    }
}
