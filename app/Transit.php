<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transit extends Model
{
    protected $table = 'transit';
    protected $fillable = ['penjualan', 'transit'];
    protected $primaryKey = 'id';
}
