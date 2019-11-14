<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Asset_use_statuses;
use App\asset_statuses;

class Servercontroller extends Controller
{
    public function index(){
        $Asset_statuses=Asset_statuses::all();
        $Asset_use_statuses=Asset_use_statuses::all();
        // return $Asset_use_statuses;
        return view('addserver')->with([
            'asset_statuses'=>$Asset_statuses,
            'asset_use_statuses'=>$Asset_use_statuses
        ]);
    }
    public function store(Request $request){
        return $request->all();
    }
}
