<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Networkdevices extends Model
{
    protected $fillable = [
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
        'device_subtype',
        'brand',
        'model',
        'port_count',
        'psu_count',
        'device_management_address',
        'software_version',
        'issues',
        'remarks',
    ];
    function gettype(){
        $this->belongsTo(location::class);
        $this->belongsTo(section::class);
    }
}
