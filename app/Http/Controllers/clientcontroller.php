<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function index(){
        $sections = \App\Sections::all();
    }
    
}
