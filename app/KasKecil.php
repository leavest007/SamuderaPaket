<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KasKecil extends Model
{
    protected $table = 'kaskecil';
    protected $fillable = ['id', 'tanggal', 'kode_account', 'nama_account', 'kantor', 'keterangan', 'keterangan_tamabahan', 'debet', 'kredit'];
    protected $primaryKey = 'id';

    public function s_account()
    {
        return $this->hasOne('\App\Account', 'kode_account', 'nama_account');
    }

    public function s_kantor()
    {
        return $this->hasOne('\App\Cabang', 'id', 'kantor');
    }

}
