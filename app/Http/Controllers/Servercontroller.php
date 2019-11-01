<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Servercontroller extends Controller
{
    public function store(Request $request){
        return $request->all();
    }
}
