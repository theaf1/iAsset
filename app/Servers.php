<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    protected $fillable =[
        'id',
    ];
    public function gettype(){
        $this->belongsTo(sections::class);
        $this->hasMany(Displays::class);
    }
}
