<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntrianKendaraan extends Model
{
    protected $table = 'antriankendaraan';
    protected $fillable = ['kendaraan', 'nama_supir', 'nama_kernet'];
    protected $primaryKey = 'id';

    public function s_kendaraan()
    {
        return $this->hasOne('\App\Kendaraan', 'id', 'kendaraan')->with('s_cabang');
    }

    public function s_supir()
    {
        return $this->hasOne('\App\User', 'id', 'nama_supir');
    }

    public function s_kernet()
    {
        return $this->hasOne('\App\User', 'id', 'nama_kernet');
    }

    public function s_lansir()
    {
        return $this->hasOne('\App\Lansir', 'antrian_kendaraan', 'id');
    }
}
