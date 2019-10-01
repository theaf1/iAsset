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
    ];
}
