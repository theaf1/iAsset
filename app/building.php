<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class building extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];
}
{
    public function gettype() {
        $this->hasMany(floor::class)
    }
}