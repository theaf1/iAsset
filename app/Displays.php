<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Displays extends Model
{
    protected $fillable = [
        'id',
        'client_sapid', //foreign key จาก ตาราง clients
        'display_sapid',
        'display_pid',
        'display_size',
        'display_ratio',
    ];
    public function gettype(){
        $this->belongsTo(Section::class);
        $this->belongsTo(clients::class);
    }
}
