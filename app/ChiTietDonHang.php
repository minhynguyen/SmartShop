<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    public    $timestamps   = false;

    protected $table        = 'ChiTietDonHang';
    protected $fillable     = ['sp_ma', 'dh_ma', 'ctdh_soluong', 'ctdh_dongia'];
    public    $incrementing = false;
}
