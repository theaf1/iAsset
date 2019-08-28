<?php

namespace App;
use \Illuminate\Database\Eloquent\Model;

class Computers Extends Model
{
    protected $fillable = [
        'id',
        'SAPID',
        'Brand',
        'Model',
        'Vendor_SN',
        'CPU_model',
        'CPU_speed',
        'CPU_Core_No',
        'RAM_Size',
        'HDD_Type',
        'HDD_Size',
        'SAPID_Display',
        'PID_Display',
        'Screen_size',
        'Screen_ratio',
        'IP_Address',
        'LAN_Outlet_No',
        'MAC_Address',
        'LAN_TYPE',
        'Computer_name',
        'OS',
        'OS_version',
        'MS_Office_Version',
        'Anti_virus',
        'PDF_reader',
        'IE_version',
        'Chrome_version',
        'SPSS_version',
        'endnote_Version',
        'E_his',
        'SiPAC',
        'si_iscan',
        'buddyscan',
        'eclair',
        'UR_ward',
        'admission_notes',
        'SiNet',
        'Other_application',
        'issue',
        'Remarks',

    ];
}