<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset_statuses;
use App\Asset_use_statuses;
use App\Sections;

class Upscontroller extends Controller
{
    public function index(){
        $Asset_statuses=Asset_statuses::all();
        $Asset_use_statuses=Asset_use_statuses::all();
        $Sections=Sections::all();

        return view('addups')->with([
            'asset_statuses'=>$Asset_statuses,
            'asset_use_statuses'=>$Asset_use_statuses,
            'sections'=>$Sections,
        ]);
    }
    public function store(Request $request){
        return $request->all();
    }

}
