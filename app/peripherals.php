<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peripherals extends Model
{
    protected $fillable =[
        'id',
        'sapid',
        'pid',
    ];
    public function gettype(){
        $this->belongsTo(sections::class);
    }
}
