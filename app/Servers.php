<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    protected $fillable = [
        'id',
        'sapid',
        'pid',
        'location',
        'section',
    ];
    public function gettype(){
        $this->belongsTo(sections::class);
        $this->hasMany(Displays::class);
    }
}
