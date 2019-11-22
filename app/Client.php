<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   protected $fillable = [
      'id',
      'type',
      'sapid',
      'pid',
      'location_id',
      'is_mobile',
      'section',
      'user',
      'position',
      // 'section_status',
      'function',
      'owner',
      'permission',
      'asset_status',
      'asset_use_status',
      'remarks',
      'brand',
      'model',
      'serial_no',
      'cpu_model',
      'cpu_speed',
      'cpu_socket_number',
      'ram_size',
      'hdd_no',
      'hdd_total_cap',
      // 'display_no',
      'os',
      'os_arch',
      'ms_office_version',
      'antivirus',
      'pdf_reader',
      'ie_version',
      'chrome_version',
      'spss_version',
      'ehis',
      'sipacs',
      'si_iscan',
      'eclair',
      'admission_note',
      'sinet',
      // 'other_software',
      'other_software_detail',
      'lan_outlet_no',
      'ip_address',
      'mac_address',
      'lan_type',
      'computer_name',
      'issues',
   ];
   // public function gettype(){
   //    $this->belongsTo(Section::class);
   //    $this->hasMany(Displays::class);
   //    $this->hasOne(Asset_statuses::class);
   //    $this->hasOne(Asset_use_statuses::class);
   // }

   public function displays () 
   {
      return $this->hasMany(Display::class);
   }

   public function section ()
   {
      return $this->hasOne(Section::class);
   }
   
}
