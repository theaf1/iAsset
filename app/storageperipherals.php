<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storageperipherals extends Model
{
    protected $fillable = [
        'id',
        'sapid',
        'pid',
        'location',
        'is_mobile',
        'section',
        'user',
        'section_status',
        'tel_no',
        'function',
        'owner',
        'asset_status',
        'remarks',
        'brand',
        'model',
        'serial_no',
        'connectivity',
        'is_hotswap',
        'total_capacity',
        'no_of_physical_drive_max',
        'no_of_physical_drive_populated',
        'lun_count',
        'issues',
    ];
    function getType(){
        $this->belongsTo(sections::class);
    }
}
