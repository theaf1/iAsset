<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airconditioners extends Model
{
    protected $fillable =  [
        'id',
        'sapid',
        'pid',
        'location',
        'is_mobile',
        'section',
        'tel_no',
        'response_person',
        'owner',
        'asset_status',
        'asset_use_status',
        'brand',
        'model',
        'serial_no',
        'refrigerant',
        'refrigerant_charge',
        'cooling_capacity',
        'device_management_addres',
        'remarks',
        'issues',
    ];
    public function gettype(){
        $this->belongsTo(section::class);
        $this->belongsTo(location::class);
    }
}
