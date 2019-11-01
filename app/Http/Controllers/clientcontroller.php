<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function index(){
        $sections = \App\Sections::all();
        $clients = \App\clients::all();
    }
    public function store(Request $request){
        return $request->all();
    }
}
