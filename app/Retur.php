<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retur extends Model
{
    protected $table = 'retur';
    protected $fillable = ['kode_retur', 'cabang', 'tanggal_kirim', 'tanggal_terima'];
    protected $primaryKey = 'id';

    public function s_cabang()
    {
        return $this->hasOne('\App\Cabang', 'id', 'cabang');
    }

    public function s_penjualan()
    {
        return $this->hasOne('\App\Penjualan', 'stt', 'stt');
    }
}
