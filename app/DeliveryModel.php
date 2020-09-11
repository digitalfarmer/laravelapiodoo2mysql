<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryModel extends Model
{
    protected $table='in_delivery';
    protected $id='no_delivery';
    protected $fillable=[
        'No_Delivery'         ,
        'Kode_Referensi'      ,
        'Jenis_referensi'     ,
        'Tgl_Delivery'        ,
        'Tgl_Permintaan_Kirim',
        'Nama_Tujuan'        , 
        'Alamat_Tujuan'     ,  
        'Kota_Tujuan'      ,   
        'Time_Stamp'      ,   
        'User_ID'        ,     
        'Status_Tercetak'             
    ];
    public $timestamps=false;
}
