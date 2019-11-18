<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
   protected $fillable =[
       'id',
       'name',
   ];
   public function gettype(){
       $this->hasMany(clients::class);
       $this->hasMany(peripherals::class);
       $this->hasMany(displays::class);
       $this->hasMany(storageperipherals::class);
       $this->hasMany(Server::class);
       $this->hasMany(Networkdevices::class);
       $this->hasMany(Upses::class);
       $this->hasMany(Airconditioners::class);
   }
}
