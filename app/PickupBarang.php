<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickupBarang extends Model
{
    protected $table = 'pickupbarang';
    protected $fillable = ['no_pickup', 'kode_pickup', 'pengirim', 'stt', 'waktu_berangkat', 'wakut_pulang', 'tanggal', 'cabang', 'user'];
    protected $primaryKey = 'id';

    public function s_kendaraan()
    {
        return $this->hasOne('\App\Kendaraan', 'id', 'kendaraan');
    }

    public function s_cabang()
    {
        return $this->hasOne('\App\Cabang', 'id', 'cabang');
    }
}
