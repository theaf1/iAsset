<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable = [
        'id',
        'floor',
        'wing',
        'wing_id',
        'building_id',
    ];
    public function getType(){
        $this->hasMany(Building::class);
    }
}
{
   

}