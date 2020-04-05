<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestPickupBarang extends Model
{
    protected $table = 'requestpickupbarang';
    protected $fillable = ['pengirim', 'penerima', 'alamat_pengambilan', 'tujuan', 'jumlah_colly', 'cabang', 'status', 'tanggal', 'user'];
    protected $primaryKey = 'id';

    public function s_cabang()
    {
        return $this->hasOne('\App\Cabang', 'id', 'cabang');
    }
}
