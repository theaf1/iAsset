<?php

namespace App;
use \Illuminate\Database\Eloquent\Model;

class Computers Extends Model
{
    protected $fillable = [
        'id',
        'SAPID',
        'PID',
        'Locate_Building',
        'Locate_floor',
        'locate_room',
        'Tel_no',
        'Asset_Class',
        'Type',
        'Owner',
        'user',
        'Position',
        'Accessibility',
        'Section',
        'Function',
        'remarks',
        'Issues',
        'Section_status',
    ];
}