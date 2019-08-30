<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable = [
        'id',
        'building_id',
        'floor_id',
        'wing_id',
        'name',
    ];
   
}
{
    public function getType(){
        $this->hasMany(Building::class)
    };

}