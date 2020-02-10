<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $fillable = ['nama_pegawai', 'alamat_pegawai', 'telpon_pegawai'];

    public $timestamps = true;
}
