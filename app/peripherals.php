<?php

namespace App;
use \Illuminate\Database\Eloquent\Model;

class Peripherals extends Model
{
    protected $fillable = [
        'id',
        'Status',
        'SAPID',
        'PID',
        'issue',
        'Remarks',
    ];
}