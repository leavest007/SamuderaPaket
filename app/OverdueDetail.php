<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OverdueDetail extends Model
{
    protected $table = 'overduedetail';
    protected $fillable = ['stt', 'tanggal', 'nominal'];
    protected $primaryKey = 'id';
}
