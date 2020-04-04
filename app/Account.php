<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';
    protected $fillable = ['kode', 'nama_account'];
    protected $primaryKey = 'id';
}
