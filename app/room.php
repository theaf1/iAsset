<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable = [
        'id',
        'name',
        'location_id',   
    ];
}
{
    public function gettype() {
        $this->belongsTo(building::class)
    };
}