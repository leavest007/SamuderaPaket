<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntrianTruck extends Model
{
    protected $table = 'antriantruck';
    protected $fillable = ['truck', 'nama_supir', 'no_telpon_supir', 'kernet', 'no_telpon_kernet', 'cabang'];
    protected $primaryKey = 'id';

    public function s_truck()
    {
        return $this->hasOne('\App\Truck', 'id', 'truck');
    }

    public function s_muat()
    {
        return $this->hasOne('\App\Muat', 'antrian_truck', 'id')->with('s_stt');
    }
}
