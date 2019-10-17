<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'id',
        'location_id',
        'name'
    ];
    
    public static function loadData($fileName){
        $roomRecords = loadCSV($fileName);
        foreach($roomRecords as $roomRecord){
            Room::create($roomRecord);
        }
    }
}
