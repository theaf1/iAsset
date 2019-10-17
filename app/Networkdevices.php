<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Networkdevices extends Model
{
    protected $fillable = [
        'id',
    ];
    function gettype(){
        $this->belongsTo(location::class);
        $this->belongsTo(section::class);
    }
}
