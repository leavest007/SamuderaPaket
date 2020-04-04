<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalUmum extends Model
{
    protected $table = 'jurnalumum';
    protected $fillable = ['id', 'tanggal', 'kode_account', 'nama_account', 'kantor', 'keterangan', 'keterangan_tambahan', 'debet', 'kredit'];
    protected $primaryKey = 'id';

    public function s_account()
    {
        return $this->hasOne('\App\Account', 'id', 'kode_account');
    }

    public function s_kantor()
    {
        return $this->hasOne('\App\Cabang', 'id', 'kantor');
    }
}
